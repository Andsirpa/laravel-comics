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
  return view('pages.home');
})
  // do il nome alla rotta per poterla utilizzare
  ->name('homepage');
;

Route::get('/comics', function () {
  return view('pages.comics');
})->name('comics');
