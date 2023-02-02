<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyController;


Route::get('/', [PropertyController::class, 'index']);

Route::get('/property/{property}', [PropertyController::class, 'show']);
