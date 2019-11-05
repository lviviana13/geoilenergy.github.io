@extends('layouts.small-header')
@section('title'){{$title}}@endsection
@section('content')
<!-- Contact -->
<section class="about-info ">
    <div class="content-w3ls-inn">
        <div class="container  ">
            <div class="content-sing-w3pvt ">
                <a href="https://www.bluemarblegeo.com/products/global-mapper-lidar.php" target="_blank">
                    <h3 class="text-center"><img class="img-fluid" style="max-height: 250px" src="/images/software/index/gm-l_logo.png" alt=""></h3>
                </a>
                <div class="row about-w3pvt-top mt-2">
                    <div class="col-lg-6 about-info">
                        <hr>
                        <p class="text-center"> <iframe width="500" height="285" src="https://www.youtube.com/embed/mMVhDVIr3gg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> </p>
                        <hr>
                    </div>
                    <div class="col-lg-6 about-info">
                        <p>El módulo LiDAR de Global Mapper es una mejora opcional del software que proporciona numerosas herramientas avanzadas de procesamiento LiDAR, incluyendo Pixels-to-Points™ para la creación de nubes de puntos fotogramétricas a partir de una serie de imágenes recolectadas por aviones teledirigidos o UAVs, creación de modelos 3D o mallas a partir de una nube de puntos, clasificación automática de nubes de puntos, extracción automática de edificios, árboles y líneas de alta tensión, visualización de secciones transversales y edición de puntos, digitalización o extracción personalizada de características de áreas y líneas 3D, generación de superficie dramáticamente más rápida, control de calidad LiDAR, y mucho más.</p>
                    </div>

                </div>

                <h4 class="title-hny mb-3">CARACTERÍSTICAS</h4>
                <div class="row about-w3pvt-top mt-2">
                    <div class="col-lg-6 about-info">

                        <p>Las características más relevantes del módulo LiDAR son las siguientes: <br>
                            <strong>Clasificación automática y manual</strong> de nubes de puntos como: de suelo, de vegetación alta, media y baja, de edificaciones y de cuerpos de agua; para la clasificación automática se adicionan parámetros adicionales de control en la clasificación. <br>
                            <p class="text-center"><img class="img-fluid" style="max-height: 200px" src="/images/software/gm/2.jpg" alt=""></p>
                            <strong>Extracción de elementos del terreno</strong> (edificios, arboles, líneas de alta tensión, entre otros) para representar la visualización de objetos en 2D y 3D, así como la digitalización personalizada 3D, ideal para delinear cunetas, redes de servicios públicos, tuberías, construcciones de líneas de techo a partir de nubes de puntos de alta resolución. <br>

                        </p>
                    </div>
                    <div class="col-lg-6 about-info">
                        <hr>
                        <p class="text-center">
                            <video width="500" height="285" src="/images/software/gm/video2.mp4" autoplay muted loop></video> </p>
                        <hr>
                        <br>
                        <strong>Pixels-to-Points</strong> para creación de nubes de puntos fotogramétricos a
                        partir de una matriz de imágenes. <br> <br>
                        <strong> Otras características como: </strong>
                        vista de sección de corte, edición de puntos, digitalización personalizada 3D, mejora de ruido a través de su control de calidad y mucho más.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //single -->
@endsection