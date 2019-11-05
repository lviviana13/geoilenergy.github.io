@extends('layouts.small-header')
@section('title'){{$title}}@endsection
@section('content')
<!-- Contact -->
<section class="about-info p-lg-2 p-3">
    <div class="content-w3ls-inn px-lg-3">
        <div class="container py-md-2 py-3">
            <div class="content-sing-w3pvt px-lg-3">


                <a href="http://seisware.com/" target="_blank">
                    <h3 class="text-center"><img class="img-fluid" style="max-height: 150px" src="/images/software/index/seisware_gl_logo.png" alt=""></h3>
                </a>


                <p>Geology by SeisWare (GL) is a next-generation, 3D geological software tool that combines seismic, well log, and production data into an interactive, easy-to-use interpretation environment powered by patented Cascade Technology®.<br><br>
                    <strong>Interpret Faster:</strong> SeisWare Geology software delivers high performance in every aspect of its operation. It is designed to improve productivity, decision-making and opportunity generation, resulting in rapid, quality prospect analysis and shorter development cycle times<br><br>
                    <strong>Improve Accuracy:</strong> integrates well log and seismic data to offer a truly dynamic 3D geological interpretation environment. With Cascade Technology, any change to the interpretation immediately updates its highly interactive visualization environment</p>
                </p>

                <h3 class="text-center"><img class="img-fluid" style="max-height: 400px" src="/images/software/seisware_gl/uno.png" alt=""></h3>

                <hr>
                <div class="row about-w3pvt-top mt-2">
                    <div class="col-lg-6 about-info">
                        <h4>Complete Geological Solution</h4>
                        <br>

                        <ul class="ul-lista">
                            <li>Perform well log correlation, Surface modeling, 2D cross section interpretation, and 3D interpretation using a full suite of geological interpretation tools.</li>
                            <li>Update your stratigraphic and fault frameworks using recursive conformable surface modeling and dynamic terminations, including unconformity, onlap, and offlap relationships.</li>
                            <li>Calculate hydrocarbon reserves, plan and monitor new wells, and continuously update your reservoir interpretation using real time workflow automation tools.</li>
                            <li>Generate horizon, isochore, fault, and zone average maps using fast 3D minimum curvature and search radius mapping algorithms.</li>
                        </ul>
                        <br>
                        <h3 class="text-center"><img class="img-fluid" style="max-height: 500px" src="/images/software/seisware_gl/dos.png" alt=""></h3>
                    </div>
                    <div class="col-lg-6 about-info">
                        <h4>Seismic data Integration</h4>
                        <br>
                        <h3 class="text-center"><img class="img-fluid" style="max-height: 500px" src="/images/software/seisware_gl/tres.png" alt=""></h3>
                        <br>
                        <p>Geology by SeisWare (GL) creates a comprehensive geological model by integrating seismic data and interpretation with cross section and 3D displays.</p>
                        <ul class="ul-lista">
                            <li>Perform stratigraphic and geomorphological slicing of 3D seismic volumes.</li>
                            <li>Display seismic slices on the basemap and interactively change the display with respect to time, depth, or zone transitions.</li>
                            <li>Create net-to-gross maps based on well log cut-offs and calculated log curves</li>
                            <li>Interpret wells as they are being drilled to integrate real time results immediately into the geosteering interpretation.</li>
                            <li>Well tools to generate detailed well displays, integrating large amounts of data, and quickly incorporate real-time well data into your interpretation.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //single -->

@endsection