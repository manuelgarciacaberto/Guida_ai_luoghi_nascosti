<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

//!                             Homepage
Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

