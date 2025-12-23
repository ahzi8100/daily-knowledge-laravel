<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WikipediaController;

Route::get('/', [WikipediaController::class, 'index']);
