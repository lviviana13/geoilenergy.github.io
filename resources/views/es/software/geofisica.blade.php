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
                    <a href="{{url('/software/geofisica/tesseral')}}"><img style="height: 100px"  src="/images/software/index/tesseral_logo.png" alt="w3pvt" class="img-fluid"></a>
                    <div class="gal-info">
                        <h5>TESSERAL<span class="decription"> Herramientas de modelamiento del campo de onda de alta precisión para el diseño del levantamiento sísmico, procesamiento e interpretación sísmica.</span></h5>
                    </div>
                </div>

            <div class="col-md-4 gal-img">
                    <a href="{{url('/software/geofisica/globe-claritas')}}"><img  style="height: 100px" src="/images/software/index/globe-claritas_logo.png" alt="w3pvt" class="img-fluid"></a>
                    <div class="gal-info">
                        <h5>Globe Claritas<span class="decription"> Solución informática costo-efectiva de procesamiento sísmico, marino y terrestre 2D y 3D.</span></h5>
                    </div>
                </div>

                <div class="col-md-4 gal-img">
                    <a href="{{url('/software/geofisica/geomodeling')}}"><img style="height: 100px" src="/images/software/index/geomodeling.png" alt="w3pvt" class="img-fluid"></a>
                    <div class="gal-info">
                        <h5>Geomodeling<span class="decription">Líder en el análisis de atributos sísmicos y modelamiento multi-escala de reservorio para la industria de exploración y producción de hidrocarburos.</span></h5>
                    </div>
                </div>

                <div class="col-md-4 gal-img">
                    <a href="{{url('/software/geofisica/seisware-geologia')}}"><img style="height: 150px" src="/images/software/index/seisware_gl.png" alt="w3pvt" class="img-fluid"></a>
                    <div class="gal-info">
                        <h5>Geology by SeisWare (GL) <span class="decription"> Herramienta de interpretación geológica 3D que 
                           permite integrar información sísmica, registros de pozo e información de producción 
                           en un ambiente de interpretación interactivo. </span></h5>
                    </div>
                </div>
                <div class="col-md-4 gal-img">
                    <a href="{{url('/software/geofisica/seisware-geofisica')}}"><img style="height: 150px" src="/images/software/index/seisware_gf.png" alt="w3pvt" class="img-fluid"></a>
                    <div class="gal-info">
                        <h5>Geophysics by SeisWare (GP)<span class="decription"> Sistema “Todo Incluido”, interactivo y dinámico de interpretación sísmica 2D/3D</span></h5>
                    </div>
                </div>

                <div class="col-md-4 gal-img">
                    <a href="{{url('/software/geofisica/qi')}}"><img style="height: 150px" src="/images/software/index/qi.PNG" alt="w3pvt" class="img-fluid"></a>
                    <div class="gal-info">
                        <h5>QI-Pro<span class="decription">Aplicación interactiva de interpretación de atributos sísmicos que permite a 
                            todo el equipo de activos determinar en colaboración cómo combinar y traducir atributos sísmicos en geología plana.</span></h5>
                    </div>
                </div>

                <div class="col-md-4 gal-img">
                    <a href="{{url('/software/geofisica/structural-solver')}}"><img style="height: 150px" src="/images/software/index/structuresolver.png" alt="w3pvt" class="img-fluid"></a>
                    <div class="gal-info">
                        <h5>StructureSolver <span class="decription"> 

                            Conjunto de herramientas de interpretación,
                            análisis estructural cuantitativa  y restauraciones estructurales.</span></h5>
                    </div>
                </div>
                <div class="col-md-4 gal-img">
                    <a href="{{url('/software/geofisica/hds2000')}}"><img style="height: 150px" src="/images/software/index/hds2000.png" alt="w3pvt" class="img-fluid"></a>
                    <div class="gal-info">
                        <h5>HDS 2000<span class="decription">Aplicación de análisis de registros y petrofísica enfocada a geólogos, ingenieros y petrofísicos, tomando la información digital y convirtiéndola  en una base de datos para llevar a cabo análisis petrofísico, cálculo de porosidades, saturación de agua, volumen de arcilla, entre otros.</span></h5>
                    </div>
                </div>

                <div class="col-md-4 gal-img">
                    <a href="{{url('/software/geofisica/geovariances')}}"><img style="height: 150px" src="/images/software/index/geovariances.png" alt="w3pvt" class="img-fluid"></a>
                    <div class="gal-info">
                        <h5>Geovariances (ISATIS)<span class="decription"> 
                            
                            Programas de geoestadística que 
                            le permite dirigir y manejar las necesidades más desafiantes en 
                            diferentes campos de la industria.</span></h5>
                    </div>
                </div>
                
               
                
              
                
            </div>
        </div>
    </section>
    <!-- //projects -->
    @endsection
