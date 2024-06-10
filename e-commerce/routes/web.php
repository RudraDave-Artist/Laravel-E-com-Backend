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

Route::get('/',[App\Http\Controllers\NavController::class,'nav'])->name('index');
Route::get('/about',[App\Http\Controllers\NavController::class,'about'])->name('about');
Route::get('/contact',[App\Http\Controllers\NavController::class,'contact'])->name('contact');
Route::get('/faqs',[App\Http\Controllers\NavController::class,'faqs'])->name('faqs');
Route::get('/kitchen',[App\Http\Controllers\ProductController::class,'kitchen'])->name('kitchen');
Route::get('/household',[App\Http\Controllers\ProductController::class,'household'])->name('household');
Route::get('/typography',[App\Http\Controllers\NavController::class,'typography'])->name('typography');
Route::get('/icon',[App\Http\Controllers\NavController::class,'icons'])->name('icon');
Route::get('/single',[App\Http\Controllers\NavController::class,'single'])->name('single');
Route::get('/single2/{id}',[App\Http\Controllers\NavController::class,'single2'])->name('single2');
Route::get('/single3/{id}',[App\Http\Controllers\NavController::class,'single3'])->name('single3');
Route::get('/help',[\App\Http\Controllers\NavController::class,'help'])->name('help');  
Route::get('/terms',[\App\Http\Controllers\NavController::class,'terms'])->name('terms');  
Route::get('/privacy',[\App\Http\Controllers\NavController::class,'privacy'])->name('privacy');  
Route::get('/dryfruits',[\App\Http\Controllers\ProductController::class,'dryfruits'])->name('dryfruits');  
Route::get('/beverages',[\App\Http\Controllers\ProductController::class,'beverages'])->name('beverages');  
Route::post('/search',[\App\Http\Controllers\NavController::class,'search'])->name('search');  

Route::get('/carthistory/{id}',[\App\Http\Controllers\NavController::class,'carthistory'])->name('history');
Route::post('/cart',[\App\Http\Controllers\NavController::class,'cart'])->name('cart');
Route::post('/delieverydetails',[\App\Http\Controllers\NavController::class,'delieverydetails'])->name('delieverydetails');
Route::get('/delieverydetails',[\App\Http\Controllers\NavController::class,'detials'])->name('delieverydetails');
Route::get('/cartlist/{id}',[\App\Http\Controllers\NavController::class,'cartlist'])->name('cartlist');
Route::post('/cartlist',[\App\Http\Controllers\NavController::class,'cartlist2'])->name('cartlist2');
Route::get('/delievery',[\App\Http\Controllers\NavController::class,'delievery'])->name('delievery');
Route::get('/deleteitem/{id}/{cart_id}',[\App\Http\Controllers\NavController::class,'deleteitem'])->name('deleteitem');
Route::get('/payment/{id}',[\App\Http\Controllers\NavController::class,'payment'])->name('payment');
Route::get('/addressdetail/{cust_id}',[\App\Http\Controllers\NavController::class,'addressdetail'])->name('addressdetail');
Route::get('/displayaddress/{id}',[\App\Http\Controllers\NavController::class,'displayaddress'])->name('displayaddress');
Route::get('/edit/{id}',[\App\Http\Controllers\NavController::class,'edit'])->name('edit');
Route::post('/updatedetails/{id}',[\App\Http\Controllers\NavController::class,'updatedetail'])->name('updatedetails');
Route::get('/select/{id}',[\App\Http\Controllers\NavController::class,'select'])->name('select');
Route::post('/order',[\App\Http\Controllers\NavController::class,'order'])->name('order');
Route::get('/orderdetails/{id}',[\App\Http\Controllers\NavController::class,'orderdetails'])->name('orderdetails');

Route::get('/signup',[\App\Http\Controllers\ProfileController::class,'signup'])->name('signup');
Route::get('/signin',[\App\Http\Controllers\ProfileController::class,'signin'])->name('signin');
Route::post('/validation',[\App\Http\Controllers\ProfileController::class,'validation'])->name('validation');
Route::post('/loginvalidation',[\App\Http\Controllers\ProfileController::class,'loginvalidation'])->name('loginvalidation');
Route::post('/logout',[\App\Http\Controllers\ProfileController::class,'logout'])->name('logout');
// Route::get('/',[\App\Http\Controllers\FormController::class,'form']);

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/category',[App\Http\Controllers\ProductController::class,'category'])->name('category');
Route::post('/addcat',[App\Http\Controllers\ProductController::class, 'addcat'])->name('addcat');
Route::get('/admin',[App\Http\Controllers\ProductController::class, 'admin'])->name('admin');
Route::post('/addproduct',[App\Http\Controllers\ProductController::class, 'addproduct'])->name('addproduct');
Route::get('/productlist/{cat_id}',[App\Http\Controllers\ProductController::class, 'productlist'])->name('productlist');
Route::get('/editproduct/{id}',[App\Http\Controllers\ProductController::class, 'editproduct'])->name('editproduct');
Route::get('/deleteproduct/{id}',[App\Http\Controllers\ProductController::class, 'deleteproduct'])->name('deleteproduct');
Route::post('/updateproduct',[App\Http\Controllers\ProductController::class, 'updateproduct'])->name('updateproduct');
Route::post('/decrement',[App\Http\Controllers\ProductController::class, 'decrement'])->name('decrement');
Route::post('/increment',[App\Http\Controllers\ProductController::class, 'increment'])->name('increment');

// Payment

Route::get('/product',[App\Http\Controllers\PaymentController::class, 'index']);
Route::post('/razorpay-payment',[App\Http\Controllers\PaymentController::class, 'store'])->name('razorpay.payment.store');
Route::get('/success/{cust_id}',[App\Http\Controllers\PaymentController::class, 'success'])->name('success');

// Email Testing
Route::get('/sendEmail',[App\Http\Controllers\EmailController::class, 'sendEmail'])->name('sendEmail');

//Event
Route::get('/event',[App\Http\Controllers\NavController::class, 'events']);
Route::get('/listen',[App\Http\Controllers\NavController::class, 'listen'])->name('event');