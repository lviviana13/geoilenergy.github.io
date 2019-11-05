@extends('layouts.small-header')
@section('title'){{$title}}@endsection

@section('content')
<!-- about -->
<section class="about ">
    <div class="container py-md-5">
        <div class="about-hny-info  pr-lg-5">
            <h3 class="tittle-w3ls mb-3 text-center"><span class="pink">Quiénes</span> Somos</h3>
            <br>
            <p> Somos una compañia de servicios Colombo-Canadiense con extensa experiencia en las industrias Oil & Gas y Mineria cuya principal distinción es la alta calidad y beneficio en los productos y serviciosofrecidos así como la
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
        <div class="row about-w3pvt-top mt-3">
            <div class="col-lg-3 about-info">
                <ul>
                    <li class="list-group-item text-center"> <a href="{{url('/nosotros')}}"><img src="../images/nosotros/oscarj_p.png" class="img-person"></a> </li>
                </ul>
            </div>
            <div class="col-lg-9 about-info">
                <h3> Oscar Orduz</h3>
                <span class="sub-tittle-team">Vicepresidente</span>
                <p class="info-person"> Ingeniero Catastral y Geodesta con especialización en Sistemas de Información Geográfica (SIG) e Ingeniería de Software y en Gerencia de Proyectos y Administración de Negocios.
                    Más de 26 años de experiencia en distintas industrias como petróleo y gas, oleoductos, líneas de transmisión eléctrica y ferrocarriles entre otras liderando proyectos en el uso e implementación de SIG y tecnologías web mapping en Colombia, Canadá, Republica Dominicana y Chile, variando desde la identificación de requerimientos, adquisición de información geoespacial, control de calidad, hasta administración de datos, su integración a nivel corporativo, maximización del valor de datos para uso en diseño, construcción y operación de proyectos de ingeniería e infraestructura con costos desde pocos miles hasta proyectos de más de 1.5 Billones de dólares.
                    Capacidad para proveer liderazgo estratégico, experiencia técnica, análisis de procesos, planeación y ejecución de proyectos, integrando soluciones y equipos de trabajo aumentando eficiencias y maximizando la propuesta de valor de las organizaciones donde participa.
                    Como socio fundador de Geo Oil Energy es responsable de la ejecución de proyectos, aseguramiento de calidad, la identificación de necesidades y su resolución con soluciones de última tecnología alcanzables en tiempos cortos y asegurando la satisfacción de nuestros clientes.
                </p>
            </div>
        </div>

        <div class="row about-w3pvt-top mt-3">
            <div class="col-lg-3 about-info">
                <ul>
                    <li class="list-group-item text-center"> <a href="{{url('/nosotros')}}"><img src="../images/nosotros/ivan_p.jpg" class="img-person"></a> </li>
                </ul>
            </div>
            <div class="col-lg-9 about-info">
                <h3> Iván Reyes</h3>
                <span class="sub-tittle-team">Gerente de Nuevos Negocios</span>
                <p class="info-person"> Geólogo e Ingeniero de Sistemas de la Universidad Nacional de Colombia y Universidad Autónoma respectivamente. Especialista en Gerencia de proyectos y con Master en manejo de recursos geológicos.
                    Más de 25 años de experiencia en la industria de hidrocarburos principalmente como desarrollador de negocios E&P y en tecnología aplicada. Lideró proyectos principalmente en México, US GOM, Colombia, Perú y Ecuador, desde la definición de estrategias de posicionamiento de la empresa en nuevas área o países, identificación y análisis de oportunidades de inversión, participación en rondas licitatorias, hasta la concreción de contratos petroleros.
                    Habilidad para analizar procesos de negocio e información multidisciplinaria técnica, contractual, socio ambiental, tecnológica y económica e integrar equipos interdisciplinarios para identificar, evaluar, estructurar, promover, negociar y gestionar oportunidades de captura o desinversión de activos o compañías de exploración y producción.
                    En Geo Oil Energy como Gerente de desarrollo de negocios identifica y desarrolla oportunidades de implementación de nuestras tecnologías y experticia en el mejoramiento de los procesos de negocios de nuestros actuales y potenciales clientes.
                </p>
            </div>
        </div>



        <div class="row about-w3pvt-top mt-3">
            <div class="col-lg-3 about-info">
                <ul>
                    <li class="list-group-item text-center"> <a href="{{url('/nosotros')}}"><img src="../images/nosotros/oscar_p.jpg" class="img-person"></a> </li>
                </ul>
            </div>
            <div class="col-lg-9 about-info">
                <h3> Oscar Quintero</h3>
                <span class="sub-tittle-team">Senior Geologist Engineer</span>
                <p class="info-person"> Ingeniero Geólogo graduado en la Universidad de los Andes, del Estado Mérida, Venezuela, con más 18 años de experiencia en la industria petrolera y amplio dominio de competencias en el área de yacimientos e interpretación Sísmica: Elaboración de secciones estructurales e estratigráficas, mapas estructurales, isópacos y de facies sedimentarias. Actualización de mapas geológicos. Descripción litológica de muestras de canal para el control de la perforación de pozos. Soporte en Geomodelaje en la plataforma de Petrel, Strawork Landmark, Geografhix y Seisware. Monitoreo de los parámetros de perforación y parada de pozos por muestras de canal. Gran Experiencia en la explotación de yacimientos ligeros, medianos y pesados, arenas, calizas, Estudios Integrados de Yacimientos clásticos, monitoreo de yacimientos de areniscas y carbonatos, Aplicación de la metodología VCD en proyectos de productividad, Calculos de POES, Interpretacion Sismica. </p>
            </div>
        </div>

        <div class="row about-w3pvt-top mt-3">
            <div class="col-lg-3 about-info">
                <ul>
                    <li class="list-group-item text-center"> <a href="{{url('/nosotros')}}"><img src="../images/nosotros/jenny_p.jpeg" class="img-person"></a> </li>
                </ul>
            </div>
            <div class="col-lg-9 about-info">
                <h3> Jenny Castiblanco</h3>
                <span class="sub-tittle-team">Senior GIS Analyst OnSite </span>
                <p class="info-person"> Especialista en Sistemas de Información Geográfica e Ingeniera Catastral y Geodesta, con más de 7 años de experiencia en el desarrollo de soluciones geográficas con experiencia profesional en administración de bases de datos, análisis espacial, interpretación de ortofotoimagenes e información aerotransportada, levantamientos topograficos y avaluos de catastrales, desarrollados en los sectores: ambiental, estatal, privado y oil and gas.

                    Profesional destacada entre sus clientes por ser una persona creativa, innovadora, responsable y dinámica y con especial gusto por trabajar en equipo.

                    En Geo Oil Energy Jenny trabaja como Senior GIS Analyst OnSite para Petrobras Colombia. </p>
            </div>
        </div>

        <div class="row about-w3pvt-top mt-3">
            <div class="col-lg-3 about-info">
                <ul>
                    <li class="list-group-item text-center"> <a href="{{url('/nosotros')}}"><img src="../images/nosotros/paula_p.jpg" class="img-person"></a> </li>
                </ul>
            </div>
            <div class="col-lg-9 about-info">
                <h3> Paula Ulloa</h3>
                <span class="sub-tittle-team">Ingeniera Geomática</span>
                <p class="info-person"> Ingeniera Catastral y Geodesta de la Universidad Distrital Francisco José de Caldas, Actualmente realizando estudios de economía en la Escuela de Administración y Negocios (Universidad EAN); con experiencia en reconocimiento predial, levantamiento planímetro, procesamiento digital de imágenes, elaboración de cartografía de calidad, análisis de información geográfica, y procesos catastrales en el sector público y privado.

                    Caracterizada por dar solución a situaciones y problemas concretos, proponiendo alternativas viables y eficientes; con un alto grado de responsabilidad y sentido del trabajo en equipo.

                    En Geo Oil Energy, Como Ingeniera Geomática brinda soporte para las soluciones Geoespaciales que representa la compañía, apoyando conjuntamente distintos proyectos, así como procesos de contratación pública y administración.
                </p>
            </div>
        </div>


        <div class="row about-w3pvt-top mt-3">
            <div class="col-lg-3 about-info">
                <ul>
                    <li class="list-group-item text-center"> <a href="{{url('/nosotros')}}"><img src="../images/nosotros/laura_p.png" class="img-person"></a> </li>
                </ul>
            </div>
            <div class="col-lg-9 about-info">
                <h3> Laura Rojas</h3>
                <span class="sub-tittle-team">Geóloga</span>
                <p class="info-person"> Geóloga, especialista en Gerencia de Recursos Naturales. Con experiencia en gestión de recursos no renovables y evaluación de proyectos; interpretación sísmica, encontrando prospectos de exploración, correlación de pozos teniendo en cuenta registros eléctricos y litológicos, sedimentología y estratigrafía con énfasis en estratigrafía de secuencias. Soporte geológico y carga de datos (data management). Conocimientos en cartografía geológica, difracción de rayos X, actualización y digitalización de información geológica, análisis de muestras petrográficas. </p>
            </div>
        </div>


        <div class="row about-w3pvt-top mt-3">
            <div class="col-lg-3 about-info">
                <ul>
                    <li class="list-group-item text-center"> <a href="{{url('/nosotros')}}"><img src="../images/nosotros/viviana_p.jpg" class="img-person"></a> </li>
                </ul>
            </div>
            <div class="col-lg-9 about-info">
                <h3> Viviana Bautista</h3>
                <span class="sub-tittle-team">Ingeniera de Soluciones</span>
                <p class="info-person"> Estudiante de Ing. Catastral y Geodesia, miembro activo del Grupo GNU/Linux de la Universidad Distrital, con 
                    experiencia en desarrollo web utilizando lenguajes de programación PHP (frameworks Yii y Laravel), Django y NodeJS. Con conocimiento en el manejo se sistemas operativos
                libres, capaz de ofrecer soluciones a las necesidades de una organización. <br>
                En Geo Oil Energy como Ingeniera de Soluciones ofrezco soporte y mantenimiento a servicios geoespaciales relacionados con el software FME, herramietnas de Web Mapping
                y requirimientos de IT de GOE.  </p>
            </div>
        </div>



        <hr>
    </div>
</section>

<!--//team-->
@endsection