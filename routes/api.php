<?php

use App\Http\Controllers\MovieController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post("/movie/{movie}/buy", [MovieController::class, "buy"])->name("movie.buy");