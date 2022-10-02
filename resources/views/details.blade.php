@extends('layouts.commerce-n')

@section('content')
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{url('shop/img/breadcrumb.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>{{$produit->libellep}}</h2>
                        <div class="breadcrumb__option">
                        <a href="{{url('ecommerce')}}">Accueil</a>
                            <a href="">{{$produit->category->libelle}}</a>
                            <span>{{$produit->libellep}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__item">
                            <img class="product__details__pic__item--large"
                                src="{{asset('asset/upload/category/'.$produit->photo)}}" alt="">
                        </div>
                        <div class="product__details__pic__slider owl-carousel">
                            <img data-imgbigurl="img/product/details/product-details-2.jpg"
                                src="img/product/details/thumb-1.jpg" alt="">
                            <img data-imgbigurl="img/product/details/product-details-3.jpg"
                                src="img/product/details/thumb-2.jpg" alt="">
                            <img data-imgbigurl="img/product/details/product-details-5.jpg"
                                src="img/product/details/thumb-3.jpg" alt="">
                            <img data-imgbigurl="img/product/details/product-details-4.jpg"
                                src="img/product/details/thumb-4.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__text">
                        <h3>{{$produit->libellep}}</h3>
                        <div class="product__details__rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <span>(18 reviews)</span>
                        </div>
                        <div class="product__details__price">{{$produit->prix}} FCFA</div>
                        <p>{{$produit->description}} .</p>
                            <form action="{{url('add_to_cart')}}" class="cart" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @if(\Session :: has('insert'))
                    <div id="" class="alert alert-success">
                      {!!\Session :: get('insert')!!}
                    </div>
                    @endif
                        <div class="product__details__quantity">
                            <div class="quantity">
                                <div class="pro-qty">
                                <input type="hidden"  name="id" value="{{$produit->id}}">

                                    <input type="number" value="1" name="quantity" min="1" step="1">
                                </div>
                            </div>
                        </div>
                        <button class="site-btn" type="submit">Ajouter au panier</button>
                        <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a>
                        </form>
                        <ul>
                            <li><b>Categorie</b> <span>{{$produit->category->libelle}}</span></li>
                            <li><b>Livraison</b> <span>03 ou une semaine jour apres la commande. <samp></samp></span></li>
                            <li><b>Partager</b>
                                <div class="share">
                                    <a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a>
                                    <a href="https://www.instagram.com"><i class="fa fa-instagram"></i></a>
                                    <!--<a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>-->
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="product__details__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab"
                                    aria-selected="true">Description</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab"
                                    aria-selected="false">Information</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab"
                                    aria-selected="false">Reviews <span>(1)</span></a>
                            </li>
                        </ul>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Details Section End -->

    <!-- Related Product Section Begin -->
    
    <!-- Related Product Section End -->

    <!-- Footer Section Begin -->
    @endsection
