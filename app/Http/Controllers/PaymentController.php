<?php

namespace App\Http\Controllers;

use App\Http\Requests\PaymentRequest;
use Illuminate\Http\Response;

class PaymentController extends Controller
{
    /**
     * Show payment page.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|Response|\Illuminate\View\View
     */
    public function show()
    {
        $price = decrypt(request('price'));
        return view('payment', compact('price'));
    }

    /**
     * Pay using stripe package.
     *
     * @param PaymentRequest $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|Response|\Illuminate\Routing\Redirector
     */
    public function pay(PaymentRequest $request)
    {
        try {
            Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
            Stripe\Charge::create([
               'amount' => $request->price,
               'currency' =>'inr',
               'source' => $request->stripeToken,
               'description' =>'Test payment',
            ]);
            return redirect('/')->with('status', 'Payment Success!');
        } catch (\Throwable $exception) {
            return redirect('/')->with('error', 'Payment Failed!');
        }
    }
}
