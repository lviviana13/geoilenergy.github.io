@extends('layouts.small-header')
@section('title'){{$title}}@endsection
@section('content')
<!-- Contact -->
<section class="about-info p-lg-5 p-3">
    <div class="content-w3ls-inn px-lg-5">
        <div class="container py-md-5 py-3">
            <div class="content-sing-w3pvt px-lg-5">
                <a href="https://www.structuresolver.com/" target="_blank">
                    <h3 class="text-center"><img class="img-fluid" style="max-height: 150px" src="/images/software/index/structuresolver_logo.png" alt=""></h3>
                </a>



                <div class="row about-w3pvt-top mt-2">

                    <div class="col-lg-6 about-info">
                        <img class="img-fluid mb-2" style="max-height: 260px" src="/images/software/structuresolver/uno.png" alt="">
                    </div>
                    <div class="col-lg-6 about-info">

                        <p>StructureSolver is a robust, powerful and simple system of quantitative structural interpretation, with an integration of modeling and restoration of faulty basins. StructureSolver will allow you to understand the stratigraphic and structural history of your basin, infer correlations through faults, validate fault and trap geometry, determine detachment, fault trajectories in depth, displacements and internal deformation of structures, among others.</p>

                    </div>
                </div>

                <hr>

                <div class="row about-w3pvt-top mt-2">
                    <div class="col-lg-6 about-info">

                        <h4>Structural Restoration</h4>
                        <p>StructureSolver can instantly restore interpreted seismic or geological sections by flattening with respect to a reference horizon while removing slip across faults that intersect the horizon.
                        </p>
                        <p>The method seeks to create paleovertical trajectories in the present day seismic or geologic section that correspond to unbroken vertical traces in the restored section. The principles and assumptions are described by Nunns, 1991 (Structural Restoration of Seismic and Geologic Sections in Extensional Regimes, AAPG Bulletin, V. 75, No. 2)</p>
                        <p>This approach is robust for moderate amounts of 2-D structural deformation. The accuracy of the method has been calibrated by restoring cross sections of theoretical and physical forward models, where all the intermediate states are known.
                        </p>

                        <img class="img-fluid mb-2" style="max-height: 400px" src="/images/software/structuresolver/dos.png" alt="">

                        <p>Through this process you create value by:</p>
                        <ul class="col-lg-12 ul-lista">
                            <li>Checking interpretations through faults for seismic correlations and structure balance.</li>
                            <li>Unraveling structural and stratigraphic history.</li>
                            <li>Revealing subtle features and relationships that have been masked by tectonic dissection.</li>
                            <li>StructureSolver restoration can handle duplicated sections, provided that the overlap is not too large.</li>
                            <li>Results are satisfactory in many situations even though StructureSolver restoration does not incorporate a flexural slip mechanism.</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 about-info">
                        <h4>Structural Modeling</h4>
                        <p>StructureSolver lets you create balanced forward models of the hangingwall structures associated with movement on faults.</p>

                        <p>The method used by StructureSolver (Xiao & Suppe, 1192 – Origin of Rollover, AAPG Bulletin, V. 76, No. 4) shows that the shapes of rollover folds are controlled by several variables, including:</p>
                        <ul class="col-lg-12 ul-lista">
                            <li>The shape of the fault</li>
                            <li>The history of sedimentation rate relative to fault slip</li>
                            <li>The total slip after each bed is deposited.</li>
                            <li>The direction of relative rock motion in hangingwall collapse</li>
                            <li>Compaction</li>
                        </ul>
                        <br>
                        <img class="img-fluid mb-2" style="max-height: 400px" src="/images/software/structuresolver/tres.png" alt="">
                        <br>
                        <p>Similarly, you can interactively change the models until you have matched the observed structures in your seismic or geologic section. Through this process you create value by:</p>
                        <ul class="col-lg-12 ul-lista">
                            <li>Constraining fault shapes and cross-fault correlations</li>
                            <li>Clarifying structural kinematics and the interplay between faulting and sedimentation.</li>
                        </ul>

                    </div>
                </div>
                <hr>

                <div class="row about-w3pvt-top mt-2">

                    <div class="col-lg-4 about-info">
                        <img class="img-fluid mb-2" style="max-height: 400px" src="/images/software/structuresolver/cuatro.png" alt="">
                    </div>
                    <div class="col-lg-8 about-info">
                        <h4>Area-Depth Strain Analysis</h4>
                        <p>Area-Depth Strain Analysis is a valuable way to study structures that either sole out into an underlying detachment which is parallel to regional stratigraphy (depth to detachment method), or form above a fault that cuts across the deep bedding (Fault Trajectory Method).</p>
                        <p>The technique works by analyzing the variation of excess structural area with depth. Under appropriate circumstances, this approach results in:</p>
                        <ul class="col-lg-12 ul-lista">
                            <li>A determination of the depth of the controlling detachment, or the location and dip of the controlling fault</li>
                            <li>Estimates of the displacements along the detachment or controlling fault for both pre-growth and growth horizons</li>
                            <li>Estimates of the layer-parallel strain for all horizons.</li>
                        </ul>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- //single -->

@endsection