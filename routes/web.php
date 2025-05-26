<?php

use App\Http\Controllers\IconsController;
use Illuminate\Support\Facades\Route;

Route::get('/icons', [IconsController::class, 'index']);
