<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get("/", [PageController::class, "index"])->name("home");

Route::get('movies/{id}', [PageController::class, "show"])->name('show');

