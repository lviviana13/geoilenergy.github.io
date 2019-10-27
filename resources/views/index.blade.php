@extends('layouts.template')
@section('title', 'GeOilEnergy')
@section('content')
    <!-- banner slider -->
    <div id="homepage-slider" class="st-slider">
        <input type="radio" class="cs_anchor radio" name="slider" id="play1" checked=""/>
        <input type="radio" class="cs_anchor radio" name="slider" id="slide1"/>
        <input type="radio" class="cs_anchor radio" name="slider" id="slide2"/>
        <input type="radio" class="cs_anchor radio" name="slider" id="slide3"/>
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
                <a href="about.html" class="btn more mr-2">Nosotros</a>
                <a href="contact.html" class="btn">Contácto</a>
            </div>


        </div>
        <!-- //banner-hny-info -->
    </div>
    <!-- //banner slider -->
    <!-- //banner -->

    <!-- //home -->

    <!-- about -->
    <section class="about py-5">
        <div class="container p-md-5">
            <div class="about-hny-info text-left px-md-5">
                <h3 class="tittle-w3ls mb-3"><span class="pink">Nuestra</span> Compañia</h3>
                <p class="sub-tittle mt-3 mb-4">Geo Oil Energy es una compañía internacional especializada en la
                    representación,
                    comercialización y distribución para Canadá y el mercado Latinoamericano, de productos y servicios de
                    compañías
                    expertas en las áreas de: Geología, Geofísica, Geomática e Ingeniería, con sus oficinas principales en
                    Calgary, Canadá y Bogotá, Colombia</p>
                <a class="btn more black" href="about.html" role="button">Leer más</a>
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
                            Nosotros podemos proveer el Software que tu organización necesita...</a></h4>
                    <p>Pellentesque convallis diam consequat magna vulputate malesuada. Cras a ornare elit. Nulla viverra
                        pharetra sem, eget
                        pulvinar neque pharetra ac.</p>
                    <p>Lorem Ipsum convallis diam consequat magna vulputate malesuada. Cras a ornare elit. Nulla viverra
                        pharetra sem, eget
                        pulvinar neque pharetra ac.</p>
                    <a class="btn more black mt-3" href="sofware.html" role="button">Información de Software</a>

                </div>
            </div>

        </div>
    </section>
    <!--//ab-->

    <!--/services-->
    <section class="services" id="services">
        <div class="over-lay-blue py-5">
            <div class="container py-md-5">
                <div class="row my-4">
                    <div class="col-lg-5 services-innfo pr-5">
                        <h3 class="tittle-w3ls two mb-3 text-left"><span class="pink">Nuestros</span> Servicios</h3>
                        <p class="sub-tittle mt-2 mb-sm-3 text-left">Altos estándares de calidad en el desarrollo de
                            proyectos y soluciones integrales. <br> ¡Cumplimos lo que ofrecemos!</p>
                        <a class="btn more black mt-3" href="services.html" role="button">Más Información</a>
                    </div>
                    <div class="col-lg-7 services-grid-inf">
                        <div class="row services-w3pvt-main mt-5">
                            <div class="col-lg-6 feature-gird">
                                <div class="row features-hny-inner-gd mt-3">
                                    <div class="col-md-2 featured_grid_left">
                                        <div class="icon_left_grid">
                                            <span class="fa fa-paint-brush" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-10 featured_grid_right_info">
                                        <h4><a class="link-hny" href="single.html">UI/UX Designs</a></h4>
                                        <p>Lorem Ipsum is simply text the printing and typesetting standard industry.</p>

                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-6 feature-gird">
                                <div class="row features-hny-inner-gd mt-3">
                                    <div class="col-md-2 featured_grid_left">
                                        <div class="icon_left_grid">
                                            <span class="fa fa-bullhorn" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-10 featured_grid_right_info">
                                        <h4><a class="link-hny" href="single.html">SEO Marketing</a></h4>
                                        <p>Lorem Ipsum is simply text the printing and typesetting standard industry.</p>

                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="row services-w3pvt-main mt-5">
                            <div class="col-lg-6 feature-gird ">
                                <div class="row features-hny-inner-gd mt-3">
                                    <div class="col-md-2 featured_grid_left">
                                        <div class="icon_left_grid">
                                            <span class="fa fa-shield" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-10 featured_grid_right_info">
                                        <h4><a class="link-hny" href="single.html">User Experience</a></h4>
                                        <p>Lorem Ipsum is simply text the printing and typesetting standard industry.</p>

                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-6 feature-gird">
                                <div class="row features-hny-inner-gd mt-3">
                                    <div class="col-md-2 featured_grid_left">
                                        <div class="icon_left_grid">
                                            <span class="fa fa-lightbulb-o" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-10 featured_grid_right_info">
                                        <h4><a class="link-hny" href="single.html">Creative Strategy</a></h4>
                                        <p>Lorem Ipsum is simply text the printing and typesetting standard industry.</p>

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

    <br>

    <!--/ab-->
    <section class="banner_bottom py-5">
        <div class="container py-md-5">
            <div class="row inner_sec_info">

                <div class="col-md-6 banner_bottom_grid help">
                    <img src="images/ab2.jpg" alt=" " class="img-fluid">
                </div>
                <div class="col-md-6 banner_bottom_left">
                    <h4><a class="link-hny" href="services.html">
                            Trabajamos con grandes compañias reconocidas en el sector</a></h4>
                    <p>Pellentesque convallis diam consequat magna vulputate malesuada. Cras a ornare elit. Nulla viverra
                        pharetra sem, eget
                        pulvinar neque pharetra ac.</p>
                    <p>Lorem Ipsum convallis diam consequat magna vulputate malesuada. Cras a ornare elit. Nulla viverra
                        pharetra sem, eget
                        pulvinar neque pharetra ac.</p>
                    <a class="btn more black mt-3" href="services.html" role="button">Clientes & Aliados</a>

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
                            <h4><a class="link-hny" href="single.html">Servicios en Geomática, Geología y Geofísica</a></h4>
                            <p>Lorem Ipsum is simply text the printing and typesetting standard industry.</p>
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
                            <h4><a class="link-hny" href="single.html">Software</a></h4>
                            <p>Lorem Ipsum is simply text the printing and typesetting standard industry.</p>
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
                            <h4><a class="link-hny" href="single.html">Soporte</a></h4>
                            <p>Lorem Ipsum is simply text the printing and typesetting standard industry.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--//ab-->
    @endsection
