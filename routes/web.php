<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/laravel', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

// Homepage
Route::get('/', function () {
    return view('homepage');
});

// Checkout
Route::get('/checkout', function () {
    return view('checkout');
});

Route::post('/checkout', function (Request $request) {
    // Set your Stripe API key.
    \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

    // Get the payment amount, email address and Stripe token from the form.
    $amount = $request->input('amount') * 100;
    $email = $request->input('email');
    $stripeToken = $request->input('stripeToken');

    // Create a new Stripe customer.
    $customer = \Stripe\Customer::create([
        'email' => $email,
        'source' => $stripeToken,
    ]);

    // Create a new Stripe charge.
    $charge = \Stripe\Charge::create([
        'customer' => $customer->id,
        'amount' => $amount,
        'currency' => 'usd',
    ]);

    // Display a success message to the user.
    return 'Payment successful!';
});


Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
 
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
