<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiciosController extends Controller
{
    public function servicios($idservicio)
    {
        switch (strtolower($idservicio)) {
            case 'geoespaciales':
                return view('servicios.geoespaciales');
                break;
            case 'geofisica':
                return view('servicios.geofisica');
                break;
            case 'geologia':
                return view('servicios.geologia');
                break;
            default:
                return view('index');
                break;
        }
    }

    public function geoespacial($idgeoespacial)
    {
        switch (strtolower($idgeoespacial)) {
            case 'deimos':
                return view('servicios.geoespacialesServ.deimos');
                break;
        }
    }
}
