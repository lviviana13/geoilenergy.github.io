@extends('layouts.small-header')
@section('title'){{$title}}@endsection
@section('content')
<!-- /projects -->
<section class="projects py-5" id="gallery">
    <div class="container py-md-5">
        <h3 class="tittle-w3ls text-left mb-5">Software <span class="pink">Geospatial
            </span> </h3>
        <div class="row news-grids mt-md-5 mt-4 text-center">
            <div class="col-md-4 gal-img">
                <a href="{{url('/software/geosoluciones/g-calculator')}}"><img src="/images/software/index/geographiCalculator.png" alt="w3pvt" class="img-fluid">
                    <div class="gal-info">
                        <h5>Geographic Calculator<span class="decription">
                                powerful geodetic application with particular strength in survey, seismic, and energy exploration used by companies in a variety of industries, organizations and private users.

                            </span></h5>
                    </div>
                </a>
            </div>

            <div class="col-md-4 gal-img">
                <a href="{{url('/software/geosoluciones/global-mapper')}}"><img src="/images/software/index/gm.png" alt="w3pvt" class="img-fluid">
                    <div class="gal-info">
                        <h5>Global Mapper <span class="decription"> Powerful and affordable geographic information systems (GIS) application that combines a full range of computing solutions for spatial data processing. </span></h5>
                    </div>
                </a>
            </div>

            <div class="col-md-4 gal-img">
                <a href="{{url('/software/geosoluciones/global-mapper-ld')}}"><img src="/images/software/index/gm-l.jpg" alt="w3pvt" class="img-fluid">
                    <div class="gal-info">
                        <h5>Global Mapper / Modulo LiDAR<span class="decription">
                                Optional enhancement of the Global Mapper software that provides numerous advanced LiDAR processing tools. </span></h5>
                    </div>
                </a>
            </div>



            <div class="col-md-4 gal-img">
                <a href="{{url('/software/geosoluciones/fme')}}"><img style="height: 200px" src="/images/software/index/fme.png" alt="w3pvt" class="img-fluid">
                    <div class="gal-info">
                        <h5>FME<span class="decription">
                                Platform that allows different data formats to be integrated quickly and efficiently, restructuring and transforming them according to the user's needs. It has the best support for spatial data worldwide.

                            </span></h5>
                    </div>
                </a>
            </div>

            <div class="col-md-4 gal-img">
                <a href="{{url('/software/geosoluciones/solv3d')}}"><img style="height: 200px" src="/images/software/index/solv3D.png" alt="w3pvt" class="img-fluid"></a>
                <div class="gal-info">
                    <h5>Solv3D<span class="decription">
                            Web-based solution that enhances your data, with the ability to integrate geospatial datasets from many sources.</span></h5>
                </div>
            </div>

            <div class="col-md-4 gal-img">
                <a href="{{url('/software/geosoluciones/i-open')}}"><img style="height: 200px" src="/images/software/index/iopen.svg" alt="w3pvt" class="img-fluid"></a>
                <div class="gal-info">
                    <h5>I-Open<span class="decription">
                    Complete solution for corporate web interface and service that meet your infrastructure needs, advanced geospatial and non-geospatial data storage and maintenance services. </span></h5>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //projects -->
@endsection