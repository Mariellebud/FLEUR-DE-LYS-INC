@extends('layouts.commerce-n')

@section('content')
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{('shop/img/breadcrumb.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Contactez nous</h2>
                        <div class="breadcrumb__option">
                            <a href="{{url('ecommerce')}}">Accueil</a>
                            <span>Contactez nous</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_phone"></span>
                        <h4>Télephone</h4>
                        <p>+242 06 953 90 23</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_pin_alt"></span>
                        <h4>Adresse</h4>
                        <p>1370 rue loufou plateau des 15 ans</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_clock_alt"></span>
                        <h4>Ouverture</h4>
                        <p>09:00 à 18:00 pm</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_mail_alt"></span>
                        <h4>Email</h4>
                        <p>fleurdelys.inc@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Map Begin -->
    <div class="map">
        <iframe
            src="https://www.google.com/maps/@-4.2616124,15.2600237,19z"
            height="500" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        <div class="map-inside">
            <i class="icon_pin"></i>
            <div class="inside-widget">
                <h4>BRAZZAVILLE</h4>
                <ul>
                    <li>Téléphone: +242 06 953 90 23/li>
                    <li>Adresse: 1370 rue loufou plateau des 15 ans</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Map End -->

    <!-- Contact Form Begin -->
    <div class="contact-form spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact__form__title">
                        <h2>Laisser un Message</h2>
                    </div>
                </div>
            </div>
                <span class="invalid-feedback" role="alert">
                     <strong></strong>
                                    </span>
                                    
            <form action="{{url('send')}}" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="row">
                    @if(\Session :: has('insert'))
                    <div id="" class="alert alert-success">
                      {!!\Session :: get('insert')!!}
                    </div>
                    @endif

                    @if(\Session :: has('error'))
                    <div id="" class="alert alert-danger">
                      {!!\Session :: get('error')!!}
                    </div>
                    @endif
                    <div class="col-lg-6 col-md-6">
                        <input name="name" type="text" placeholder="Votre nom">
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <input name="email" type="email" placeholder="Votre Email">
                    </div>
                    <div class="col-lg-12 text-center">
                        <textarea name="message" placeholder="Votre message"></textarea>
                        <button type="submit" class="site-btn">ENVOYEZ LE MESSAGE</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Contact Form End -->

    @endsection