@extends('layouts.small-header')
@section('title'){{$title}}@endsection
@section('content')
    <!-- /projects -->
    <section class="projects py-5" id="gallery">
        <div class="container py-md-5">
            <h3 class="tittle-w3ls text-left mb-5">Software de <span class="pink">Geofísica & Geología
            </span> </h3>
            <div class="row news-grids mt-md-5 mt-4 text-center">
                <div class="col-md-4 gal-img">
                    <a href="{{url('/software/geofisica/structural-solver')}}"><img src="/images/software/index/structuresolver.png" alt="w3pvt" class="img-fluid"></a>
                    <div class="gal-info">
                        <h5>STRUCTURESOLVER<span class="decription"> 

                            Conjunto de herramientas de interpretación,
                            análisis estructural cuantitativa  y restauraciones estructurales.</span></h5>
                    </div>
                </div>
                <div class="col-md-4 gal-img">
                    <a href="{{url('/software/geofisica/globe-claritas')}}"><img src="/images/software/index/globe-claritas.png" alt="w3pvt" class="img-fluid"></a>
                    <div class="gal-info">
                        <h5>GLOBE CLARITAS<span class="decription"> Solución informática costo-efectiva de procesamiento sísmico, marino y terrestre 2D y 3D.</span></h5>
                    </div>
                </div>

                <div class="col-md-4 gal-img">
                    <a href="{{url('/software/geofisica/geovariances')}}"><img src="/images/software/index/geovariances.png" alt="w3pvt" class="img-fluid"></a>
                    <div class="gal-info">
                        <h5>GEOVARIANCES (ISATIS)<span class="decription"> 
                            
                            Programas de geoestadística que 
                            le permite dirigir y manejar las necesidades más desafiantes en 
                            diferentes campos de la industria.</span></h5>
                    </div>
                </div>
                <div class="col-md-4 gal-img">
                    <a href="{{url('/software/geofisica/seisware-geologia')}}"><img src="/images/g3.jpg" alt="w3pvt" class="img-fluid"></a>
                    <div class="gal-info">
                        <h5>Seisware Geología<span class="decription"> Seisware </span></h5>
                    </div>
                </div>
                <div class="col-md-4 gal-img">
                    <a href="{{url('/software/geofisica/seisware-geofisica')}}"><img src="/images/g3.jpg" alt="w3pvt" class="img-fluid"></a>
                    <div class="gal-info">
                        <h5>Seisware Geofísica<span class="decription"> Seisware </span></h5>
                    </div>
                </div>
                <div class="col-md-4 gal-img">
                    <a href="{{url('/software/geofisica/geomodeling')}}"><img src="/images/software/index/geomodeling.png" alt="w3pvt" class="img-fluid"></a>
                    <div class="gal-info">
                        <h5>GEOMODELING<span class="decription">Líder en el análisis de atributos sísmicos y modelamiento multi-escala de reservorio para la industria de exploración y producción de hidrocarburos.</span></h5>
                    </div>
                </div>
                <div class="col-md-4 gal-img">
                    <a href="{{url('/software/geofisica/qi')}}"><img src="/images/g7.jpg" alt="w3pvt" class="img-fluid"></a>
                    <div class="gal-info">
                        <h5>QI<span class="decription">Website</span></h5>
                    </div>
                </div>
                <div class="col-md-4 gal-img">
                    <a href="{{url('/software/geofisica/tesseral')}}"><img  src="/images/software/index/tesseral.png" alt="w3pvt" class="img-fluid"></a>
                    <div class="gal-info">
                        <h5>TESSERAL<span class="decription"> Herramientas de modelamiento del campo de onda de alta precisión para el diseño del levantamiento sísmico, procesamiento e interpretación sísmica.</span></h5>
                    </div>
                </div>
                <div class="col-md-4 gal-img">
                    <a href="{{url('/software/geofisica/hds2000')}}"><img src="/images/software/index/tesseral.png" alt="w3pvt" class="img-fluid"></a>
                    <div class="gal-info">
                        <h5>HDS 2000<span class="decription">Hydrocarbon Data system Inc., es la compañía representada por Geo Oil Energy (GOE) para la comercialización y distribución de su software HDS 2000 y sus servicios de consultoría. HDS 2000 es una aplicación de análisis de registros y petrofísica enfocada a Geólogos, Ingenieros y Petrofísicos, sobre la plataforma de Windows. HDS 2000 toma la información digital y la convierte en una base de datos Access para llevar a cabo análisis petrofísico, determinístico Estándar, cálculo de porosidades, Saturación de agua, volumen de arcilla, entre otros.</span></h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //projects -->
    @endsection
