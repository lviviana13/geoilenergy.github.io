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
                    <a href="{{url('/software/geofisica/structural-solver')}}"><img src="/images/g1.jpg" alt="w3pvt" class="img-fluid"></a>
                    <div class="gal-info">
                        <h5>STRUCTURESOLVER<span class="decription"> Nunns and Rogan LLC., compañía propietaria de
                            StructuralSolver representada por Geo Oil Energy (GOE) para la comercialización y
                            distribución de su software y soluciones de consultoría en Latinoamérica.  <br>

                            StructureSolver integra un conjunto de herramientas de interpretación y
                            análisis estructural cuantitativa para geo-científicos que trabajan en cuencas falladas y
                             buscan mejorar la precisión de su interpretación sísmica a través del cálculo de deformación
                             de pliegues por propagación de fallas, deformación interna, predicción de la
                             geometría de fallas en profundidad y restauraciones estructurales, con el
                             objetivo de reducir el riesgo en la exploración y producción de hidrocarburos.</span></h5>
                    </div>
                </div>
                <div class="col-md-4 gal-img">
                    <a href="{{url('/software/geofisica/globe-claritas')}}"><img src="/images/g2.jpg" alt="w3pvt" class="img-fluid"></a>
                    <div class="gal-info">
                        <h5>GLOBE CLARITAS<span class="decription"> Globe Claritas es la solución informática costo-efectiva de procesamiento sísmico, marino y terrestre 2D y 3D, representada por Geo Oil Energy (GOE) para la comercialización y distribución en Latinoamérica y Canadá. Globe Claritas es la solución costo efectiva que le permitirá mejorar las capacidades de procesamiento de información sísmica de su compañía.</span></h5>
                    </div>
                </div>

                <div class="col-md-4 gal-img">
                    <a href="{{url('/software/geofisica/geovariances')}}"><img src="/images/g4.jpg" alt="w3pvt" class="img-fluid"></a>
                    <div class="gal-info">
                        <h5>GEOVARIANCES (ISATIS)<span class="decription">Geovariances, es la compañía aliada de Geo Oil Energy (GOE) para la comercialización y distribución de sus programas (Isatis, Minestis, kartotrak) y servicios en Latinoamérica. Isatis, Minestis, kartotrak son programa de geoestadística que le permite dirigir y manejar las necesidades más desafiantes en diferentes campos de la industria tales como la minería, Oíl & Gas, ambiental y mapeo y evaluación del riesgo.</span></h5>
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
                    <a href="{{url('/software/geofisica/geomodeling')}}"><img src="/images/g6.jpg" alt="w3pvt" class="img-fluid"></a>
                    <div class="gal-info">
                        <h5>GEOMODELING<span class="decription">Geomodeling Technology corp., es la compañía representada por Geo Oil Energy (GOE) para la comercialización y distribución de sus aplicaciones y servicios en Latinoamérica. Los productos y servicios de Geomodeling son líderes en el análisis de atributos sísmicos y modelamiento multi-escala de reservorio para la industria de exploración y producción de hidrocarburos.</span></h5>
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
