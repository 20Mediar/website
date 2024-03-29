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
    return view('home');
})->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/faq', [App\Http\Controllers\HomeController::class, 'faq'])->name('faq');
Route::get('/onde', [App\Http\Controllers\HomeController::class, 'onde'])->name('onde');
Route::post('/sendemail/send', [App\Http\Controllers\SendEmailController::class, 'send'])->name('send');
Route::post('sendemail/sendCompra', [App\Http\Controllers\SendEmailController::class, 'sendCompra'])->name('send');
Route::get("/data", [App\Http\Controllers\SendEmailController::class, "bd"])->name('bd');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
