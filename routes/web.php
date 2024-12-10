<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    echo "Minha página web";
});

Route::get('/sobre', function() {
    echo "Página sobre";
});