<!DOCTYPE html>
<html lang="es">

<head>
    <title>@yield('title') | GeOilEnergy</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8"/>
    <meta name="keywords" content=""/>
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta tag Keywords -->
    <!-- Custom-Files -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css" media="all"/>
    <!-- Style-CSS -->
    <!-- font-awesome-icons -->
    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">
    <!-- //font-awesome-icons -->

</head>

<body>
<!-- home -->
<div id="home" class="inner-w3pvt-page">
    <div class="overlay-innerpage">
        <!--/top-nav -->
        <div class="top_w3pvt_main container">
            <!--/header -->
            <header class="nav_w3pvt text-center ">
                <!-- nav -->
                <nav class="wthree-w3ls">
                    <div id="logo">
                        <h1><a class="navbar-brand px-0 mx-0" href="{{url('/')}}">GeOilEnergy</a></h1>
                    </div>

                    <label for="drop" class="toggle">Menu</label>
                    <input type="checkbox" id="drop"/>
                    <ul class="menu mr-auto">
                        <li class="active"><a href="{{url('/')}}">Inicio</a></li>
                        <li>
                            <!-- First Tier Drop Down -->
                            <label for="drop-2" class="toggle toogle-2">Servicios
                                <span class="fa fa-angle-down" aria-hidden="true"></span></label>
                            <a href="#">Servicios <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                            <input type="checkbox" id="drop-2"/>
                            <ul>
                                <li><a href="{{url('/servicios/geoespaciales')}}" class="drop-text">Soluciones
                                        Geoespaciales</a></li>
                                <li><a href="{{url('/servicios/geofisica')}}" class="drop-text">Soluciones Geofísica</a>
                                </li>
                                <li><a href="{{url('/servicios/geologia')}}" class="drop-text">Soluciones Geología</a>
                                </li>

                            </ul>
                        </li>
                        <li>
                            <!-- First Tier Drop Down -->
                            <label for="drop-3" class="toggle toogle-3">Software<span class="fa fa-angle-down" aria-hidden="true"></span></label>
                            <a href="#">Software <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                            <input type="checkbox" id="drop-3"/>
                            <ul>
                                <li><a href="{{url('/software/geosoluciones')}}" class="drop-text">Software
                                        Geoespacial</a>
                                </li>
                                <li><a href="{{url('/software/geofisica')}}" class="drop-text">Software Geología y
                                        Geofísica</a></li>
                            </ul>
                        </li>
                        <li><a href="{{url('/nosotros')}}">Nosotros</a></li>
                        <li><a href="{{url('/aliados')}}">Aliados</a></li>
                        <li><a href="{{url('/contacto')}}">Contacto</a></li>

                    </ul>
                </nav>
                <!-- //nav -->
            </header>
            <!--//header -->
            @yield('breadcrumb')
        </div>
    </div>
    <!-- //top-nav -->
</div>
    @yield('content')
<!-- footer -->
<footer class="py-lg-5 py-4">
    <div class="container py-sm-3">
        <div class="row footer-grids">
            <div class="col-lg-4 mt-4">
                <h2><a class="navbar-brand px-0 mx-0 mb-4" href="{{url('/contacto')}}">Contáctenos
                    </a>
                </h2>
                <p class="mb-3">
                    Sonia Pongutá <br>
                    S.Ponguta@geoilenergy.com <br>
                    Skype: Sonia.Ponguta <br>
                    Celular: +1.403.400 3957 <br>
                    Teléfono: +1.403.266 3958 <br>
                </p>
                <h4 class="mb-4">Redes Sociales</h4>
                <div class="icon-social mt-4">
                    <a href="https://www.facebook.com/geoilenergy/" target="_blank" class="button-footr">
                            <span class="fa mx-2 fa-facebook">
                            </span>
                    </a>
                    <a href="https://twitter.com/geo_oil_energy" target="_blank" class="button-footr">
                        <span class="fa mx-2 fa-twitter"></span>
                    </a>
                    <a href="https://www.instagram.com/geoilenergy/" target="_blank" class="button-footr">
                        <span class="fa mx-2 fa-instagram"></span>
                    </a>
                    <a href="https://www.geoilenergy.com/web/https://www.linkedin.com/in/geo-oil-energy-698aa54b" target="_blank"
                       class="button-footr">
                        <span class="fa mx-2 fa-linkedin"></span>
                    </a>
                    <a href="https://api.whatsapp
                    .com/send?phone=+573102623869&text=Estoy%20Interesado%20en%20sus%20productos" target="_blank"
                       class="button-footr">
                        <span class="fa mx-2 fa-whatsapp"></span>
                    </a>

                </div>
            </div>
            <div class="col-lg-4 mt-4 ad-info">
                <h4 class="mb-4">Canada</h4>
                <p>
                    7 Harvest Oak Drive N.E. Calgary, AB <br>
                    Tel. +1.403. 2663958 <br>
                    Cel. +1.403.400 3957 <br>
                    Intl. +1.587.333 1997
                </p>
                <h4 class="mb-4">México</h4>
                <p>
                    Villahermosa, Tabasco
                    Lic. Victoria Rosales <br>
                    Cel. +52.1.993 342 8377 <br>
                    M.C. Roble Gonzalez <br>
                    Cel. +52.1.818 280 8378
                </p>
                <h4 class="mb-4">Colombia</h4>
                <p>
                    Cra 13A No. 101 – 12 Of. 301
                    Bogotá, Colombia <br>
                    Tel. +57.1.675 3555<br>
                    Cel. +57.310 2623869<br>
                    Intl. +1.587.332 6315
                </p>
            </div>
            <div class="col-lg-4 mt-4">
                <img src="{{asset('images/footer/mapa.png')}}" alt="">
            </div>
        </div>
    </div>
</footer>
<!-- //footer -->
</body>

</html>
