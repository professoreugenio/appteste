<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
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
