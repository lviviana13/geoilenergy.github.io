<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index($lenguaje = null)
    {
        if(isset($lenguaje) && $lenguaje == 'en'){
            return view('en.index', ['title' => 'Bienvenidos']);
        }else{
            return view('es.index', ['title' => 'Welcome']);
        }
        
    }
}
