@extends('layouts.small-header')
@section('title'){{$title}}@endsection
@section('content')
<!-- Contact -->
<section class="about-info p-lg-5 p-3">
    <div class="content-w3ls-inn px-lg-5">
        <div class="container py-md-5 py-3">
            <div class="content-sing-w3pvt px-lg-5">


                <a href="http://www.globeclaritas.com/" target="_blank">
                    <h3 class="text-center"><img class="img-fluid" style="max-height: 150px" src="/images/software/index/globe-claritas_logo.png" alt=""></h3>
                </a>

                <p>GLOBE ClaritasTM is the ideal platform to improve the technological capabilities of seismic processing in your company, by adapting itself to your needs and your day by day challenges presented. GLOBE ClaritasTM has been designed as an application of geophysical development to strengthen innovation and growth, without the need to have a complex and expensive database.</p>


                <hr>
                <div class="row about-w3pvt-top mt-2">
                    <div class="col-lg-6 about-info">
                        <h4 class="title-hny mb-3">Seg-Y Analyzer</h4>

                        <p>Has been designed mainly to allow your company to store its seismic data in magnetic mediums. Seg-Y Analyzer is an application useful for finding lost information in the Seg file header, when Seg-Y format seismic data has not been properly stored. Similarly, Seg-Y Analyzer has an additional functionality, which lets you create and format files with the proper specifications for your clients and your own processing projects.</p>
                        <p class="text-center"><img class="img-fluid" style="max-height: 400px" src="/images/software/globe-claritas/sya.png" alt=""></p>

                    </div>
                    <div class="col-lg-6 about-info">
                        <h4 class="title-hny mb-3">REFSTAT</h4>
                        <img class="img-fluid mb-2" src="/images/software/globe-claritas/refstat.png" alt="">
                        <p>REFSTAT of Globe ClaritasTM provides solutions to make static refraction corrections for 2D and 3D seismic data. By contrasting the traced rays travel times in the model, with the first breaks picked. RESTAT helps you obtain excellent results when working with information from highly steep topographies and curve lines, 3D visualizations of travel times and static corrections for quality control, limits for offset range needed, input/output text format for compatibility purpose with other applications, graphics modifications in 2D and 3D data for erroneous options, and a chance to include additional information into the model, among other functionalities.</p>
                    </div>
                </div>
                <div class="row about-w3pvt-top mt-2">
                    <div class="col-lg-6 about-info">
                        <h4 class="title-hny mb-3">Claritas Velocity Analysis (CVA)</h4>
                        <p>As the name suggests, CVA is the velocities analysis application of Globe ClaritasTM, to create velocity-fields easier and faster. </p>

                        <img class="img-fluid mb-2" style="max-height: 450px;" src="/images/software/globe-claritas/tres.png" alt="">


                        <p>Several analysis windows can be opened at the same time and are all linked; updating in real-time as edits are made. When processing large volumes of seismic data, generating velocity fields can be repetitive and time consuming, but it is also essential for achieving a superior result. CVA performs an auto-interpolation from the surrounding field, meaning picks at your next position are practically made for you. You don’t lose time re-picking the trends but instead simply refine the velocities.</p>
                    </div>
                    <div class="col-lg-6 about-info">
                        <h4 class="title-hny mb-3">XVIEW: Claritas Seismic Viewer</h4>
                        <p>XVIEW is the GLOBE ClaritasTM seismic display tool that helps you make the right processing decisions faster by allowing interactive QC, analysis and comparison of datasets. Every aspect of XVIEW is aimed at saving you time and optimizing your quality control routines.</p>

                        <img class="img-fluid mb-2" style="max-height: 400px;" src="/images/software/globe-claritas/csv.png" alt="">

                        <p>
                            <ul class="ul-lista">
                                <li>Interactive analysis on seismic data displays.</li>
                                <li>Overlaid and animated repeat panels to highlight processing changes.
                                </li>
                                <li>On the fly application of basic processes, including scaling filters and LMO.
                                </li>
                                <li>Linear, hyperbolic and parabolic rulers for velocity measurement and QC.
                                </li>
                                <li>Graphical plotting of trace headers over seismic data.</li>
                            </ul>
                        </p>
                    </div>
                </div>
                <h3 class="title-hny my-2">Job Control System (JCS)</h3>
                <p>Job Control System (JCS) is your greatest ally when it comes to productivity. It puts you in complete control over your processing flow and provides the effectiveness of a database, without needing one. JCS is powered by a spreadsheet of parameters that ensures critical information is easily modified. These can be manually entered, reformatted from other files, or updated from processing flows. As a result, you have the power at your fingertips for running large-scale multiline land or marine projects.</p>
                <div class="table-responsive-md">
                    <table class="table">
                        <thead>
                            <tr>
                                <th colspan="1">License Types</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>UltraLite</td>
                                <td>UltraLite
                                </td>
                            </tr>
                            <tr>
                                <td>Lite</td>
                                <td>Single-User, designed for quality control and 2D marine/land seismic processing. Includes CJS, but not parallel processing.
                                </td>
                            </tr>
                            <tr>
                                <td>Workstation +</td>
                                <td>Single-User. Designed for small scale seismic processing 2D land projects, small 3D land volumes and 2D marine projects. Allows you to run multiple applications and workflows simultaneously. Parallel Processing capabilities. 8 Cores.</td>
                            </tr>
                            <tr>
                                <td>WorkstationPro+</td>
                                <td>Single-User. Designed for mid-scale processing projects. Allows you to run multiple applications and workflows simultaneously. Parallel Processing capabilities. 64 Cores.</td>
                            </tr>
                            <tr>
                                <td>Cluster</td>
                                <td>
                                    Single-User. Designed for Large-scale processing projects like 2D/3D projects with high specification requirements of CPU and large information volumes. Allows you to run multiple applications and workflows simultaneously. Parallel Processing capabilities. 512 Cores.</td>
                            </tr>
                            <tr>
                                <td>Enterprise</td>
                                <td>An Enterprise license allows for up to six (6) users to work with GLOBE Claritas™ at a single site. Remote interactive use is allowed, only if the user’s usual place of work is the site. Multiple applications and job flows may be run, utilizing a screen (or set of screens) per user. Parallel processing capabilities are enabled and can be utilized on 1024 cores.</td>
                            </tr>
                            <tr>
                                <td>Academic</td>
                                <td>The Academic license is heavily discounted and is targeted at not-for-profit Research and Academic Institutions. It may not be used for commercial processing contracts, paid consultancy, or commercial training courses without express permission. It provides for up to twenty (20) users, and an unlimited number of CPUs/cores at a single site.
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //single -->

@endsection