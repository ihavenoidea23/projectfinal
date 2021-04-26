<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\FileUpload;

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

Route::get('/login', function () {
    return view('login');
});


Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});
Route::view("/register",'register');
Route::post("/login",[UserController::class,'login']);
Route::post("/register",[UserController::class,'register']);

Route::get("/",[ProductController::class,'index']);
Route::get("detail/{id}",[ProductController::class,'detail']);
Route::get("search",[ProductController::class,'search']);
Route::post("add_to_cart",[ProductController::class,'addToCart']);
Route::get("cartlist",[ProductController::class,'cartList']); 
Route::get("removecart/{id}",[ProductController::class,'removeCart']); 
Route::get("ordernow",[ProductController::class,'orderNow']); 
Route::post("orderplace",[ProductController::class,'orderPlace']);
Route::get("myorders",[ProductController::class,'myOrders']);
Route::get('/upload-file', [FileUpload::class, 'createForm']);

Route::post('/upload-file', [FileUpload::class, 'fileUpload'])->name('fileUpload');
Route::get('send-mail', function () {
   
    $details = [
        'title' => 'Mail from ItSolutionStuff.com',
        'body' => 'This is for testing email using smtp'
    ];
   
    \Mail::to('your_receiver_email@gmail.com')->send(new \App\Mail\MyTestMail($details));
   
    dd("Email is Sent.");
});