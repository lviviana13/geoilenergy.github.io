@extends('layouts.template')
@section('title'){{ $title }}@endsection
@section('content')

<!-- banner slider -->
<div id="homepage-slider" class="st-slider">
    <input type="radio" class="cs_anchor radio" name="slider" id="play1" checked="" />
    <input type="radio" class="cs_anchor radio" name="slider" id="slide1" />
    <input type="radio" class="cs_anchor radio" name="slider" id="slide2" />
    <input type="radio" class="cs_anchor radio" name="slider" id="slide3" />
    <input type="radio" class="cs_anchor radio" name="slider" id="slide4" />
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
            <div class="image-slide">
                <div class="banner-w3pvt-4">
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
            <label for="slide4" class="radio-btn"></label>
        </div>
    </div>

</div>
<!-- //banner slider -->

<!-- //banner -->

<!-- //home -->



<!--servicios-->
<section class="py-5">
    <div class="container">
        <div class="row inner_sec_info">

            <div class="container p-md-1">
                <div class="about-hny-info text-center ">
                    <h3 style="font-size: 4em;" class="tittle-w3ls mb-3"> Geo
                        <span class="pink"> Oil </span>
                        Energy </h3>
                    <h4 style="font-size: 3em;">
                        The World´s best energy and technology <br>
                        solutions at your hands </h4> <br> <br>

                    <div class="circle">

                        <img class="img-circle" src="/images/index/uno.jpg" alt="">
                    </div>
                    <div class="circle">
                        <img class="img-circle" src="/images/index/dos.jpg" alt="">
                    </div>

                </div>
            </div>
        </div>
    </div>

</section>
<!--/ servicios-->

<!--Sobre la compañia -->
<section class="banner_bottom py-5">
    <div class="container py-md-5">
        <div class="row inner_sec_info">

            <div class="container p-md-1">
                <div class="about-hny-info px-md-5">
                    <h3 class="tittle-w3ls mb-3"><span class="pink">Our</span> Company</h3>
                    <p class="sub-tittle mt-3 mb-4">
                        Geo Oil Energy (GOE) is an international company specialized in the representation,
                        commercialization and distribution in the Canadian and the Latin American markets for
                        the products and services of companies with expertise in the areas of: Geology, Geophysics,
                        Geomatics and Engineering, with its main offices in Calgary, Canada and Bogotá, Colombia.

                    </p>
                    <a class="btn more black" href="{{url('/nosotros')}}" role="button">Read More</a>
                </div>
            </div>


        </div>
    </div>

    </div>
</section>
<!--//Sobre la compañia -->

<!-- /Aliados-->

<section class="projects text-center py-5" id="gallery">
    <div class="container">
        <h3 class="tittle-w3ls  "><span class="pink">Aliados</span> Tecnologicos </h3>
        <div class="row news-grids text-center">

            <div class="col-md-3 gal-img">

                <div class="slider">
                    <ul>
                        <li><img src="images/aliados/aliadosTecnologicos/ecopia.png" alt=""> </li>
                        <li><img src="images/aliados/aliadosTecnologicos/structuresolver.png" alt=""> </li>
                        <li><img src="images/aliados/aliadosTecnologicos/globeclaritas.png" alt=""> </li>
                        <li></li>
                    </ul>
                </div>

            </div>
            <div class="col-md-3 gal-img">
                <div class="slider">
                    <ul>
                        <li><img src="images/aliados/aliadosTecnologicos/ecopia.png" alt=""> </li>

                        <li><img src="images/aliados/aliadosTecnologicos/estructuresolver.png" alt=""> </li>
                        <li><img src="images/aliados/aliadosTecnologicos/eecopia.png" alt=""> </li>
                        <li></li>
                    </ul>
                </div>

            </div>
            <div class="col-md-3 gal-img">
                <div class="slider">
                    <ul>
                        <li><img src="images/aliados/aliadosTecnologicos/ecopia.png" alt=""> </li>

                        <li><img src="images/aliados/aliadosTecnologicos/estructuresolver.png" alt=""> </li>
                        <li><img src="images/aliados/aliadosTecnologicos/eecopia.png" alt=""> </li>
                        <li></li>
                    </ul>
                </div>

            </div>
            <div class="col-md-3 gal-img">
                <div class="slider">
                    <ul>
                        <li><img src="images/aliados/aliadosTecnologicos/ecopia.png" alt=""> </li>

                        <li><img src="images/aliados/aliadosTecnologicos/estructuresolver.png" alt=""> </li>
                        <li><img src="images/aliados/aliadosTecnologicos/eecopia.png" alt=""> </li>
                        <li></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- //Aliados-->


<!-- /Aliados-->

<section class="projects text-center " id="gallery">
    <div class="container">
        <h3 class="tittle-w3ls  "><span class="pink">Nuestras</span> Representaciones</h3> <br>
        <div class="row news-grids text-center">

            <div class="col-md-3 gal-img">

                <div class="slider">
                    <ul>
                        <li> <img src="images/aliados/representaciones/bmg.png" alt=""> </li>
                        <li><img src="images/aliados/representaciones/geomodeling.png" alt=""> </li>
                        <li>
                            <img src="images/aliados/representaciones/hds2000.png" alt="">
                        </li>
                        <li>
                            <img src="images/aliados/representaciones/seisware.png" alt="">
                        </li>
                    </ul>
                </div>

            </div>
            <div class="col-md-3 gal-img">
                <div class="slider">
                    <ul>
                        <li> <img src="images/aliados/representaciones/bmg.png" alt=""> </li>
                        <li><img src="images/aliados/representaciones/geomodeling.png" alt=""> </li>
                        <li>
                            <img src="images/aliados/representaciones/hds2000.png" alt="">
                        </li>
                        <li>
                            <img src="images/aliados/representaciones/seisware.png" alt="">
                        </li>
                    </ul>
                </div>

            </div>
            <div class="col-md-3 gal-img">
                <div class="slider">
                    <ul>
                        <li> <img src="images/aliados/representaciones/bmg.png" alt=""> </li>
                        <li><img src="images/aliados/representaciones/geomodeling.png" alt=""> </li>
                        <li>
                            <img src="images/aliados/representaciones/hds2000.png" alt="">
                        </li>
                        <li>
                            <img src="images/aliados/representaciones/seisware.png" alt="">
                        </li>
                    </ul>
                </div>

            </div>
            <div class="col-md-3 gal-img">
                <div class="slider">
                    <ul>
                        <li> <img src="images/aliados/representaciones/bmg.png" alt=""> </li>
                        <li><img src="images/aliados/representaciones/geomodeling.png" alt=""> </li>
                        <li>
                            <img src="images/aliados/representaciones/hds2000.png" alt="">
                        </li>
                        <li>
                            <img src="images/aliados/representaciones/seisware.png" alt="">
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- //Aliados-->


<!-- /Clientes-->

<section class="projects text-center py-5" id="gallery">
    <div class="container">
        <h3 class="tittle-w3ls  "><span class="pink">Nuestros</span> Clientes</h3> <br>
        <div class="row news-grids text-center">

            <div class="col-md-3 gal-img">

                <div class="slider">
                    <ul>
                        <li> <img src="images/aliados/clientes/1.png" alt=""> </li>
                        <li> <img src="images/aliados/clientes/2.png" alt=""> </li>
                        <li> <img src="images/aliados/clientes/3.png" alt=""> </li>
                        <li> <img src="images/aliados/clientes/4.png" alt=""> </li>
                    </ul>
                </div>

            </div>
            <div class="col-md-3 gal-img">
                <div class="slider">
                    <ul>
                        <li> <img src="images/aliados/clientes/5.jpg" alt=""> </li>
                        <li> <img src="images/aliados/clientes/6.jpg" alt=""> </li>
                        <li> <img src="images/aliados/clientes/7.png" alt=""> </li>
                        <li> <img src="images/aliados/clientes/8.png" alt=""> </li>
                    </ul>
                </div>

            </div>
            <div class="col-md-3 gal-img">
                <div class="slider">
                    <ul>
                        <li> <img src="images/aliados/clientes/9.jpg" alt=""> </li>
                        <li> <img src="images/aliados/clientes/10.png" alt=""> </li>
                        <li> <img src="images/aliados/clientes/11.jpg" alt=""> </li>
                        <li> <img src="images/aliados/clientes/12.png" alt=""> </li>
                    </ul>
                </div>

            </div>
            <div class="col-md-3 gal-img">
                <div class="slider">
                    <ul>
                        <li> <img src="images/aliados/clientes/25.jpg" alt=""> </li>
                        <li> <img src="images/aliados/clientes/26.jpg" alt=""> </li>
                        <li> <img src="images/aliados/clientes/27.png" alt=""> </li>
                        <li> <img src="images/aliados/clientes/28.png" alt=""> </li>
                    </ul>
                </div>

            </div>
            <div class="col-md-3 gal-img">
                <div class="slider">
                    <ul>
                        <li> <img src="images/aliados/clientes/13.png" alt=""> </li>
                        <li> <img src="images/aliados/clientes/14.jpg" alt=""> </li>
                        <li> <img src="images/aliados/clientes/15.png" alt=""> </li>
                        <li> <img src="images/aliados/clientes/16.jpg" alt=""> </li>
                    </ul>
                </div>

            </div>

            <div class="col-md-3 gal-img">
                <div class="slider">
                    <ul>
                        <li> <img src="images/aliados/clientes/17.jpg" alt=""> </li>
                        <li> <img src="images/aliados/clientes/18.png" alt=""> </li>
                        <li> <img src="images/aliados/clientes/19.png" alt=""> </li>
                        <li> <img src="images/aliados/clientes/20.png" alt=""> </li>
                    </ul>
                </div>

            </div>

            <div class="col-md-3 gal-img">
                <div class="slider">
                    <ul>
                        <li> <img src="images/aliados/clientes/21.jpg" alt=""> </li>
                        <li> <img src="images/aliados/clientes/22.png" alt=""> </li>
                        <li> <img src="images/aliados/clientes/23.png" alt=""> </li>
                        <li> <img src="images/aliados/clientes/24.jpg" alt=""> </li>
                    </ul>
                </div>

            </div>



            <div class="col-md-3 gal-img">
                <div class="slider">
                    <ul>
                        <li> <img src="images/aliados/clientes/29.png" alt=""> </li>
                        <li> <img src="images/aliados/clientes/30.png" alt=""> </li>
                        <li> <img src="images/aliados/clientes/17.jpg" alt=""> </li>
                        <li> <img src="images/aliados/clientes/22.png" alt=""> </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- //Clientes-->


<hr>
@endsection