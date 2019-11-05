@extends('layouts.small-header')
@section('title'){{$title}}@endsection
@section('header')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('content')
    <!-- Contact -->
    <section class="about-info py-5 px-lg-5">
        <div class="content-w3ls-inn px-lg-5">
            <div class="container py-md-5 py-3">
                <div class="px-lg-5">
                    <h3 class="tittle-w3ls mb-lg-5 mb-4">Contáctenos</h3>
                    <p class="mt-5 pr-lg-5">
                        Por favor, escribanos si tiene alguna pregunta o solicitud sobre nuestro software y/o servicios.
                        <br> Responderemos a su mensaje en un lapso de 24 horas


                    </p>


                    <div class="contact-hny-form mt-lg-5 mt-3">

                        <form id="contactForm">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="names">Nombre y Apellidos</label>
                                        <input type="text" name="names" id="names" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Correo electrónico</label>
                                        <input type="email" name="email" id="email" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="subject"> Asunto</label>
                                        <input type="text" name="subject" id="subject" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="message">Mensaje</label>
                                        <textarea name="message" id="message" required> </textarea>
                                        <input type="hidden" id="csfr" value="{{csrf_token()}}">
                                    </div>
                                </div>
                                <div class="form-group mx-auto mt-3">
                                    <button type="submit" class="btn btn-default morebtn more black con-submit">Enviar
                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>
                    <!-- <p>A continuación encontrará la ubicación para llegar a nuestra oficina en Bogotá, Colombia.</p>
                    <div class="map-w3pvt mt-5">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d423286.27404345275!2d-118.69191921441556!3d34.02016130939095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2sLos+Angeles%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1522474296007" allowfullscreen=""></iframe>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
    <!-- //Contact -->

    <!-- /news-letter -->
    <!-- <section class="news-letter-w3pvt py-5">
            <div class="container contact-form mx-auto text-left">
                <h3 class="title-w3ls two text-left mb-3">Newsletter </h3>
                <form method="post" action="#" class="w3ls-frm">
                    <div class="row subscribe-sec">
                        <p class="news-para col-lg-3">Start working together?</p>
                        <div class="col-lg-6 con-gd">
                            <input type="email" class="form-control" id="email" placeholder="Your Email here..." name="email" required>

                        </div>
                        <div class="col-lg-3 con-gd">
                            <button type="submit" class="btn more black more">Subscribe</button>
                        </div>

                    </div>

                </form>
            </div>
        </section> -->
    <!-- //news-letter -->
@endsection

@section('scripts')
    <script src="{{mix('js/contact.js')}}"></script>
@endsection