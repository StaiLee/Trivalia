<?php
      
namespace App\Http\Controllers;
       
use Illuminate\Http\Request;
use Stripe;
use Illuminate\View\View;
       
class StripePaymentController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripe(): View
    {
        return view('stripe');
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function stripeCheckout(Request $request, $product)
    {
        $controller = new ProductController();
        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
  
        $redirectUrl = route('stripe.checkout.success', ['product' => $product]).'?session_id={CHECKOUT_SESSION_ID}';
        $response =  $stripe->checkout->sessions->create([
                'success_url' => $redirectUrl,
                'payment_method_types' => ['link', 'card'],
                'line_items' => [
                    [
                        'price_data'  => [
                            'product_data' => [
                                'name' => $controller->showName($product), //  $request->product
                            ],
                        'unit_amount'  => 100 * $controller->showPrice($product) , //  $request->price
                            'currency'     => 'USD',
                        ],
                        'quantity'    => 1
                    ],
                ],
                'mode' => 'payment',
                'allow_promotion_codes' => true
            ]);
  
        return redirect($response['url']);
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function stripeCheckoutSuccess(Request $request)
    {
        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
  
        $session = $stripe->checkout->sessions->retrieve($request->session_id);
        info($session);
  
        return redirect()->route('stripe.index')
                         ->with('success', 'Payment successful.');
    }
}