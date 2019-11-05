<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiciosController extends Controller
{
    public function servicios($lenguaje, $idservicio, $idsubservicio = null)
    {
        switch (strtolower($idservicio)) {
            case 'geoespaciales':
                if (isset($idsubservicio)) {
                    return $this->geoespacial($idsubservicio, $lenguaje);
                } else {
                    if (isset($lenguaje) && $lenguaje == 'en') {
                        return view(
                            'en.servicios.geoespaciales',
                            [
                                'title' => 'Geosolutions'
                            ]
                        );
                    } else {
                        return view(
                            'es.servicios.geoespaciales',
                            [
                                'title' => 'Geosoluciones'
                            ]
                        );
                    }
                }
                break;
            case 'geofisica':
                if (isset($lenguaje) && $lenguaje == 'en') {
                    return view(
                        'en.servicios.geofisica',
                        [
                            'title' => 'G&G'
                        ]
                    );
                } else {
                    return view(
                        'es.servicios.geofisica',
                        [
                            'title' => 'G&G'
                        ]
                    );
                }
                break;
            case 'geologia':
                if (isset($lenguaje) && $lenguaje == 'en') {
                    return view(
                        'en.servicios.geologia',
                        [
                            'title' => 'G&G'
                        ]
                    );
                } else {
                    return view(
                        'es.servicios.geologia',
                        [
                            'title' => 'G&G'
                        ]
                    );
                }
                break;
            case 'geoquimica':
                if (isset($lenguaje) && $lenguaje == 'en') {
                    return view(
                        'en.geoquimica.chemostrat',
                        [
                            'title' => 'Chemostrat'
                        ]
                    );
                } else {
                    return view(
                        'es.geoquimica.chemostrat',
                        [
                            'title' => 'Chemostrat'
                        ]
                    );
                }
                break;
            default:
                return view('es.index');
                break;
        }
    }

    public function geoespacial($idgeoespacial, $lenguaje)
    {
        switch (strtolower($idgeoespacial)) {
            case 'deimos':
                return view(strtolower($lenguaje) . '.servicios.geoespacialesServ.deimos', ['title' => 'Deimos Imaging']);
                break;
            case 'eagle-mapping';
                return view(strtolower($lenguaje) . '.servicios.geoespacialesServ.eagle-mapping', ['title' => 'Eagle Mapping']);
                break;
            case 'iopenfme':
                return view(strtolower($lenguaje) . '.servicios.geoespacialesServ.iopenfme', ['title' => 'IOPEN & FME']);
                break;
            case 'sigoe':
                return view(strtolower($lenguaje) . '.servicios.geoespacialesServ.sigoe', ['title' => 'Sigoe']);
                break;
            case 'ecopia':
                return view(strtolower($lenguaje) . '.servicios.geoespacialesServ.ecopia', ['title' => 'Ecopia']);
                break;
            case 'drones':
                return view(strtolower($lenguaje) . '.servicios.geoespaciales.ecopia', ['title' => 'Drones']);
                break;
            default:
                return view('index');
                break;
        }
    }
}
