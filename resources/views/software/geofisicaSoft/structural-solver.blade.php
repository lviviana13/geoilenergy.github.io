@extends('layouts.small-header')
@section('title'){{$title}}@endsection
@section('content')
    <!-- Contact -->
    <section class="about-info p-lg-5 p-3">
        <div class="content-w3ls-inn px-lg-5">
            <div class="container py-md-5 py-3">
                <div class="content-sing-w3pvt px-lg-5">
                    <h3 class="tittle-w3ls mb-3">Structure Solver</h3>
                    <p>StructureSolver es un sistema robusto, potente y sencillo de interpretación estructural cuantitativa, con una integración de modelamiento y restauración de cuencas con fallas. StructureSolver le permitirá entender la historia estratigráfica y estructural de su cuenca, inferir correlaciones a través de las fallas, validar fallas y la geometría de las trampas, determinar el despegue, las trayectorias de las fallas en profundidad, desplazamientos y deformación interna de las estructuras, entre otras.</p>
                    <p>Problemas principales en geología estructural del petróleo:</p>
                    <ul>
                        <li>Correlación a través de las fallas.</li>
                        <li>Forma y desplazamiento de las fallas en profundidad.</li>
                        <li>Forma del reservorio en áreas con poca información.</li>
                        <li>Tectónica y estratigrafía relacionada.</li>
                        <li>Desarrollo de estructuras complejas con múltiples fallas.</li>
                        <li>Deformación interna en los reservorios.</li>
                        <li>Descifrar la historia de estructuras complejas (Erosión, inversión.</li>
                    </ul>
                    <img class="img-fluid mb-2" src="/images/banner2.jpg" alt="">
                    <div class="row about-w3pvt-top mt-2">
                        <div class="col-lg-6 about-info">
                            <h4>Restauración Estructural</h4>
                            <p>StructureSolver puede restaurar secciones sísmicas y geológicas inmediatamente, con respecto a un horizonte de referencia mientras se elimina el desplazamiento a lo largo de las fallas que lo intersectan.
                            </p>
                            <p>El método busca crear trayectorias paleo-verticales en la sección sísmica o geológica actual que corresponden a trazos verticales ininterrumpidos en la sección restaurada. Ver los principios y descripciones descritos por Nunns, 1991 en Structural Restoration of Seismic and Geologic Sections in Extensional Regimes, AAPG Bulletin, V. 75, No. 2.</p>
                            <p>El enfoque de la restauración estructural que provee StructureSolver es muy robusto para una cantidad moderada de deformación estructural 2D, donde la precisión del método ha sido calibrada con la restauración de secciones transversales de modelos teóricos y físicos avanzados.
                            </p>
                            <p>Usando este procedimiento, usted le agrega valor por medio de:</p>
                            <ul>
                                <li>La verificación de las interpretaciones a través de las fallas para las correlaciones sísmicas y balance estructural.</li>
                                <li>Descubrir la historia estratigráfica y estructural.</li>
                                <li>Revelar rasgos y relaciones sutiles que han sido cubiertas por la disección tectónica.</li>
                                <li>La metodología de restauración de StructureSolver puede manejar sin ningún inconveniente secciones repetidas debido a fallas inversas.</li>
                            </ul>
                        </div>
                        <div class="col-lg-6 about-info">
                            <h4>Modelamiento Estructural</h4>
                            <p>Con StructureSolver puede crear modelos balanceados avanzados de las estructuras del bloque colgante (Hanging Wall) asociados al movimiento de las fallas.</p>
                            <p>El método usado por StructureSolver (Xiao & Suppe, 1192 – Origin of Rollover, AAPG Bulletin, V. 76, No. 4) muestra que las formas de los pliegues de “Rollover” están controlados por un número de variables entre os cuales están:</p>
                            <ul>
                                <li>La forma de la falla.</li>
                                <li>La historia de la tasa de sedimentación relativa al desplazamiento de las fallas.</li>
                                <li>El desplazamiento total luego del depósito de cada una de las capas.</li>
                                <li>La dirección de movimiento de roca relativo en el colapso del bloque colgante (Hanging Wall).</li>
                                <li>Compactación.</li>
                            </ul>
                            <p>Igualmente, puede hacer cambios a los modelos de forma interactiva hasta hacerlo coincidir con las estructuras observadas en su sección sísmica o geológica. Usando este procedimiento, usted le agrega valor por medio de:</p>
                            <ul>
                                <li>Limitar la forma de las fallas y las correlaciones a través de las fallas.</li>
                                <li>Tener claridad acerca de la cinemática estructural y la interacción entre el fallamiento y la sedimentología del área de estudio.</li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //single -->

@endsection