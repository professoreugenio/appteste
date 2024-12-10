<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController
{
    public function home(){
        return view('home');
    }
    public function sobre(){
        return view('sobre');
    }
    public function contato(){
        return view('contato');
    }
}
