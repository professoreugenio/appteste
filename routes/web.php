<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;


Route::get('/',[MainController::class, 'home'])->name('home');
Route::get('/home',[MainController::class, 'home'])->name('home');
Route::get('/sobre',[MainController::class, 'sobre'])->name('sobre');
Route::get('/contato',[MainController::class, 'contato'])->name('contato');
