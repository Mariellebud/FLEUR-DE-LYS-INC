<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FDL MARKET</title>
    @livewireStyles()

    <link href="{{ url('home/assets/img/fdl1.png')}}" rel="icon">
  <link href="{{ url('home/assets/img/fdl1.png')}}" rel="apple-touch-icon">


    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{url('shop/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('shop/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('shop/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('shop/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('shop/css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('shop/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('shop/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('shop/css/style.css')}}" type="text/css">
   

</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="{{ url('admin/assets/images/logo/fdla.png')}}" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                @php
                    $cart_array=cartArray();
                    @endphp
                <li><a href="{{url('cart')}}"><i class="fa fa-shopping-bag"></i> <span><?= count($cart_array)?></span></a></li>
            </ul>
            <div class="header__cart__price">item: <span>{{Cart :: getTotal()}} FCFA</span></div>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                <img src="{{url('shop/img/language.png')}}" alt="">
                <div>Français</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="#">French</a></li>
                    <li><a href="#">English</a></li>
                </ul>
            </div>
            <div class="header__top__right__language">

            <div class="header__top__right__auth">
            @if (Route::has('register'))

            @if (Route::has('login'))
                     @auth
                         @if(Auth :: user()->role_as === '1')
             <div><a href="{{ route('login') }}"><i class="fa fa-user"></i> {{Auth:: user()->name}}</a></div>
                <span class="arrow_carrot-down"></span>
               
                <ul>
                   <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Deconnexion</a></li>
                </ul>
                    <form id="logout-form" method="POST" action="{{route('logout')}}">
                        @csrf
                    </form>
                            @else
                    <div><a href="{{ route('login') }}"><i class="fa fa-user"></i> {{Auth:: user()->name}}</a></div>
                         <span class="arrow_carrot-down"></span>
                            <ul>
                                <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Deconnexion</a></li>
                            </ul>
                            <form id="logout-form" method="POST" action="{{route('logout')}}">
                                @csrf
                             </form>
                    </div>
                         @endif   
                             @else
                         <div><a href="{{ route('login') }}"><i class="fa fa-user"></i> Login</a></div>

            </div>
            @endif   
                        @endif
                        @endif

            </div>
                        
            
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="{{url('ecommerce')}}">Accueil</a></li>
                
                <li><a href="#">Pages</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="{{url('cart')}}">Panier d'achat</a></li>
                        <li><a href="{{url('checkout')}}">Paiement</a></li>
                    </ul>
                </li>
                <li><a href="{{url('envoi')}}">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
        <a href="https://www.facebook.com/fdlGlobal"><i class="fa fa-facebook"></i></a>
                               <!-- <a href="#"><i class="fa fa-twitter"></i></a>-->
                                <a href="https://www.linkedin.com/in/fleur-de-lys-inc-10993624a/"><i class="fa fa-linkedin"></i></a>
                               <!-- <a href="#"><i class="fa fa-pinterest-p"></i></a>-->
                               <a href="http://instagram.com/fleurdelys.inc?utm_source=qr"><i class="fa fa-instagram"></i></a>

                                <a href=" https://wa.me/message/U6DUTTBGDY2AK1"><i class="fa fa-whatsapp"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <!--<ul>
                <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
                <li>Free Shipping for all Order of $99</li>
            </ul>-->
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                           <!-- <ul>
                                <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
                                <li>Free Shipping for all Order of $99</li>
                            </ul>-->
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                            <a href="http://instagram.com/fleurdelys.inc?utm_source=qr"><i class="fa fa-instagram"></i></a>

                            <a href="https://www.facebook.com/fdlGlobal"><i class="fa fa-facebook"></i></a>
                               <!-- <a href="#"><i class="fa fa-twitter"></i></a>-->
                                <a href="https://www.linkedin.com/in/fleur-de-lys-inc-10993624a/"><i class="fa fa-linkedin"></i></a>
                               <!-- <a href="#"><i class="fa fa-pinterest-p"></i></a>-->
                                <a href=" https://wa.me/message/U6DUTTBGDY2AK1"><i class="fa fa-whatsapp"></i></a>
                            </div>
                            <div class="header__top__right__language">
                                <img src="{{url('shop/img/language.png')}}" alt="">
                                <div>English</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="#">Spanis</a></li>
                                    <li><a href="#">English</a></li>
                                </ul>
                            </div>

                    <div class="header__top__right__language">
                        <div class="header__top__right__auth">
                        @if (Route::has('register'))

                        @if (Route::has('login'))
                                     @auth
                                     @if(Auth :: user()->role_as == '1')
                                     <div><a href="{{ route('login') }}"><i class="fa fa-user"></i> {{Auth:: user()->name}}</a></div>
                                         <span class="arrow_carrot-down"></span>
                                          <ul>
                                              <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Deconnexion</a></li>
                                         </ul>
                                            <form id="logout-form" method="POST" action="{{route('logout')}}">
                                              @csrf
                                             </form>
                                        </div>
                                        @else
                                        <div><a href="{{ route('login') }}"><i class="fa fa-user"></i> {{Auth:: user()->name}}</a></div>
                                         <span class="arrow_carrot-down"></span>
                                          <ul>
                                              <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Deconnexion</a></li>
                                         </ul>
                                            <form id="logout-form" method="POST" action="{{route('logout')}}">
                                              @csrf
                                             </form>
                                        </div>
                                        @endif   
                                     @else
                                <div><a href="{{ route('login') }}"><i class="fa fa-user"></i> Login</a></div>
                                
                            </div>
                        </div>
                        @endif   
                        @endif
                        @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index.html"><img src="{{ url('admin/assets/images/logo/fdla.png')}}" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                    <ul>
                <li class="active"><a href="{{url('ecommerce')}}">Accueil</a></li>
                <li><a href="#">Pages</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="{{url('cart')}}">Panier d'achat</a></li>
                        <li><a href="{{url('checkout')}}">paiement</a></li>
                    </ul>
                </li>
                <li><a href="{{url('envoi')}}">Contact</a></li>
            </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                            @php
                    $cart_array=cartArray();
                    @endphp
                <li><a href="{{url('cart')}}"><i class="fa fa-shopping-bag"></i> <span><?= count($cart_array)?></span></a></li>
            </ul>                        </ul>
            <div class="header__cart__price">Total: <span>{{Cart :: getTotal()}} FCFA</span></div>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <!-- Hero Section Begin -->
    <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Toutes les catégories</span>
                        </div>
                        <ul>
                        @foreach($cat as $cate)

                     <li><a href="{{url('voir_cat/'.$cate->libelle)}}">{{$cate->libelle}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                        <form action="#">
                                <div class="hero__search__categories">
                                    Catégories
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" placeholder="Quelle catégorie voulez vous rechercher">
                                <button type="submit" class="site-btn">RECHERCHER</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                            <h5> +242 06 953 90 23</h5>
                                <span>Fleur de lys</span>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->
    <!-- Hero Section End -->
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{url('shop/img/breadcrumb.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Paiement</h2>
                        <div class="breadcrumb__option">
                            <a href="{{url('ecommerce')}}">Accueil</a>
                            <span>Paiement</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="row">
                <!--<div class="col-lg-12">
                    <h6><span class="icon_tag_alt"></span> Have a coupon? <a href="#">Click here</a> to enter your code
                    </h6>
                </div>-->
            </div>
            <div class="checkout__form">
                <h4> Details de la livraison</h4>
                <form  enctype="multipart/form-data" action="{{url('livrer')}}" method="POST">
                    @csrf
                    <div class="row">
                    @if(\Session :: has('insert'))
                    <div id="" class="alert alert-success">
                      {!!\Session :: get('insert')!!}
                    </div>
                    @endif

                        <div class="col-lg-8 col-md-6">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Nom<span>*</span></p>
                                        <input type="text" name="nom">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Prénom<span>*</span></p>
                                        <input type="text" name="prenom">
                                    </div>
                                </div>
                            </div>
                            <!--<div class="checkout__input">
                                <p>Country<span>*</span></p>
                                <input type="text">
                            </div>-->
                            <div class="checkout__input">
                                <p>Addresse<span>*</span></p>
                                <input type="text" placeholder="Votre addresse" class="checkout__input__add" name="adresse">
                                <!--<input type="text" placeholder="Apartment, suite, unite ect (optinal)">-->
                            </div>
                            <div class="checkout__input">
                                <p>Ville<span>*</span></p>
                                <input type="text" name="ville">
                            </div>
                            <div class="checkout__input">
                                <p>quartier<span>*</span></p>
                                <input type="text" name="quartier">
                            </div>
                            <!--<div class="checkout__input">
                                <p>Country/State<span>*</span></p>
                                <input type="text">
                            </div>
                            <div class="checkout__input">
                                <p>Postcode / ZIP<span>*</span></p>
                                <input type="text">
                            </div>-->
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Téléphone<span>*</span></p>
                                        <input type="text" name="phone">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Email<span>*</span></p>
                                        <input type="text" name="email">
                                    </div>
                                </div>
                            </div>
                            <!--<div class="checkout__input__checkbox">
                                <label for="acc">
                                    Create an account?
                                    <input type="checkbox" id="acc">
                                    <span class="checkmark"></span>
                                </label>
                            </div>-->
                            <p> Entrez les informations pour la livivraison en remplissant le formulaire ci-dessus. Si vous n'êtes pas client, inscrivez vous 
                                SVP en cliquant sur le lien au dessus de la page</p>
                            <!--<div class="checkout__input">
                                <p>Account Password<span>*</span></p>
                                <input type="text" name="mpd">
                            </div>-->
                            <!--<div class="checkout__input__checkbox">
                                <label for="diff-acc">
                                    Ship to a different address?
                                    <input type="checkbox" id="diff-acc">
                                    <span class="checkmark"></span>
                                </label>
                            </div>-->
                            <div class="checkout__input">
                                <p>Note pour votre commande<span>*</span></p>
                                <input type="text"
                                    placeholder="Notez votre commandes, ex: notes spécial pour livraison.">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4>Votre commande</h4>
                                <div class="checkout__order__products">Produits <span>Total</span> </div>
                                <ul>
                                @foreach($cart_array as $cart)

                                    <li>{{$cart['name']}} <strong> x {{$cart['quantity']}}</strong> <span>{{Cart:: get($cart['id'])->getPriceSum()}} FCFA</span></li>
                                    @endforeach

                                    
                                </ul>
                                <div class="checkout__order__subtotal">Subtotal <span>{{Cart:: getTotal()}} FCFA</span></div>
                                <div class="checkout__order__total">Total <span>{{Cart:: getTotal()}} FCFA</span></div>
                                <!--<div class="checkout__input__checkbox">
                                    <label for="acc-or">
                                        Create an account?
                                        <input type="checkbox" id="acc-or">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>-->
                                <!--<p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua.</p>-->
                               <!-- <div class="checkout__input__checkbox">
                                    <label for="payment">
                                    Paypal
                                         <input type="checkbox" id="payment">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="checkout__input__checkbox">
                                    <label for="paypal">
                                        MTN mobile money
                                        <input type="checkbox" id="paypal">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="checkout__input__checkbox">
                                    <label for="paypal">
                                        AIRTEL mobile money
                                        <input type="checkbox" id="paypal">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>-->
                                <button type="submit" class="site-btn">Valider votre commande</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->

   <!-- Footer Section Begin -->
   <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href=""><img src="{{ url('admin/assets/images/logo/fdla.png')}}" alt=""></a>
                        </div>
                        <ul>
                            <li>Addresse: 1370 rue loufou plateaux des 15ans | Brazzaville</li>
                            <li>Téléphone: +242 06 953 90 23</li>
                            <li>Email: fleurdelys.inc@gmail.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>Nos services</h6>
                        <ul>
                         <li> <a href="#">Design graphique</a></li>
                         <li> <a href="#">Education</a></li>
                         <li> <a href="#">Création de boutique</a></li>
                         <li> <a href="#">Marketing</a></li>
                         <li><a href="#">Alimentation</a></li>
                       
                        </ul>
                        <h6>Liens utiles</h6>
                        <ul>
                       
                            <li><a href="#">A propos de nous</a></li>
                             <li> <a href="#">Nos Services</a></li>
                             <li><a href="#">FDL fournisseur</a></li>
                            <li><a href="#">FDL market</a></li>
                         </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>Voulez vous rejoindre notre Newsletter maintenant</h6>
                        <p>Envoyez nous un email par rapport au dernier achat que vous affectuez si vous voulez quelque de spécial.</p>
                        <form action="#">
                            <input type="text" placeholder="Entrer votre mail">
                            <button type="submit" class="site-btn">Subscribe</button>
                        </form>
                        <div class="footer__widget__social">
                             <a href="https://www.facebook.com/fdlGlobal"><i class="fa fa-facebook"></i></a>
                             <a href="http://instagram.com/fleurdelys.inc?utm_source=qr"><i class="fa fa-instagram"></i></a>
                             <a href="https://www.linkedin.com/in/fleur-de-lys-inc-10993624a/"><i class="fa fa-linkedin"></i></a>
                             <a href=" https://wa.me/message/U6DUTTBGDY2AK1"><i class="fa fa-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Fleur de lys inc <i class="fa fa-heart" aria-hidden="true">
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
                        <div class="footer__copyright__payment"><img src="img/payment-item.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->
   <!-- Js Plugins -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{ url('shop/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{url('shop/js/bootstrap.min.js')}}"></script>
    <script src="{{url('shop/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{url('shop/js/jquery-ui.min.js')}}"></script>
    <script src="{{url('shop/js/jquery.slicknav.js')}}"></script>
    <script src="{{url('shop/js/mixitup.min.js')}}"></script>
    <script src="{{url('shop/js/owl.carousel.min.js')}}"></script>
    <script src="{{url('shop/js/main.js')}}"></script>
    <!--<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>-->
    <script>
        var path="{{route('p_search')}}";

        $('input.typehead').typeahead({
            source: function(terms,process){
                return $.get(path,{terms:terms},function(data){
                    return process(data);
                });
            }
        });    /*var availableTags = [];
    $.ajax({
        method:"GET",
        url: "/p_search",
        
        success: function(response){
            //console.log(response);
            startAutoComplete(response)
        }
    });
    function startAutoComplete(availableTags) {*/
       // $( "#search_p" ).on('keyup',function())
      //source: availableTags
    
    
  
  </script>

</body>

</html>