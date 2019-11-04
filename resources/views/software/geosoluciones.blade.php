@extends('layouts.small-header')
@section('title'){{$title}}@endsection
@section('content')
<!-- /projects -->
<section class="projects py-5" id="gallery">
    <div class="container py-md-5">
        <h3 class="tittle-w3ls text-left mb-5">Software <span class="pink">Geoespacial
            </span> </h3>
        <div class="row news-grids mt-md-5 mt-4 text-center">
            <div class="col-md-4 gal-img">
                <a href="{{url('/software/geosoluciones/g-calculator')}}"><img src="/images/software/index/geographiCalculator.png" alt="w3pvt" class="img-fluid">
                    <div class="gal-info">
                        <h5>Geographic Calculator<span class="decription"> Software geodésico con énfasis en sísmica,
                                exploración de energía y datos geográficos para empresas, organizaciones, y usuarios particulares;

                            </span></h5>
                    </div>
                </a>
            </div>

            <div class="col-md-4 gal-img">
                <a href="{{url('/software/geosoluciones/global-mapper')}}"><img src="/images/software/index/gm.png" alt="w3pvt" class="img-fluid">
                    <div class="gal-info">
                        <h5>Global Mapper <span class="decription"> Potente y asequible aplicación de sistemas de información geográfica (SIG) que combina una gama completa de soluciones informáticas para el procesamiento de datos espaciales. </span></h5>
                    </div>
                </a>
            </div>

            <div class="col-md-4 gal-img">
                <a href="{{url('/software/geosoluciones/global-mapper-ld')}}"><img src="/images/software/index/gm-l.jpg" alt="w3pvt" class="img-fluid">
                    <div class="gal-info">
                        <h5>Global Mapper / Modulo LiDAR<span class="decription"> Mejora opcional del software Global Mapper que proporciona numerosas herramientas avanzadas de procesamiento LiDAR </span></h5>
                    </div>
                </a>
            </div>



            <div class="col-md-4 gal-img">
                <a href="{{url('/software/geosoluciones/fme')}}"><img style="height: 200px" src="/images/software/index/fme.png" alt="w3pvt" class="img-fluid">
                    <div class="gal-info">
                        <h5>FME<span class="decription">
                                Plataforma que permite integrar diferentes formatos de datos de una manera rápida y eficiente, reestructurándolos y transformándolos segun la necesidad del usuario. Cuenta con el mejor soporte para datos espaciales a nivel mundial.

                            </span></h5>
                    </div>
                </a>
            </div>

            <div class="col-md-4 gal-img">
                <a href="{{url('/software/geosoluciones/solv3d')}}"><img style="height: 200px" src="/images/software/index/solv3D.png" alt="w3pvt" class="img-fluid"></a>
                <div class="gal-info">
                    <h5>Solv3D<span class="decription">Solución basada en la web que potencia sus datos, con la capacidad de reunir conjuntos de datos geoespaciales de muchas fuentes</span></h5>
                </div>
            </div>

            <div class="col-md-4 gal-img">
                <a href="{{url('/software/geosoluciones/i-open')}}"><img style="height: 200px" src="/images/software/index/iopen.svg" alt="w3pvt" class="img-fluid"></a>
                <div class="gal-info">
                    <h5>I-Open<span class="decription">
                            Solución completa de Interfaz web corporativa y servicio que se ajustan a sus necesidades de infraestructura, Servicios avanzados de almacenamiento y mantenimiento de datos geoespaciales y no geoespaciales </span></h5>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //projects -->
@endsection