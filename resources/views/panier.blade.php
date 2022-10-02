
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{url('shop/img/breadcrumb.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Panier d'achat</h2>
                        <div class="breadcrumb__option">
                            <a href="{{url('ecommerce')}}">Accueil</a>
                            <span>Panier d'achat</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Produits</th>
                                    <th>Prix</th>
                                    <th>Quantité</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                        @foreach($cart_array as $cart)
                                    <td class="shoping__cart__item">
                                                @php
                                                    $photo=$cart['attributes'][0];
                                                    $photo=explode('|',$photo);
                                                    $photo=$photo[0];
                                                @endphp
                                        <img src="{{asset('asset/upload/category/'.$photo)}}" alt="" width="150" height="150">
                                        <h5>{{$cart['name']}}</h5>
                                    </td>
                                    <td class="shoping__cart__price">
                                    {{$cart['price']}} FCFA
                                    </td>
                                    <td class="shoping__cart__quantity">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" value="{{$cart['quantity']}}">
                                            </div>
                                        </div>
                                    </td>
                                    
                                    <td class="shoping__cart__item__close">
                                       <a href="{{url('delete/'.$cart['id'])}}"> <span class="icon_close"></span></a>
                                    </td>
                                </tr>
                                @endforeach
                                
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                        <!--<a href="#" class="primary-btn cart-btn">CONTINUE SHOPPING</a>
                        <a href="#" class="primary-btn cart-btn cart-btn-right"><span class="icon_loading"></span>
                            Upadate Cart</a>-->
                    </div>
                </div>
                <!--<div class="col-lg-6">
                    <div class="shoping__continue">
                        <div class="shoping__discount">
                            <h5>Discount Codes</h5>
                            <form action="#">
                                <input type="text" placeholder="Enter your coupon code">
                                <button type="submit" class="site-btn">APPLY COUPON</button>
                            </form>
                        </div>
                    </div>
                </div>-->
                <div class="col-lg-6">
                    <div class="shoping__checkout">
                        <h5>Total du panier</h5>
                        <ul>
                            <li>Total <span>{{Cart :: getTotal()}} FCFA</span></li>
                        </ul>
                        <a href="{{ url('checkout')}}" class="primary-btn">Proceder au paiement</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shoping Cart Section End -->

    <!-- Footer Section Begin -->
