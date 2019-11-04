@extends('layouts.small-header')
@section('title'){{$title}}@endsection

@section('content')
<!-- about -->
<section class="about ">
    <div class="container py-md-5">
        <div class="about-hny-info text-left pr-lg-5">
            <h3 class="tittle-w3ls mb-3 text-center"><span class="pink">Quiénes</span> Somos</h3>
            <p style="text-align:justify"> Somos una compañia de servicios Colombo-Canadiense con extensa experiencia en las industrias Oil & Gas y Mineria cuya principal distinción es la alta calidad y beneficio en los productos y serviciosofrecidos así como la
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
        
        <h3 class="tittle-w3ls mb-3 text-center"><span class="pink">Nuestro</span> Equipo</h3>

        <div class="row mt-lg-5 mt-4">
            <div class="col-md-4 team-gd text-center">
                <div class="team-img mb-4">
                    <a href="{{url('/nosotros')}}"><img src="images/nosotros/ivan_p.jpg" class="img-person"></a>
                </div>
                <div class="team-info">

                    <span class="sub-tittle-team">Gerente de Nuevos Negocios</span>


                    <h3> Iván Reyes</h3>
                    <p class="info-person">
                        Geólogo e Ingeniero de Sistemas, especialista en Gerencia de proyectos y master en manejo de recursos geológicos.
                    </p>

                </div>

            </div>

            <div class="col-md-4 team-gd text-center">
                <div class="team-img mb-4">
                    <a href="{{url('/nosotros')}}"><img src="images/nosotros/paula_p.jpg" class="img-person"></a>
                </div>
                <div class="team-info">

                    <span class="sub-tittle-team">Ingeniera Geomática</span>
                    <h3> Paula Ulloa</h3>
                    <p class="info-person">
                        Ingeniera Catastral y Geodesta de la Universidad Distrital FJC, Actualmente realizando estudios de economía en la Escuela de Administración y Negocios (Universidad EAN).
                    </p>

                </div>

            </div>
            <div class="col-md-4 team-gd text-center">
                <div class="team-img mb-4">
                    <a href="{{url('/nosotros')}}"><img src="images/nosotros/viviana_p.jpg" class="img-person"></a>
                </div>
                <div class="team-info">

                    <span class="sub-tittle-team">Ingeniera de Soluciones</span>
                    <h3> Viviana Bautista</h3>
                    <p class="info-person">
                        Estudiante de Ing. Catastral y Geodesia, miembro activo del Grupo GNU/Linux de la Universidad Distrital.
                    </p>

                </div>

            </div>
            <div class="col-md-4 team-gd text-center">
                <div class="team-img mb-4">
                    <a href="{{url('/nosotros')}}"><img src="images/nosotros/oscar_p.jpg" class="img-person"></a>
                </div>
                <div class="team-info">

                    <span class="sub-tittle-team">Senior Geologist Engineer </span>
                    <h3>Oscar Quintero</h3>
                    <p class="info-person">
                    Ingeniero Geólogo graduado en la Universidad de los Andes, del Estado Mérida, Venezuela, con más 18 años de experiencia en la industria petrolera  y amplio dominio de competencias en el área  de yacimientos e interpretación Sísmica: Elaboración de secciones estructurales e estratigráficas, mapas estructurales, isópacos y de facies sedimentarias. Actualización de mapas geológicos. Descripción litológica de muestras de canal para el control de la perforación de pozos. Soporte en Geomodelaje en la plataforma de Petrel, Strawork Landmark, Geografhix y Seisware. Monitoreo de los parámetros de perforación y parada de pozos por muestras de canal. Gran Experiencia en la explotación de yacimientos ligeros, medianos y pesados, arenas, calizas, Estudios Integrados de Yacimientos clásticos, monitoreo de yacimientos de areniscas y carbonatos, Aplicación de la metodología VCD en proyectos de productividad, Calculos de POES, Interpretacion Sismica.
                    </p>

                </div>

            </div>
        </div>

        <hr>
    </div>
</section>

<!--//team-->
@endsection