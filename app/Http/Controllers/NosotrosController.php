<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NosotrosController extends Controller
{
    public function index($lenguaje)
    {
        if(isset($lenguaje) && $lenguaje == 'en'){
            return view('en.nosotros', ['title' => 'Sobre Nosotros']);
        }else{
            return view('es.nosotros', ['title' => 'About Us']);
        }
        
    }
}
