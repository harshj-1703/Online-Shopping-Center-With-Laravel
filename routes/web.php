<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registrationController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\shopController;
use App\Http\Controllers\additemController;
use App\Http\Controllers\productController;
use App\Http\Controllers\mailController;
use App\Http\Controllers\RazorpayController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AdminController;
use App\Models\registrationdata;

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
Route::get('/', [registrationController::class,'indexlogin']);
Route::get('/registration', [registrationController::class,'index']);
Route::post('/registration',[registrationController::class,'submitform']);
Route::get('/login', [registrationController::class,'indexlogin']);
Route::post('/login', [registrationController::class,'submitloginform']);


Route::middleware(['webguard'])->group(function () {
    Route::get('/profile', [profileController::class,'index'])->middleware('webguard');
    Route::post('/profile', [productController::class,'index']);
    Route::get('/productsearch', [profileController::class,'search']);
    Route::get('/price-lowtohigh', [profileController::class,'lowtohigh']);
    Route::get('/price-hightolow', [profileController::class,'hightolow']);
    // Route::get('/product', [productController::class,'index']);
    // Route::get('/product', [productController::class,'loop']);
    Route::get('/payment',[productController::class,'payment']);
    Route::post('/payment',[productController::class,'paymentpost']);
    // Route::get('/cartpayment',[productController::class,'cartpaymentget']);
    // Get Route For Show Payment Form
    Route::get('/buy', [RazorpayController::class, 'gobuy'])->name('paywithrazorpay');
    // Post Route For Make Payment Request
    // Route::post('/buy', [RazorpayController::class, 'payment'])->name('payment');
    Route::post('/buy', [RazorpayController::class, 'paymentrazorpay'])->name('paymentrazorpay');
    Route::get('/bill', [RazorpayController::class, 'getbill'])->name('paymentrazorpay1');
    // Route::get('/billpdf',[PDFController::class,'generateInvoicePDF']);
    Route::get('/cartbillpdf',[PDFController::class,'generateInvoicePDFcart']);
    Route::get('/cart/{id}',[CartController::class,'index']);
    Route::get('/cart',[CartController::class,'gocart']);
    Route::post('/cart',[productController::class,'cartpost']);
    Route::get('/reducecartitem/{id}',[CartController::class,'cartreduce']);
    Route::get('/additembyone/{id}',[CartController::class,'cartadditem']);
    Route::get('/removecartitem/{id}',[CartController::class,'cartitemremove']);
    Route::get('/removeallitem',[CartController::class,'removeallitem']);
    Route::get('/logout', [registrationController::class,'logout']);
    Route::get('/myorders', [profileController::class,'group']);
});


Route::get('/forgotpassword',[mailController::class,'forgotpassword']);
Route::post('/forgotpassword',[mailController::class,'forgotpost']);
Route::get('/sendbasicemail',[mailController::class,'basic_email']);
Route::get('/sendhtmlemail',[mailController::class,'html_email']);
Route::get('/sendattachmentemail',[mailController::class,'attachment_email']);


Route::middleware(['webguardadmin'])->group(function () {
    Route::get('/additem', [additemController::class,'index']);
    Route::get('/adminhome',[AdminController::class,'adminhome']);
    Route::get('/allorder',[AdminController::class,'allorder']);
    Route::get('/allusers',[AdminController::class,'allusers']);
    Route::get('/allproducts',[AdminController::class,'allproducts']);
    Route::get('/allproducts/check/{id}',[AdminController::class,'itemchange']);
    Route::post('/additem', [additemController::class,'submit']);
});