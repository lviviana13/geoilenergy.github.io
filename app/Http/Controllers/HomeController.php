<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index($lenguaje = null)
    {
        if (isset($lenguaje) AND $lenguaje == 'en') {
            return view('en.index', ['title' => 'Welcome']);
        } else {
            return view('es.index', ['title' => 'Bienvenidos']);
        }
    }
}
