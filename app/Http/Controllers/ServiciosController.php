<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiciosController extends Controller
{
    public function servicios($idservicio, $idsubservicio = null)
    {
        switch (strtolower($idservicio)) {
            case 'geoespaciales':
                return (isset($idsubservicio))
                    ? $this->geoespacial($idsubservicio)
                    : view('servicios.geoespaciales',
                           [
                               'title' => 'Soluciones Geoespaciales'
                           ]
                    );
                break;
            case 'geofisica':
                return view('servicios.geofisica', ['title' => 'Servicios Geofisica']);
                break;
            case 'geologia':
                return view('servicios.geologia', ['title' => 'Servicios Geología']);
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
                return view('servicios.geoespacialesServ.deimos', ['title' => 'Deimos Imaging']);
                break;
            case 'eagle-mapping';
                return view('servicios.geoespacialesServ.eagle-mapping', ['title' => 'Eagle Mapping']);
                break;
            case 'iopenfme':
                return view('servicios.geoespacialesServ.iopenfme', ['title' => 'IOPEN & FME']);
                break;
            case 'sigoe':
                return view('servicios.geoespacialesServ.sigoe', ['title' => 'Sigoe']);
                break;
            case 'ecopia':
                return view('servicios.geoespacialesServ.ecopia', ['title' => 'Ecopia']);
                break;
            case 'drones':
                return view('servicios.geoespaciales.ecopia', ['title' => 'Drones']);
                break;
            default:
                return view('index');
                break;
        }
    }
}
