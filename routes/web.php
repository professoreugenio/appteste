<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/home',[MainController::class, 'index']);
Route::get('/sobre',[MainController::class, 'sobre']);
Route::get('/contato',[MainController::class, 'contato']);