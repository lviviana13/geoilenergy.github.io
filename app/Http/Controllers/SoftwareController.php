<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SoftwareController extends Controller
{
    public function software($lenguaje = null, $idsoftware, $idsubsoftware = null)
    {

        switch (strtolower($idsoftware)) {
            case 'geosoluciones':

                if (isset($idsubsoftware) ) {
                    return  $this->geosoluciones($idsubsoftware, $lenguaje);
                } else {

                    if (isset($lenguaje) && $lenguaje == 'en') {
                        return view(
                            'en.software.geosoluciones',
                            [
                                'title' => 'Geosolutions'
                            ]
                        );
                    } else {
                        return view(
                            'es.software.geosoluciones',
                            [
                                'title' => 'Geosoluciones'
                            ]
                        );
                    }
                }

                break;
            case 'geofisica':

                if (isset($idsubsoftware)) {
                    return  $this->geofisica($idsubsoftware, $lenguaje);
                } else {

                    if (isset($lenguaje) && $lenguaje == 'en') {
                        return view(
                            'en.software.geofisica',
                            [
                                'title' => 'G&G'
                            ]
                        );
                    } else {
                        return view(
                            'es.software.geofisica',
                            [
                                'title' => 'G&G'
                            ]
                        );
                    }
                }

                break;
            default:
                return view('index');
                break;
        }
    }

    protected function geosoluciones($idgeosolucion, $lenguaje = null)
    {
       
        switch (strtolower($idgeosolucion)) {
            case 'g-calculator':
                return view(strtolower($lenguaje).'.software.geosolucionesSoft.g-calculator', ['title' => 'G-Calculator']);
                break;
            case 'fme':
                return view(strtolower($lenguaje).'.software.geosolucionesSoft.fme', ['title' => 'FME']);
                break;
            case 'solv3d':
                return view(strtolower($lenguaje).'.software.geosolucionesSoft.solv3d', ['title' => 'Solv3D']);
                break;
            case 'global-mapper':
                return view(strtolower($lenguaje).'.software.geosolucionesSoft.global-mapper', ['title' => 'Global Mapper']);
                break;
            case 'global-mapper-3d':
                return view(strtolower($lenguaje).'.software.geosolucionesSoft.global-mapper-3d', ['title' => 'Global Mapper 3D']);
                break;
            case 'global-mapper-ld':
                return view(strtolower($lenguaje).'.software.geosolucionesSoft.global-mapper-ld', ['title' => 'Global Mapper Lidar']);
                break;
            case 'i-open':
                return view(strtolower($lenguaje).'.software.geosolucionesSoft.i-open', ['title' => 'I-OPEN']);
                break;
            default:
                return view('index');
                break;
        }
    }

    protected function geofisica($idgeofisica, $lenguaje = null)
    {
        switch (strtolower($idgeofisica)) {
            case 'structural-solver':
                return view(strtolower($lenguaje).'.software.geofisicaSoft.structural-solver', ['title' => 'Structural Solver']);
                break;
            case 'globe-claritas':
                return view(strtolower($lenguaje).'.software.geofisicaSoft.globe-claritas', ['title' => 'Globe Claritas']);
                break;
            case 'geovariances':
                return view(strtolower($lenguaje).'.software.geofisicaSoft.geovariances', ['title' => 'Geovariances']);
                break;
            case 'seisware-geologia':
                return view(strtolower($lenguaje).'.software.geofisicaSoft.seisware-geologia', ['title' => 'SeisWare Geologia']);
                break;
            case 'seisware-geofisica':
                return view(strtolower($lenguaje).'.software.geofisicaSoft.seisware-geofisica', ['title' => 'SeisWare Geofisica']);
                break;
            case 'geomodeling':
                return view(strtolower($lenguaje).'.software.geofisicaSoft.geomodeling', ['title' => 'GeoModeling']);
                break;
            case 'qi':
                return view(strtolower($lenguaje).'.software.geofisicaSoft.qi', ['title' => 'QI']);
                break;
            case 'tesseral':
                return view(strtolower($lenguaje).'.software.geofisicaSoft.tesseral', ['title' => 'Tesseral']);
                break;
            case 'hds2000':
                return view(strtolower($lenguaje).'.software.geofisicaSoft.hds2000', ['title' => 'HDS2000']);
                break;
            default:
                return view(strtolower($lenguaje).'.index');
                break;
        }
    }
}
