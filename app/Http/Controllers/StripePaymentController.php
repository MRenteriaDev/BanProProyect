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
    public function fillbinding()
    {

        return view('clienteRegistrado.fillbilingInf');
    }

    public function fillbindingpost(Request $request)
    {
        $request->validate([
            'billing_phone' => 'unique:billing_information,billing_phone,'
        ]);

        BillingInformation::create([
            'billing_name' => $request->billing_name,
            'billing_email' => Auth::user()->email,
            'billing_phone' => $request->billing_phone,
            'billing_city' => $request->billing_city,
            'billing_state' => $request->billing_state,
            'billing_address' => $request->billing_address,
            'billing_zip' => $request->billing_zip,
            'seller_id' => Auth::user()->id,
            'created_at' => Carbon::now(),
        ]);

        Seller::create([
            'id' => Auth::user()->id,
            'name' => $request->billing_name,
            'email' => Auth::user()->email,
            'password' => Auth::user()->password,
            'created_at' => Carbon::now(),
            'seller_active' => false,
        ]);

        $notification = array(
            'message' => "Alta de datos necesaroios, correcta",
            'alert-type' => "success"
        );

        return view('clienteRegistrado.fillpayment')->with($notification);
    }

    public function stripeGet()
    {
        return view('clienteRegistrado.fillpayment');
    }

    public function stripePost(Request $request)
    {

        Stripe::setApiKey(env('STRIPE_SECRET'));
        $mont_actual = Carbon::now()->format('M');

        if ($mont_actual != "Nov") {
            Charge::create([
                "amount" => 40000,
                "currency" => "mxn",
                "source" => "tok_visa_debit",
                "description" => "Paymen of membresy of banpro"
            ]);
        } else {
            Charge::create([
                "amount" => 100,
                "currency" => "mxn",
                "source" => "tok_visa_debit",
                "description" => "Paymen of membresy of banpro"
            ]);
        }

        Seller::where('email', Auth::user()->email)->update([
            'seller_active' => true
        ]);


        $notification = array(
            'message' => 'pago realizado con éxito',
            'type-alert' => "success"
        );

        return redirect()->back()->with($notification);
    }
}
