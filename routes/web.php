<?php

use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('home');
});
Route::get('/essen', function () {
    return view('essen');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/special', function () {
    return view('special');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/kunde', function () {
    return view('kunde');
});
Route::get('/reserve', function () {
    return view('reserve');
});
Route::get('/kontakt', function () {
    return view('kontakt');
});
Route::get('/bestätigung', function () {
    return view('bestätigung');
});
Auth::routes();
Route::get('essen','produktcontroller@index');
Route::get('special/{Kategorie}','produktcontroller@show')->name('special');
Route::get('essen/{Kategorie}','produktcontroller@sehen')->name('kategorie');
Route::post('kontakt/bestätigung','kontaktcontroller@store')->name('store');
Route::get('/kontakt/bestätigung','kontaktcontroller@create')->name('kontakt');
Route::get('/kunde/login','kundecontroller@create');
Route::post('/kunde/login','kundecontroller@store')->name("kunden");
Route::post('reserve/bestätigung','reservecontroller@store')->name('reserve');
Route::get('/reserve/bestätigung','reservecontroller@create');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
