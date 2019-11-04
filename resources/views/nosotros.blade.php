@extends('layouts.small-header')
@section('title'){{$title}}@endsection

@section('content')
<!-- about -->
<section class="about ">
    <div class="container py-md-5">
        <div class="about-hny-info  pr-lg-5">
            <h3 class="tittle-w3ls mb-3 text-center"><span class="pink">Quiénes</span> Somos</h3>
            <br>
            <p> Somos una compañia de servicios Colombo-Canadiense con extensa experiencia en las industrias Oil & Gas y Mineria cuya principal distinción es la alta calidad y beneficio en los productos y serviciosofrecidos así como la
                amplía gama de soluciones, desde flujos de trabajo en explotación hasta produción.

                Fundada en 2009 y con un equipo de profesionales en Geomatica, Geofísica y Geología con más de 100 años de experiencia combinada Geo Oil Energy
                contribuye a la ejecució de proyectos que exceden las expectativas de nuestros clientes.
            </p>
        </div>
    </div>
</section>
<!-- //about -->





<!--/mid-->

<section class="team " id="appointment">

    <div class="container ">
        <div class="row about-w3pvt-top mt-3">
            <div class="col-lg-3 about-info">
                <ul>
                    <li class="list-group-item"> <a href="{{url('/nosotros')}}"><img src="images/nosotros/oscarj_p.png" class="img-person"></a> </li>
                </ul>
            </div>
            <div class="col-lg-9 about-info">
                <h3> Oscar Orduz</h3>
                <span class="sub-tittle-team">Vicepresidente</span>
                <p class="info-person"> Ingeniero Catastral y Geodesta con especialización en Sistemas de Información Geográfica (SIG) e Ingeniería de Software y en Gerencia de Proyectos y Administración de Negocios.
                    Más de 26 años de experiencia en distintas industrias como petróleo y gas, oleoductos, líneas de transmisión eléctrica y ferrocarriles entre otras liderando proyectos en el uso e implementación de SIG y tecnologías web mapping en Colombia, Canadá, Republica Dominicana y Chile, variando desde la identificación de requerimientos, adquisición de información geoespacial, control de calidad, hasta administración de datos, su integración a nivel corporativo, maximización del valor de datos para uso en diseño, construcción y operación de proyectos de ingeniería e infraestructura con costos desde pocos miles hasta proyectos de más de 1.5 Billones de dólares.
                    Capacidad para proveer liderazgo estratégico, experiencia técnica, análisis de procesos, planeación y ejecución de proyectos, integrando soluciones y equipos de trabajo aumentando eficiencias y maximizando la propuesta de valor de las organizaciones donde participa.
                    Como socio fundador de Geo Oil Energy es responsable de la ejecución de proyectos, aseguramiento de calidad, la identificación de necesidades y su resolución con soluciones de última tecnología alcanzables en tiempos cortos y asegurando la satisfacción de nuestros clientes.
                </p>
            </div>
        </div>

        <div class="row about-w3pvt-top mt-3">
            <div class="col-lg-3 about-info">
                <ul>
                    <li class="list-group-item text-center"> <a href="{{url('/nosotros')}}"><img src="images/nosotros/ivan_p.jpg" class="img-person"></a> </li>
                </ul>
            </div>
            <div class="col-lg-9 about-info">
                <h3> Iván Reyes</h3>
                <span class="sub-tittle-team">Gerente de Nuevos Negocios</span>
                <p class="info-person"> Geólogo e Ingeniero de Sistemas, especialista en Gerencia de proyectos y master en manejo de recursos geológicos. </p>
            </div>
        </div>

        <div class="row about-w3pvt-top mt-3">
            <div class="col-lg-3 about-info">
                <ul>
                    <li class="list-group-item"> <a href="{{url('/nosotros')}}"><img src="images/nosotros/paula_p.jpg" class="img-person"></a> </li>
                </ul>
            </div>
            <div class="col-lg-9 about-info">
                <h3> Paula Ulloa</h3>
                <span class="sub-tittle-team">Ingeniera Geomática</span>
                <p class="info-person"> Ingeniera Catastral y Geodesta de la Universidad Distrital FJC, Actualmente realizando estudios de economía en la Escuela de Administración y Negocios (Universidad EAN).</p>
            </div>
        </div>

        <div class="row about-w3pvt-top mt-3">
            <div class="col-lg-3 about-info">
                <ul>
                    <li class="list-group-item"> <a href="{{url('/nosotros')}}"><img src="images/nosotros/oscar_p.jpg" class="img-person"></a> </li>
                </ul>
            </div>
            <div class="col-lg-9 about-info">
                <h3> Oscar Quintero</h3>
                <span class="sub-tittle-team">Senior Geologist Engineer</span>
                <p class="info-person"> Ingeniero Geólogo graduado en la Universidad de los Andes, del Estado Mérida, Venezuela, con más 18 años de experiencia en la industria petrolera y amplio dominio de competencias en el área de yacimientos e interpretación Sísmica: Elaboración de secciones estructurales e estratigráficas, mapas estructurales, isópacos y de facies sedimentarias. Actualización de mapas geológicos. Descripción litológica de muestras de canal para el control de la perforación de pozos. Soporte en Geomodelaje en la plataforma de Petrel, Strawork Landmark, Geografhix y Seisware. Monitoreo de los parámetros de perforación y parada de pozos por muestras de canal. Gran Experiencia en la explotación de yacimientos ligeros, medianos y pesados, arenas, calizas, Estudios Integrados de Yacimientos clásticos, monitoreo de yacimientos de areniscas y carbonatos, Aplicación de la metodología VCD en proyectos de productividad, Calculos de POES, Interpretacion Sismica. </p>
            </div>
        </div>

        <div class="row about-w3pvt-top mt-3">
            <div class="col-lg-3 about-info">
                <ul>
                    <li class="list-group-item"> <a href="{{url('/nosotros')}}"><img src="images/nosotros/viviana_p.jpg" class="img-person"></a> </li>
                </ul>
            </div>
            <div class="col-lg-9 about-info">
                <h3> Viviana Bautista</h3>
                <span class="sub-tittle-team">Ingeniera de Soluciones</span>
                <p class="info-person"> Estudiante de Ing. Catastral y Geodesia, miembro activo del Grupo GNU/Linux de la Universidad Distrital. </p>
            </div>
        </div>



        <hr>
    </div>
</section>

<!--//team-->
@endsection