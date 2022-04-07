<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentsController;


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
    return view('indexuz');
});
Route::get('/en', function () {
    return view('indexen');
});
Route::get('/ru', function () {
    return view('indexru');
});

Route::get('/xivauz', function () {
    return view('locations.xivauz');
});
Route::get('/xivaru', function () {
    return view('locations.xivaru');
});
Route::get('/xivaen', function () {
    return view('locations.xivaen');
});

Route::get('/buxarauz', function () {
    return view('locations.buxarauz');
});
Route::get('/buxararu', function () {
    return view('locations.buxararu');
});
Route::get('/buxaraen', function () {
    return view('locations.buxaraen');
});

Route::get('/samaruz', function () {
    return view('locations.samaruz');
});
Route::get('/samarru', function () {
    return view('locations.samarru');
});
Route::get('/samaren', function () {
    return view('locations.samaren');
});

Route::get('/araluz', function () {
    return view('locations.araluz');
});
Route::get('/aralru', function () {
    return view('locations.aralru');
});
Route::get('/aralen', function () {
    return view('locations.aralen');
});

Route::get('/turuz', function () {
    return view('locations.turuz');
});
Route::get('/turru', function () {
    return view('locations.turru');
});
Route::get('/turen', function () {
    return view('locations.turen');
});

Route::get('/muynaquz', function () {
    return view('locations.muynaquz');
});
Route::get('/muynaqru', function () {
    return view('locations.muynaqru');
});
Route::get('/muynaqen', function () {
    return view('locations.muynaqen');
});


Route::post('/payment', [PaymentsController::class, 'payment']);
Route::post('/pay', [PaymentsController::class, 'getMe']);
