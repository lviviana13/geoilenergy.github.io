@extends('layouts.template')
@section('title'){{ $title }}@endsection
@section('content')

<!-- banner slider -->
<div id="homepage-slider" class="st-slider">
    <input type="radio" class="cs_anchor radio" name="slider" id="play1" checked="" />
    <input type="radio" class="cs_anchor radio" name="slider" id="slide1" />
    <input type="radio" class="cs_anchor radio" name="slider" id="slide2" />
    <input type="radio" class="cs_anchor radio" name="slider" id="slide3" />
    <div class="images">
        <div class="images-inner">
            <div class="image-slide">
                <div class="banner-w3pvt-1">
                    <div class="overlay-w3ls">

                    </div>

                </div>
            </div>
            <div class="image-slide">
                <div class="banner-w3pvt-2">
                    <div class="overlay-w3ls">

                    </div>
                </div>
            </div>
            <div class="image-slide">
                <div class="banner-w3pvt-3">
                    <div class="overlay-w3ls">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="labels">
        <div class="fake-radio">
            <label for="slide1" class="radio-btn"></label>
            <label for="slide2" class="radio-btn"></label>
            <label for="slide3" class="radio-btn"></label>
        </div>
    </div>
    <!-- banner-hny-info -->


    <div class="banner-hny-info">
        <h3>World´s best energy and technology
            <br>solutions at your hands</h3>
        <div class="top-buttons mx-auto text-center mt-md-5 mt-3">
            <a href="{{url('/nosotros')}}" class="btn more mr-2">Nosotros</a>
            <a href="{{url('/contacto')}}" class="btn">Contácto</a>
        </div>


    </div>
    <!-- //banner-hny-info -->
</div>
<!-- //banner slider -->

<!-- //banner -->

<!-- //home -->


<!--Sobre la compañia y servicios-->
<section class="banner_bottom py-5">
    <div class="container py-md-5">
        <div class="row inner_sec_info">

            <div class="container p-md-1">
                <div class="about-hny-info text-left px-md-5">
                    <h3 class="tittle-w3ls mb-3"><span class="pink">Nuestra</span> Compañia</h3>
                    <p class="sub-tittle mt-3 mb-4">Geo Oil Energy es una compañía internacional especializada en la representación,
                        comercialización y distribución para Canadá y el mercado Latinoamericano, de productos y servicios de compañías
                        expertas en las áreas de: Geología, Geofísica, Geomática e Ingeniería, con sus oficinas principales en Calgary, Canadá y Bogotá, Colombia</p>
                    <a class="btn more black" href="{{url('/nosotros')}}" role="button">Leer más</a>
                </div>
            </div>

            <div class="row features-w3pvt-main" id="features">
                <div class="col-md-4 feature-gird">
                    <div class="row features-hny-inner-gd">
                        <div class="col-md-3 featured_grid_left">
                            <div class="icon_left_grid">
                                <span class="fa fa-globe" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="col-md-9 featured_grid_right_info pl-lg-0">
                            <h4>Soluciones Geoespaciales, Geología y Geofísica.</h4>
                            <p>Ofrecemos soluciones de vanguardia, con el objetivo de ayudar a nuestros clientes a
                                generar resultados satisfactorios en sus proyectos.

                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 feature-gird">
                    <div class="row features-hny-inner-gd">
                        <div class="col-md-3 featured_grid_left">
                            <div class="icon_left_grid">
                                <span class="fa fa-laptop" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="col-md-9 featured_grid_right_info pl-lg-0">
                            <h4>Software</h4>
                            <p>Brindamos a nuestros clientes
                                acceso a la última tecnología.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 feature-gird">
                    <div class="row features-hny-inner-gd">
                        <div class="col-md-3 featured_grid_left">
                            <div class="icon_left_grid">
                                <span class="fa fa-handshake-o" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="col-md-9 featured_grid_right_info pl-lg-0">
                            <h4>Soporte</h4>
                            <p>Apoyados en el uso de tecnología de vanguardia junto con la experiencia y
                                experticia de los consultores de nuestros asociados, Geo Oil Energy le ofrece servicios de soporte y asesoría para su compañia.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>
<!--//Sobre la compañia y servicios-->




<!--/services-->
<section class="services" id="services">
    <div class="over-lay-blue py-2">
        <div class="container py-md-5">
            <div class="row my-4">
                <div class="col-lg-5 services-innfo pr-5">
                    <h3 class="tittle-w3ls two mb-3 text-left"><span class="pink">“Vivimos con nuestros clientes el proceso de lograr sus resultados”</span> </h3>
                    <p class="sub-tittle mt-2 mb-sm-3 text-left">
                        Ofrecemos soluciones enfocadas a las necesidades de la
                        industria y nos comprometemos con nuestros clientes mas
                        allá de un contacto o negocio. <br>  <br>
                    </p>
                </div>
                <div class="col-lg-7 services-grid-inf">
                    <div class="row services-w3pvt-main mt-5">
                        <div class="col-lg-6 feature-gird">
                            <div class="row features-hny-inner-gd mt-3">
                                <div class="col-md-2 featured_grid_left">
                                    <div class="icon_left_grid">
                                        <span class="fa fa fa-handshake-o" aria-hidden="true"></span>
                                    </div>
                                </div>
                                <div class="col-md-10 featured_grid_right_info">
                                    <h4>Servicios</h4>
                                    <p>Conozca las soluciones que tenemos a su disposición.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 feature-gird">
                            <div class="row features-hny-inner-gd mt-3">
                                <div class="col-md-2 featured_grid_left">
                                    <div class="icon_left_grid">
                                        <span class="fa fa-globe" aria-hidden="true"></span>
                                    </div>
                                </div>
                                <div class="col-md-10 featured_grid_right_info">
                                    <h4>Software</h4>
                                    <p>Proveemos el software que su compañia necesita.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--//services-->


<!-- /Aliados-->
<section class="projects py-5" id="gallery">
    <div class="container py-md-5">
        <div class="row news-grids mt-md-5 mt-4 text-center">
            <div class="col-md-4 gal-img">
                <h5>Aliados Tecnologicos<span class="decription"></span></h5>

                <a href="{{url('/aliados')}}">
                <div class="slider">
                    <ul>
                    <li> <img src="images/aliados/representaciones/bmg.png" alt="">  </li>
                         <li><img src="images/aliados/representaciones/geomodeling.png" alt="">                    </li>
                                        <li>
                        <img src="images/aliados/representaciones/hds2000.png" alt="">
                        </li>
                                        <li>
                        <img src="images/aliados/representaciones/seisware.png" alt="">
                        </li>          
                    </ul>
                </div>
                </a>
        


            </div>
            <div class="col-md-4 gal-img">
                <h5>Nuestras Representaciones<span class="decription"></span></h5>
                <a href="{{url('/aliados')}}">
                <div class="slider">
                    <ul>
                        <li> <img src="images/aliados/representaciones/bmg.png" alt="">  </li>
                         <li><img src="images/aliados/representaciones/geomodeling.png" alt="">                    </li>
                                        <li>
                        <img src="images/aliados/representaciones/hds2000.png" alt="">
                        </li>
                                        <li>
                        <img src="images/aliados/representaciones/seisware.png" alt="">
                        </li>
                    </ul>
                </div>
                </a>
            </div>
            <div class="col-md-4 gal-img">
                <h5>Nuestros Clientes<span class="decription"></span></h5>
                <a href="{{url('/aliados')}}">
                <div class="slider">
                    <ul>
                    <li> <img src="images/aliados/representaciones/bmg.png" alt="">  </li>
                         <li><img src="images/aliados/representaciones/geomodeling.png" alt="">                    </li>
                                        <li>
                        <img src="images/aliados/representaciones/hds2000.png" alt="">
                        </li>
                                        <li>
                        <img src="images/aliados/representaciones/seisware.png" alt="">
                        </li>
                    </ul>
                </div>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- //Aliados-->
@endsection
