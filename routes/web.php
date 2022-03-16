<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/paypal/{order?}','App\Http\Controllers\PayPalController@form')->name('order.paypal');
Route::post('/checkout/payment/{id}','App\Http\Controllers\PayPalController@checkout')->name('checkout.payment.paypal');
Route::get('/paypal/checkout/{order}/completed','App\Http\Controllers\PayPalController@completed')->name('paypal.checkout.completed');
Route::get('/paypal/checkout/{order}/cancelled','App\Http\Controllers\PayPalController@cancelled')->name('paypal.checkout.cancelled');
Route::post('/webhook/paypal/{order?}/{env?}','App\Http\Controllers\PayPalController@webhook')->name('webhook.paypal.ipn');
Route::get('payment-completed/{order}','App\Http\Controllers\PayPalController@paymentCompleted')->name('paymentCompleted');
Route::get('payment-history','App\Http\Controllers\PayPalController@paymentHistory')->name('paymentHistory');
