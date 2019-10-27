<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AliadosController extends Controller
{
    public function index()
    {
        return view('aliados', ['title' => 'Aliados']);
    }
}
