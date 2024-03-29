<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MovieController;

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
    return view('welcome');
});

Route::get("/movie/{movie}", [MovieController::class, "show"])->middleware(['auth'])->name("movie.show");

Route::get('/home', [HomeController::class, "index"])->middleware(['auth'])->name('home');

require __DIR__.'/auth.php';
