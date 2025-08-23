<?php

namespace App\Http\Controllers;

use Stripe\Stripe;
use App\Models\Payment;
use App\Models\Product;
use Illuminate\Http\Request;
use Stripe\Checkout\Session;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    function payment(Request $request)
    {
        $product = Product::findOrFail($request->product_id);
        $amount = $product->sale_price ? $product->sale_price : $product->price;

        $payment = Payment::create([
            'price' => $amount,
            'status' => 'pending',
            'transaction_id' => 'ddd',
            'product_id' => $request->product_id,
            'user_id' => Auth::id()
        ]);
        //Setup Stripe Process
        Stripe::setApiKey(env('STRIPE_SECRET'));
        $session = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'usd',
                    'product_data' => [
                        'name' => $product->trans_name
                    ],
                    'unit_amount' => (int)($amount * 100),
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'customer_email' => Auth::user()->email,
            'success_url' => route('front.success', ['payment' =>  $payment->id]),
            'cancel_url' => route('front.cancel', ['payment' =>  $payment->id]),
        ]);
        return response()->json(['session_id' => $session->id]);
    }
    function success(Request $request)
    {
        $payment = Payment::find($request->payment);
        $payment->update([
            'status' => 'completed'
        ]);

        return 'Payment Done';
    }

    function cancel(Request $request)
    {
        $payment = Payment::find($request->payment);
        $payment->update([
            'status' => 'canceled'
        ]);

        return 'Payment Canceled';
    }
}
