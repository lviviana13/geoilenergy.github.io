@extends('layouts.small-header')
@section('title'){{$title}}@endsection
@section('content')
<!-- Contact -->
<section class="about-info  ">
    <div class="content-w3ls-inn ">
        <div class="container py-md-1 ">
            <div class="content-sing-w3pvt ">


                <a href="" target="_blank">
                    <h3 class="text-center"><img class="img-fluid" src="/images/software/index/qi_logo.png" alt=""></h3>
                </a>

                <p>
                    QI-Pro es un entorno interactivo de trazado cruzado para la interpretación geológica de los atributos sísmicos.
                    La clasificación de atributos es guiada por plantillas petrofísicas y de física de rocas
                    y validada por información espacial de pozos, todo bajo el control del intérprete.</p>
                <p class="text-center"><img class="img-fluid" style="max-height: 200px" src="/images/software/qi/seis.png" alt=""></p>
                <p>Con QI-Pro, la integración se logra sin la necesidad de complicados scripts o codificación.
                    QI-Pro le permite combinar rápidamente varios volúmenes de atributos en una historia geológica coherente. Proporciona una fácil carga,
                    visualización simultánea y clasificación de numerosos tipos de datos utilizando diagramas interactivos, mapas y diagramas de atributos
                    que muestran los datos de registro y la plantilla de física de rocas. Superposición de puntos de datos sísmicos en las secciones de
                    diagramas de atributos. Potente visualización. Gráficos cruzados, secciones transversales, visualizaciones de registros y mapas.
                    Entrada y salida estándar SEG-Y y LAS. Carga fácil de datos generados desde cualquier software y plantillas de física de rocas desde cualquier fuente
                    Desarrollo de plugins con SeisWare. Plugins de Petrel y DecisionSpace.</p>

                <h3 class="text-center"><img class="img-fluid" style="max-height: 300px" src="/images/software/qi/uno.png" alt=""></h3>


                <hr>
                <div class="row about-w3pvt-top mt-2">
                    <div class="col-lg-6 about-info">
                        <!-- POZOS-->
                        <h4 class="title-hny mb-3">Pozos</h4>

                        <ul class="ul-lista">
                            <li>QC retrofísico. </li>
                            <li>Cálculos y predicciones de logs, incluyendo indicadores de calidad. </li>
                            <li>Análisis de datos de pozo y gráficos cruzados para la interpretación de propiedades elásticas y para la creación de plantillas Q.
                            </li>

                        </ul>
                        <br>
                        <p class="text-center"><img class="img-fluid" style="max-height: 300px" src="/images/software/qi/dos.png" alt=""></p>

                        <!-- MODELADO -->
                        <h4 class="title-hny mb-3">Modelado</h4>

                        <ul class="ul-lista">
                            <li>Modelado y calibración física de rocas para la interpretación de propiedades elásticas y plantillas de mejoramiento de la calidad.
                            </li>
                            <li>Modelamiento sísmico prospectivo para estudios de factibilidad de la mejora de la calidad.
                            </li>
                        </ul>
                        <br>
                        <p class="text-center"><img class="img-fluid" style="max-height: 300px" src="/images/software/qi/cuatro.png" alt=""></p>

                        <!--INTEGRACION -->
                        <h4 class="title-hny mb-3">Integración</h4>

                        <ul class="ul-lista">
                            <li>Diseño del flujo de trabajo.

                            </li>
                            <li>Interpretación de la propiedad geológica en relación con los indicadores de producción.
                            </li>
                            <li> Predicción interactiva de canales navegables o de producción.

                            </li>
                        </ul>

                    </div>
                    <div class="col-lg-6 about-info">

                        <!-- Sísmica -->
                        <h4 class="title-hny mb-3">Sísmica</h4>

                        <ul class="ul-lista">
                            <li>Supervisión de procesamiento sísmico en 2D, 3D, 4D y 3C para objetivos de mejoramiento de la calidad. </li>
                            <li>Pre-acondicionamiento de datos para el análisis de calidad y evaluación del cumplimiento de la AAVO.
                            </li>
                            <li>AVO multicomponente (PS), Inversión e integración de AVO, post-apilamiento y preapilamiento. </li>
                            <li>Evaluación de la incertidumbre y optimización de parámetros.
                            </li>
                            <li>
                                Estimación e interpretación de atributos AVAZ para propiedades dependientes del azimuth.
                            </li>
                            <li>Análisis multiatributos y predicción de logs</li>
                            <li> Calibración e interpretación en 4D. </li>


                        </ul>
                        <br>
                        <p class="text-center"><img class="img-fluid" style="max-height: 400px" src="/images/software/qi/tres.png" alt=""></p>


                        <!-- clasificación -->

                        <h4 class="title-hny mb-3">Clasificación</h4>
                        <ul class="list-group">
                            <li>Facilidades interactivas QI-pro e identificación de propiedad de rocas a partir de las entradas de QI.

                            </li>
                            <li>Evaluación probabilística de facies y flexibilidad para determinar la confianza en la predicción de facies.
                            </li>
                        </ul>
                        <br>
                        <p class="text-center"><img class="img-fluid" style="max-height: 250px" src="/images/software/qi/cinco.png" alt=""></p>
                    </div>
                </div>
<hr>

            </div>
        </div>
    </div>
</section>
<!-- //single -->

@endsection