<?php

use Illuminate\Support\Facades\Route;
use Resources\views\home;
use Resources\views\product;
use Resources\views\product1;
use Resources\views\product2;
use Resources\views\news;
use Resources\views\program;
use Resources\views\program1;
use Resources\views\program2;
use Resources\views\about_us;
use Resources\views\voucher;
use App\Http\Controllers\ContactUs;
use App\Http\Controllers\voucherController;

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

Auth::routes();

Route::get('/', function () {
	return view('home');
});

Route::get('/product', function () {
	return view('product');
});

Route::prefix('product')->group(function () {
    Route::get('/1', function () {
        return view('product1');
    });
    Route::get('/2', function () {
        return view('product2');
    });
});

Route::get('/news/{id}', function ($id) {
    return view('news', ['nomor' => $id ]);
});

Route::get('/program', function () {
	return view('program');
});

Route::prefix('program')->group(function () {
    Route::get('/1', function () {
        return view('program1');
    });
    Route::get('/2', function () {
        return view('program2');
    });
});

Route::get('/about-us', function () {
	return view('about_us');
});

Route::resource('contact-us', ContactUs::class);

Route::get('/layout-master', function () {
	return view('layout-master');
});

//route create
Route::get('voucher', function () {
   return view('voucher');
});

//Route::get('/voucher', 'voucherController@voucher');


