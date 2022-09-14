<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StripePaymentController extends Controller
{
    public function stripePost(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));

        Stripe\Charge::create([
            "amount" => 400 * 400,
            "currency" => "mxn",
            "source" => $request->stripeToken,
            "description" => "Test payment from banpro.mxn"
        ]);

        $notification = array(
            'message' => 'pago realizado con éxito',
            'type-alert' => "success"
        );

        return redirect()->back()->with($notification);
    }
}
