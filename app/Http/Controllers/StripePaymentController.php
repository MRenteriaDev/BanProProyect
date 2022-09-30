<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Stripe\Charge;
use Stripe\Stripe;

class StripePaymentController extends Controller
{
    public function stripePost(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));

        Charge::create([
            "amount" => 400.00,
            "currency" => "mxn",
            "source" => "tok_visa_debit",
            "description" => "Paymen of membresy of banpro"
        ]);

        $notification = array(
            'message' => 'pago realizado con éxito',
            'type-alert' => "success"
        );

        return redirect()->back()->with($notification);
    }
}
