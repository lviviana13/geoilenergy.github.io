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
                    <a href="{{url('/software/geosoluciones/g-calculator')}}"><img src="/images/g1.jpg" alt="w3pvt" class="img-fluid"></a>
                    <div class="gal-info">
                        <h5>GEOGRAPHIC CALCULATOR<span class="decription">Geogaphic Calculator es un poderoso software geodésico con énfasis en sísmica, exploración de energía y datos geográficos para empresas, organizaciones, y usuarios particulares; desarrollado por Blue Marble Geographics. Es ampliamente reconocido como la herramienta más importante para abordar y resolver los más complejos y exigentes retos geodésicos. Profesionales SIG alrededor del mundo eligen Geographic Calculator por ser una herramienta correcta, coherente y certificable.</span></h5>
                    </div>
                </div>
                <div class="col-md-4 gal-img">
                    <a href="{{url('/software/geosoluciones/fme')}}"><img src="/images/g2.jpg" alt="w3pvt" class="img-fluid"></a>
                    <div class="gal-info">
                        <h5>FME<span class="decription"> Mejorar la sísmica </span></h5>
                    </div>
                </div>

                <div class="col-md-4 gal-img">
                    <a href="{{url('/software/geosoluciones/global-mapper-3d')}}"><img src="/images/g4.jpg" alt="w3pvt"
                                                                                     class="img-fluid"></a>
                    <div class="gal-info">
                        <h5>Solv3D<span class="decription">software tal</span></h5>
                    </div>
                </div>
                <div class="col-md-4 gal-img">
                    <a href="{{url('/software/geosoluciones/global-mapper')}}"><img src="/images/g3.jpg" alt="w3pvt" class="img-fluid"></a>
                    <div class="gal-info">
                        <h5>GLOBAL MAPPER <span class="decription"> Global Mapper es un software de sistemas de información geográfica (SIG) desarrollado por Blue Marble Geographics, de precio asequible e increíblemente poderoso; junto con el módulo LiDAR son la combinación perfecta: completa interoperabilidad, procesamiento de datos y facilidad de uso. Global Mapper + Módulo LiDAR es la solución que su compañía necesita.</span></h5>
                    </div>
                </div>
                <div class="col-md-4 gal-img">
                    <a href="{{url('/software/geosoluciones/global-mapper-ld')}}"><img src="/images/g3.jpg" alt="w3pvt" class="img-fluid"></a>
                    <div class="gal-info">
                        <h5>GLOBAL MAPPER / MODULO LIDAR<span class="decription"> Soft </span></h5>
                    </div>
                </div>
                <div class="col-md-4 gal-img">
                    <a href="{{url('/software/geosoluciones/i-open')}}"><img src="/images/g6.jpg" alt="w3pvt" class="img-fluid"></a>
                    <div class="gal-info">
                        <h5>I-Open<span class="decription">Website</span></h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //projects -->
    @endsection
