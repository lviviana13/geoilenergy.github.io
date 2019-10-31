@extends('layouts.small-header')
@section('title'){{$title}}@endsection

@section('content')
<!-- about -->
<section class="about py-5">
    <div class="container py-md-5">
        <div class="about-hny-info text-left pr-lg-5">
            <h3 class="tittle-w3ls mb-3"><span class="pink">Quiénes</span> Somos</h3>
            <p style="text-align:justify"> Somos una compañia de servicios Colombo-Canadiense con extensa experiencia en las industrias Oil & Gas y Mineria cuya principal distinción es la alta calidad y beneficio en los productos y serviciosofrecidos así como la
                amplía gama de soluciones, desde flujos de trabajo en explotación hasta produción.

                Fundada en 2009 y con un equipo de profesionales en Geomatica, Geofísica y Geología con más de 100 años de experiencia combinada Geo Oil Energy
                contribuye a la ejecució de proyectos que exceden las expectativas de nuestros clientes.
            </p>
        </div>
    </div>
</section>
<!-- //about -->


<!--/ab-->
<section class="banner_bottom py-5">
    <div class="container py-md-5">
        <div class="row inner_sec_info">

            <div class="col-md-6 banner_bottom_grid help">
                <img src="images/ab.jpg" alt=" " class="img-fluid">
            </div>
            <div class="col-md-6 banner_bottom_left mt-lg-0 mt-4">
                <h4><a class="link-hny" href="services.html">
                        Trabajemos juntos</a></h4>
                <p>Pellentesque convallis diam consequat magna vulputate malesuada. Cras a ornare elit. Nulla viverra pharetra sem, eget
                    pulvinar neque pharetra ac.</p>
                <p>Lorem Ipsum convallis diam consequat magna vulputate malesuada. Cras a ornare elit. Nulla viverra pharetra sem, eget
                    pulvinar neque pharetra ac.</p>
                <a class="btn more black mt-3" href="{{url('/contacto')}}" role="button">Contáctanos</a>

            </div>
        </div>

    </div>
</section>
<!--//ab-->


<!--/mid-->

<section class="team " id="appointment">

    <div class="container ">
    <hr>
        <h3 class="tittle-w3ls mb-3 text-center"><span class="pink">Nuestro</span> Equipo</h3>

        <div class="row mt-lg-5 mt-4">
            <div class="col-md-4 team-gd text-center">
                <div class="team-img mb-4">
                    <a href="{{url('/nosotros')}}"><img src="images/nosotros/ivan_p.jpg" class="img-person"></a>
                </div>
                <div class="team-info">
               
                    <span class="sub-tittle-team">Gerente de Nuevos Negocios</span> 
                   
                    
                    <h3>     Iván Reyes</h3>
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
        </div>
        
        <hr>
    </div>
</section>

<!--//team-->
@endsection