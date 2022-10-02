<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FDL MARKET</title>
    
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
    @livewireStyles
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
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
                <li><a href="./contact.html">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
        <a href="https://www.facebook.com/fdlGlobal"><i class="fa fa-facebook"></i></a>
                               <!-- <a href="#"><i class="fa fa-twitter"></i></a>-->
                                <a href="https://www.linkedin.com/in/fleur-de-lys-inc-10993624a/"><i class="fa fa-linkedin"></i></a>
                               <!-- <a href="#"><i class="fa fa-pinterest-p"></i></a>-->
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
                <li><a href="{{url('contact')}}">Contact</a></li>
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
                        @foreach($cate as $cat)

                        <li><a href="{{url('voir_cat/'.$cat->libelle)}}">{{$cat->libelle}}</a></li>
                             @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                <div class="hero__search">
                        <div class="hero__search__form">
                        <form action="">
                                <div class="hero__search__categories">
                                    Catégories
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="search" placeholder="Quelle catégorie voulez vous rechercher" value="">
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

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{url('shop/img/breadcrumb.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>categorie</h2>
                        <div class="breadcrumb__option">
                        <a href="{{url('ecommerce')}}">Accueil</a>
                            <span>Categorie</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Blog Section Begin -->
    <section class="blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5">
                    <div class="blog__sidebar">
                        <div class="blog__sidebar__search">
                            <form action="#">
                                <input type="search" value="" placeholder="Search...">
                                <button type="submit"><span class="icon_search"></span></button>
                            </form>
                        </div>
                        <div class="blog__sidebar__item">
                            <h4>Categories</h4>
                            <ul>
                            @foreach($cate as $cat)

                                    <li><a href="{{url('voir_cat/'.$cat->libelle)}}">{{$cat->libelle}}</a></li>
                             @endforeach
                            </ul>
                        </div>
                        <!--<div class="blog__sidebar__item">
                            <h4>Recent News</h4>
                            <div class="blog__sidebar__recent">
                                    

                                <a href="#" class="blog__sidebar__recent__item">
                                    <div class="blog__sidebar__recent__item__pic">
                                        <img src="" alt="">
                                    </div>
                                    <div class="blog__sidebar__recent__item__text">
                                        <h6>09 Kinds Of Vegetables<br /> Protect The Liver</h6>
                                        <span>MAR 05, 2019</span>
                                    </div>
                                </a>
                                <a href="#" class="blog__sidebar__recent__item">
                                    <div class="blog__sidebar__recent__item__pic">
                                        <img src="img/blog/sidebar/sr-2.jpg" alt="">
                                    </div>
                                    <div class="blog__sidebar__recent__item__text">
                                        <h6>Tips You To Balance<br /> Nutrition Meal Day</h6>
                                        <span>MAR 05, 2019</span>
                                    </div>
                                </a>
                                <a href="#" class="blog__sidebar__recent__item">
                                    <div class="blog__sidebar__recent__item__pic">
                                        <img src="img/blog/sidebar/sr-3.jpg" alt="">
                                    </div>
                                    <div class="blog__sidebar__recent__item__text">
                                        <h6>4 Principles Help You Lose <br />Weight With Vegetables</h6>
                                        <span>MAR 05, 2019</span>
                                    </div>
                                </a>
                            </div>
                        </div>-->
                        <!--<div class="blog__sidebar__item">
                            <h4>Search By</h4>
                            <div class="blog__sidebar__item__tags">
                                <a href="#">Apple</a>
                                <a href="#">Beauty</a>
                                <a href="#">Vegetables</a>
                                <a href="#">Fruit</a>
                                <a href="#">Healthy Food</a>
                                <a href="#">Lifestyle</a>
                            </div>
                        </div>-->
                    </div>
                </div>
                <div class="col-lg-8 col-md-7">
                    <div class="row">
                        @foreach($produit as $af)
                        <div class="col-lg-6 col-md-6 col-sm-6">
                                     
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img src="{{asset('asset/upload/category/'.$af->photo)}}" alt="">
                                </div>
                                <div class="blog__item__text">
                                    <!--<ul>
                                        <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                        <li><i class="fa fa-comment-o"></i> 5</li>
                                    </ul>-->
                                    <h5><a href="{{url('voir_cat/'.$cat->libelle.'/'.$af->libellep)}}">{{$af->libellep}}</a></h5>
                                    
                                    <a href="{{url('voir_cat/'.$cat->libelle.'/'.$af->libellep)}}" class="blog__btn">Detail de l'article <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                       
                        
                        
                        
                        
                        <!--<div class="col-lg-12">
                            <div class="product__pagination blog__pagination">
                                <a href="#">1</a>
                                <a href="#">2</a>
                                <a href="#">3</a>
                                <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

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
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
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
    <script src="{{ url('shop/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{url('shop/js/bootstrap.min.js')}}"></script>
    <script src="{{url('shop/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{url('shop/js/jquery-ui.min.js')}}"></script>
    <script src="{{url('shop/js/jquery.slicknav.js')}}"></script>
    <script src="{{url('shop/js/mixitup.min.js')}}"></script>
    <script src="{{url('shop/js/owl.carousel.min.js')}}"></script>
    <script src="{{url('shop/js/main.js')}}"></script>



</body>

</html>