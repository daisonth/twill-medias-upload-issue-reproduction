<?php

use App\Http\Controllers\HomePageDisplayController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomePageDisplayController::class, "index"])->name('home');
