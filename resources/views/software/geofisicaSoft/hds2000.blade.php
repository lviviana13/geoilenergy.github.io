@extends('layouts.small-header')
@section('title'){{$title}}@endsection
@section('content')
    <!-- Contact -->
    <section class="about-info p-lg-5 p-3">
        <div class="content-w3ls-inn px-lg-5">
            <div class="container py-md-5 py-3">
                <div class="content-sing-w3pvt px-lg-5">
                    <h3 class="tittle-w3ls mb-3">HDS2000</h3>
                    <p>Hydrocarbon Data System, Inc. Generalmente conocido como HDS 2000, es un proveedor de programas para análisis de registros de pozo y petrofísica para Geólogos, Ingenieros y Petrofísicos.</p>
                    <p>El programa de análisis de registros, que trabaja únicamente bajo entorno Windows (32-bit y 64-bit), toma la información digital de su área y la convierte en una base de datos Access, sin embargo, no lo convierte en una limitante para el manejo de gran volumen de información.</p>
                    <p>Igualmente, HDS 2000 maneja gran cantidad de formatos para la integración de variedad de información:</p>
                    <ul>
                        <li>1 valor por profundidad</li>
                        <li>Hueco Abierto (Open-Hole)</li>
                        <li>Hueco Cerrado (Cased-Hole)</li>
                        <li>Núcleos</li>
                        <li>Registros LWD (Logging While Drilling) y Wireline</li>
                        <li>Información MWD (Measured While Drilling)</li>
                        <li>Registros de Mudlogging</li>
                        <li>Formatos como .LAS, ASCII, Excel, DLIS, LIS, Tablas Digitalizadas, entradas con el teclado, BitMaps, EMF Metafiles, CGM, entre otros</li>
                    </ul>
                    <img class="img-fluid mb-2" src="/images/banner2.jpg" alt="">
                    <div class="row about-w3pvt-top mt-2">
                        <div class="col-lg-6 about-info">
                            <h4>Explorador de archivos – Detalles del Proyecto</h4>
                            <ul>
                                <li> Encuentre fácilmente su proyecto por operador o nombres de pozo.</li>
                                <li>Visualice y expanda a nivel de detalle las series de datos, información de pozo, survey direccional, etc.</li>
                                <li>Visualice todos los detalles de la información almacenada en su proyecto.</li>
                                <li>Visualice todas las curvas existentes en su set de datos como Gr, Phie, Sw, etc., además de la versión de creación de cada una de ellas.</li>
                            </ul>
                        </div>
                        <div class="col-lg-6 about-info">
                            <h4>Información de pozo – Ambiente del Hueco</h4>
                            <ul>
                                <li>Comúnmente conocido como Rmf e información de corrida, usualmente vista en todos los cabezales de los registros de pozo.</li>
                                <li>Código de colores para resaltar la información que es crítica para algunos cálculos requeridos en el pozo, y que se debe tener previo a cualquier análisis. Rojo: Información obligatorio, Amarillo: Por defecto, Azul o Amarillo: Información importada desde el archivo LAS, o modificados manualmente.</li>
                                <li>Posibilidad de agregar más de 16 corridas de herramientas para información de Wireline o LWD (Logging While Drilling).</li>
                            </ul>

                        </div>
                    </div>
                    <div class="row about-w3pvt-top mt-2">
                        <div class="col-lg-6 about-info">
                            <h4>Información de Núcleos</h4>
                            <p>HDS2000 incluye una lista de herramientas de edición de la información de la base de datos como:</p>
                            <ul>
                                <li>Edición de hojas de cálculo</li>
                                <li>Suavizado de las curvas</li>
                                <li>Desplazamiento de la línea base</li>
                                <li>Edición de las curvas</li>
                                <li>Correcciones Ambientales</li>
                                <li>Caja de herramientas de otras correcciones de curvas, entre otras.</li>
                                <li>Incorporar imágenes e información de Núcleos</li>
                                <li>Amarrar y correlacionar información de núcleos a los registros Wireline.</li>
                                <li>Desplazar y ajustar todos los registros de imagen en conjunto o de forma individual</li>
                                <li>Revisión del desplazamiento y ajuste</li>
                            </ul>
                        </div>
                        <div class="col-lg-6 about-info">
                            <h4>Despliegue visual de los Cálculos</h4>
                            <ul>
                                <li>Herramienta interactiva de Cálculos para el procesamiento de los registros Wireline y de hueco cerrado.</li>
                                <li>El despliegue de los resultados se hace de forma inmediata opcionalmente, ya que los parámetros ya se encuentran configurados.</li>
                                <li>Cada paso incluye curvas de ingreso y curvas de salida, Cross Plots para la identificación de zonas, parámetros y opciones de celda, entre otras.</li>
                                <li>Con HDS2000 tiene una visualización completa para el control de la información de ingreso, procesamiento y resultados petrofísicos.</li>
                            </ul>
                        </div>
                    </div>
                    <hr>
                    <p>Además de lo anterior incluye herramientas para:</p>
                    <ul>
                        <li>Procesamiento de arenas arcillosas</li>
                        <li>Vista rápida de arenas arcillosas gasíferas</li>
                        <li>Procesamiento personalizado</li>
                        <li>Vista y procesamiento con Cross Plot Multi-Pozo</li>
                        <li>Reportes y resultados con resumen del Play</li>
                        <li>Estimación de Reservas de Petróleo y Gas</li>
                        <li>Plataforma interactiva para generación de los registros de pozo.</li>
                        <li>Secciones transversales para correlación.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- //single -->

@endsection