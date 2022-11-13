<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use App\Models\BillingInformation;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Stripe\Charge;
use Stripe\Stripe;

class StripePaymentController extends Controller
{
    public function checkout()
    {
        return view('clienteRegistrado.fillbilingInf');
    }

    public function session()
    {
        \Stripe\Stripe::setApiKey(config('stripe.sk'));

        $session = \Stripe\Checkout\Session::create([
            'line_items'  => [
                [
                    'price_data' => [
                        'currency'     => 'mxn',
                        'product_data' => [
                            'name' => 'BANPRO 1 mes',
                        ],
                        'unit_amount'  => 100*10,
                        'recurring' => [
                            'interval' => 'month',

                        ]
                    ],
                    'quantity'   => 1,
                ],
            ],
            'mode'        => 'subscription',
            'success_url' => route('success'),
            'cancel_url'  => route('checkout'),
        ]);

        return redirect()->away($session->url);
    }

    public function success()
    {
        Seller::where('email', Auth::user()->email)->update([
            'seller_active' => true
        ]);


        $notification = array(
            'message' => 'pago realizado con éxito',
            'type-alert' => "success"
        );

        return redirect()->route('dashboard')->with($notification);
    }

}
