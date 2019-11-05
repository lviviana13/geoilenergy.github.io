@extends('layouts.small-header')
@section('title'){{$title}}@endsection
@section('content')
<!-- /projects -->
<section class="projects py-5" id="gallery">
    <div class="container py-md-5">
        <h3 class="tittle-w3ls text-left mb-5">Software of <span class="pink">
                Geology & Geophysics
            </span> </h3>
        <div class="row news-grids mt-md-5 mt-4 text-center">

            <div class="col-md-4 gal-img">
                <a href="{{url('/software/geofisica/tesseral')}}"><img style="height: 100px" src="/images/software/index/tesseral_logo.png" alt="w3pvt" class="img-fluid"></a>
                <div class="gal-info">
                    <h5>TESSERAL<span class="decription">Tesseral Technologies Inc, is the developer of the Tesseral 2D and Tesseral Pro software, high precision wavefield modeling tools for seismic survey design, processing and seismic interpretation.</span></h5>
                </div>
            </div>

            <div class="col-md-4 gal-img">
                <a href="{{url('/software/geofisica/globe-claritas')}}"><img style="height: 100px" src="/images/software/index/globe-claritas_logo.png" alt="w3pvt" class="img-fluid"></a>
                <div class="gal-info">
                    <h5>Globe Claritas<span class="decription">Globe Claritas is the cost-effective solution that will allow you to improve your company's seismic information processing capabilities. </span></h5>
                </div>
            </div>

            <div class="col-md-4 gal-img">
                <a href="{{url('/software/geofisica/geomodeling')}}"><img style="height: 100px" src="/images/software/index/geomodeling.png" alt="w3pvt" class="img-fluid"></a>
                <div class="gal-info">
                    <h5>Geomodeling<span class="decription">Geomodeling’s products and services are pioneers in seismic attributes analysis and reservoir multi-scale modeling for hydrocarbon exploration and production industry.</span></h5>
                </div>
            </div>

            <div class="col-md-4 gal-img">
                <a href="{{url('/software/geofisica/seisware-geologia')}}"><img style="height: 150px" src="/images/software/index/seisware_gl.png" alt="w3pvt" class="img-fluid"></a>
                <div class="gal-info">
                    <h5>Geology by SeisWare (GL) <span class="decription"> 3D geological interpretation tool that allows you to integrate seismic information, well logs and production information in an interactive and easy-to-use interpretation environment. </span></h5>
                </div>
            </div>
            <div class="col-md-4 gal-img">
                <a href="{{url('/software/geofisica/seisware-geofisica')}}"><img style="height: 150px" src="/images/software/index/seisware_gf.png" alt="w3pvt" class="img-fluid"></a>
                <div class="gal-info">
                    <h5>Geophysics by SeisWare (GP)<span class="decription"> Is an all-inclusive, interactive and dynamic 2D/3D seismic interpretation system, built on the Windows platform, which allows you to have at your fingertips the tools and functionalities necessary to carry out your seismic project.</span></h5>
                </div>
            </div>

            <div class="col-md-4 gal-img">
                <a href="{{url('/software/geofisica/qi')}}"><img style="height: 150px" src="/images/software/index/qi.PNG" alt="w3pvt" class="img-fluid"></a>
                <div class="gal-info">
                    <h5>QI-Pro<span class="decription">
                            Interactive application of interpretation of seismic attributes that allows the entire team of assets to determine in collaboration how to combine and translate seismic attributes in flat geology.</span></h5>
                </div>
            </div>

            <div class="col-md-4 gal-img">
                <a href="{{url('/software/geofisica/structural-solver')}}"><img style="height: 150px" src="/images/software/index/structuresolver.png" alt="w3pvt" class="img-fluid"></a>
                <div class="gal-info">
                    <h5>StructureSolver <span class="decription">

                    StructureSolver integrates a set of quantitative structural analysis and interpretation tools for geoscientists working in faulted basins who seek to improve the accuracy of their seismic interpretation through the calculation of fold deformation by fault propagation, internal strain, prediction of fault geometry in depth and structural restorations, with the aim of reducing the risk in hydrocarbon exploration and production.</span></h5>
                </div>
            </div>
            <div class="col-md-4 gal-img">
                <a href="{{url('/software/geofisica/hds2000')}}"><img style="height: 150px" src="/images/software/index/hds2000.png" alt="w3pvt" class="img-fluid"></a>
                <div class="gal-info">
                    <h5>HDS 2000<span class="decription">Software for the analysis of well logs and other geologic registers for use by Geologists, Engineers, and Petrophysicists,  takes digital information and converts it into an access database in order to calculate porosity, saturation of water, clay volume, perform petro physical and deterministic standard analysis, among other functionalities.</span></h5>
                </div>
            </div>

            <div class="col-md-4 gal-img">
                <a href="{{url('/software/geofisica/geovariances')}}"><img style="height: 150px" src="/images/software/index/geovariances.png" alt="w3pvt" class="img-fluid"></a>
                <div class="gal-info">
                    <h5>Geovariances (ISATIS)<span class="decription"> 
                    Geostatistics solution software’s which help you manage and solve your challenging needs in different fields in industries like mining, Oil & Gas, environmental and mapping, and risk evaluation.

                           </span></h5>
                </div>
            </div>





        </div>
    </div>
</section>
<!-- //projects -->
@endsection