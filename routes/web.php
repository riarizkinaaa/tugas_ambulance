<?php

use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\TestController;
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

// Route::get('/', [TestController::class,"index"])->name('home');
Route::resource('/index', KecamatanController::class);
// Route::get('/about1', [KecamatanController::class,"index"]);
Route::get('/',function(){
    return view('kecamatan.home');
});

Route::get('/search', [KecamatanController::class, 'search'])->name('search');
