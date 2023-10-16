<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [SearchHistoryController::class, 'index'])->name('search-history.index');
Route::get('/search-history/results', [SearchHistoryController::class, 'filter'])->name('search-history.filter');
// Route::get('/search-history/filter', [SearchHistoryController::class, 'filter'])->name('search-history.filter');



