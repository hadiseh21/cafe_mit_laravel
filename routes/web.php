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
Route::get('/reserve', function () {
    return view('reserve');
});
Route::get('/kontakt', function () {
    return view('kontakt');
});
Route::get('essen','produktcontroller@index');
Route::get('special/{Kategorie}','produktcontroller@show')->name('special');
Route::get('essen/{Kategorie}','produktcontroller@sehen')->name('kategorie');
