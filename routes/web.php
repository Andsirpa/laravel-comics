<?php

use Illuminate\Support\Facades\Route;

// importo il controller
use App\Http\Controllers\PageController;

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
  $comics = config('comics');
  // uso il dump and die per verificare che l'array arrivi correttamente dd($comics);

  return view('pages.comics', compact('comics'));
})->name('comics');
