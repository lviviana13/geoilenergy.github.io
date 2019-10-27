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
                               'title' => 'Soluciones Geoespaciales | GeOilEnergy'
                           ]
                    );
                break;
            case 'geofisica':
                return view('servicios.geofisica', ['title' => 'Servicios Geofisica | GeOilEnergy']);
                break;
            case 'geologia':
                return view('servicios.geologia', ['title' => ['Servicios Geología | GeOilEnergy']]);
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
                return view('servicios.geoespacialesServ.deimos', ['title' => 'Deimos Imaging | GeOilEnergy']);
                break;
            case 'eagle-mapping';
                return view('servicios.geoespacialesServ.eagle-mapping', ['title' => 'Eagle Mapping | GeOilEnergy']);
                break;
            case 'iopenfme':
                return view('servicios.geoespacialesServ.iopenfme', ['title' => 'IOPEN & FME | GeoOilEnergy']);
                break;
            case 'sigoe':
                return view('servicios.geoespacialesServ.sigoe', ['title' => 'Sigoe | GeOilEnergy']);
                break;
            case 'ecopia':
                return view('servicios.geoespacialesServ.ecopia', ['title' => 'Ecopia | GeOilEnergy']);
                break;
            case 'drones':
                return view('servicios.geoespaciales.ecopia', ['title' => 'Drones | GeOilEnergy']);
                break;
            default:
                return view('index');
                break;
        }
    }
}
