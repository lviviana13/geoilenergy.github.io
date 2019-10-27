@extends('layouts.small-header')
@section('title'){{$title}}@endsection

@section('content')
    <!-- about -->
    <section class="about py-5">
        <div class="container py-md-5">
            <div class="about-hny-info text-left pr-lg-5">
                <h3 class="tittle-w3ls mb-3"><span class="pink">Quiénes</span> Somos</h3>
                <p class="sub-tittle mt-3 mb-4 pr-lg-5">Somos una compañia de servicios Colombo-Canadiense con extensa experiencia en
                    las industrias Oil & Gas y Mineria cuya principal distinción es la alta calidad y beneficio en los productos y serviciosofrecidos así como la
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
    <section class="team py-5" id="appointment">
        <div class="container py-md-5">
            <h3 class="tittle-w3ls mb-5 text-center">Nuestro Equipo</h3>
            <div class="row mt-lg-5 mt-4">
                <div class="col-md-4 team-gd text-center">
                    <div class="team-img mb-4">
                        <a href="{{url('/nosotros')}}"><img src="images/team4.jpg" class="img-fluid"
                                                           alt="user-image"></a>
                    </div>
                    <div class="team-info">
                        <span class="sub-tittle-team">Designation</span>
                        <h3><a href="{{url('/nosotros')}}"> Soia</a></h3>
                        <p>Lorem Ipsum has been the industry's standard since the 1500s.</p>
                        <div class="icon-social team mt-4">
                            <a href="#" class="button-footr">
                                <span class="fa fa-facebook"></span>
                            </a>
                            <a href="#" class="button-footr">
                                <span class="fa fa-twitter"></span>
                            </a>

                            <a href="#" class="button-footr">
                                <span class="fa fa-pinterest"></span>
                            </a>
                            <a href="#" class="button-footr">
                                <span class="fa fa-google-plus"></span>
                            </a>

                        </div>
                    </div>

                </div>

                <div class="col-md-4 team-gd second text-center">
                    <div class="team-img mb-4">
                        <a href="{{url('/nosotros')}}"><img src="images/team5.jpg" class="img-fluid"
                                                           alt="user-image"></a>
                    </div>
                    <div class="team-info">
                        <span class="sub-tittle-team">Designation</span>
                        <h3><a href="{{url('/nosotros')}}"> Mariana Noe</a></h3>
                        <p>Lorem Ipsum has been the industry's standard since the 1500s.</p>
                        <div class="icon-social team mt-4">
                            <a href="#" class="button-footr">
                                <span class="fa fa-facebook"></span>
                            </a>
                            <a href="#" class="button-footr">
                                <span class="fa fa-twitter"></span>
                            </a>

                            <a href="#" class="button-footr">
                                <span class="fa fa-pinterest"></span>
                            </a>
                            <a href="#" class="button-footr">
                                <span class="fa fa-google-plus"></span>
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 team-gd text-center">
                    <div class="team-img mb-4">
                        <a href="{{url('/nosotros')}}"><img src="images/team6.jpg" class="img-fluid"
                                                           alt="user-image"></a>
                    </div>
                    <div class="team-info">
                        <span class="sub-tittle-team">Designation</span>
                        <h3><a href="{{url('/nosotros')}}"> Daniel Doe</a></h3>
                        <p>Lorem Ipsum has been the industry's standard since the 1500s.</p>
                        <div class="icon-social team mt-4">
                            <a href="#" class="button-footr">
                                <span class="fa fa-facebook"></span>
                            </a>
                            <a href="#" class="button-footr">
                                <span class="fa fa-twitter"></span>
                            </a>

                            <a href="#" class="button-footr">
                                <span class="fa fa-pinterest"></span>
                            </a>
                            <a href="#" class="button-footr">
                                <span class="fa fa-google-plus"></span>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-lg-5 mt-4">
                <div class="col-md-4 team-gd text-center">
                    <div class="team-img mb-4">
                        <a href="{{url('/nosotros')}}"><img src="images/team4.jpg" class="img-fluid"
                                                           alt="user-image"></a>
                    </div>
                    <div class="team-info">
                        <span class="sub-tittle-team">Designation</span>
                        <h3><a href="{{url('/nosotros')}}"> Soia</a></h3>
                        <p>Lorem Ipsum has been the industry's standard since the 1500s.</p>
                        <div class="icon-social team mt-4">
                            <a href="#" class="button-footr">
                                <span class="fa fa-facebook"></span>
                            </a>
                            <a href="#" class="button-footr">
                                <span class="fa fa-twitter"></span>
                            </a>

                            <a href="#" class="button-footr">
                                <span class="fa fa-pinterest"></span>
                            </a>
                            <a href="#" class="button-footr">
                                <span class="fa fa-google-plus"></span>
                            </a>

                        </div>
                    </div>

                </div>

                <div class="col-md-4 team-gd second text-center">
                    <div class="team-img mb-4">
                        <a href="{{url('/nosotros')}}"><img src="images/team5.jpg" class="img-fluid"
                                                           alt="user-image"></a>
                    </div>
                    <div class="team-info">
                        <span class="sub-tittle-team">Designation</span>
                        <h3><a href="{{url('/nosotros')}}"> Mariana Noe</a></h3>
                        <p>Lorem Ipsum has been the industry's standard since the 1500s.</p>
                        <div class="icon-social team mt-4">
                            <a href="#" class="button-footr">
                                <span class="fa fa-facebook"></span>
                            </a>
                            <a href="#" class="button-footr">
                                <span class="fa fa-twitter"></span>
                            </a>

                            <a href="#" class="button-footr">
                                <span class="fa fa-pinterest"></span>
                            </a>
                            <a href="#" class="button-footr">
                                <span class="fa fa-google-plus"></span>
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 team-gd text-center">
                    <div class="team-img mb-4">
                        <a href="{{url('/nosotros')}}"><img src="images/team6.jpg" class="img-fluid"
                                                           alt="user-image"></a>
                    </div>
                    <div class="team-info">
                        <span class="sub-tittle-team">Designation</span>
                        <h3><a href="{{url('/nosotros')}}"> Daniel Doe</a></h3>
                        <p>Lorem Ipsum has been the industry's standard since the 1500s.</p>
                        <div class="icon-social team mt-4">
                            <a href="#" class="button-footr">
                                <span class="fa fa-facebook"></span>
                            </a>
                            <a href="#" class="button-footr">
                                <span class="fa fa-twitter"></span>
                            </a>

                            <a href="#" class="button-footr">
                                <span class="fa fa-pinterest"></span>
                            </a>
                            <a href="#" class="button-footr">
                                <span class="fa fa-google-plus"></span>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-lg-5 mt-4">
                <div class="col-md-4 team-gd text-center">
                    <div class="team-img mb-4">
                        <a href="{{url('/nosotros')}}"><img src="images/team4.jpg" class="img-fluid"
                                                           alt="user-image"></a>
                    </div>
                    <div class="team-info">
                        <span class="sub-tittle-team">Designation</span>
                        <h3><a href="{{url('/nosotros')}}"> Soia</a></h3>
                        <p>Lorem Ipsum has been the industry's standard since the 1500s.</p>
                        <div class="icon-social team mt-4">
                            <a href="#" class="button-footr">
                                <span class="fa fa-facebook"></span>
                            </a>
                            <a href="#" class="button-footr">
                                <span class="fa fa-twitter"></span>
                            </a>

                            <a href="#" class="button-footr">
                                <span class="fa fa-pinterest"></span>
                            </a>
                            <a href="#" class="button-footr">
                                <span class="fa fa-google-plus"></span>
                            </a>

                        </div>
                    </div>

                </div>

                <div class="col-md-4 team-gd second text-center">
                    <div class="team-img mb-4">
                        <a href="{{url('/nosotros')}}"><img src="images/team5.jpg" class="img-fluid"
                                                           alt="user-image"></a>
                    </div>
                    <div class="team-info">
                        <span class="sub-tittle-team">Designation</span>
                        <h3><a href="{{url('/nosotros')}}"> Mariana Noe</a></h3>
                        <p>Lorem Ipsum has been the industry's standard since the 1500s.</p>
                        <div class="icon-social team mt-4">
                            <a href="#" class="button-footr">
                                <span class="fa fa-facebook"></span>
                            </a>
                            <a href="#" class="button-footr">
                                <span class="fa fa-twitter"></span>
                            </a>

                            <a href="#" class="button-footr">
                                <span class="fa fa-pinterest"></span>
                            </a>
                            <a href="#" class="button-footr">
                                <span class="fa fa-google-plus"></span>
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 team-gd text-center">
                    <div class="team-img mb-4">
                        <a href="{{url('/nosotros')}}"><img src="images/team6.jpg" class="img-fluid"
                                                           alt="user-image"></a>
                    </div>
                    <div class="team-info">
                        <span class="sub-tittle-team">Designation</span>
                        <h3><a href="{{url('/nosotros')}}"> Daniel Doe</a></h3>
                        <p>Lorem Ipsum has been the industry's standard since the 1500s.</p>
                        <div class="icon-social team mt-4">
                            <a href="#" class="button-footr">
                                <span class="fa fa-facebook"></span>
                            </a>
                            <a href="#" class="button-footr">
                                <span class="fa fa-twitter"></span>
                            </a>

                            <a href="#" class="button-footr">
                                <span class="fa fa-pinterest"></span>
                            </a>
                            <a href="#" class="button-footr">
                                <span class="fa fa-google-plus"></span>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//team-->
    @endsection
