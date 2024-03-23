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
// qui tengo solo la lista delle rotte
Route::get('/', [PageController::class, 'index'])->name('homepage');
Route::get('/comics', [PageController::class, 'comics'])->name('comics');
