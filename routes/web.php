<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyController;


Route::get('/', [PropertyController::class, 'index']);
