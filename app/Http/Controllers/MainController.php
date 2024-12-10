<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        echo "Novo controller index";
    }

    public function sobre(){
        echo "Página sobre no controller";
    }

     public function contato(){
        echo "Página contato no controller";
    }
}
