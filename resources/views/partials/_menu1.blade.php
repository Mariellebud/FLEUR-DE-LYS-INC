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
            <a href="https://www.linkedin.com/in/fleur-de-lys-inc-10993624a/"><i class="fa fa-linkedin"></i></a>
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