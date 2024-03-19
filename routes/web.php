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


// do il nome alle rotte per poterle utilizzare tramite url
Route::get('/', function () {
  return view('pages.home');
})->name('homepage');


Route::get('/comics', function () {
  return view('pages.comics');
})->name('comics');
