<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, shrink-to-fit=9">
        <meta name="description" content="Gambolthemes">
        <meta name="author" content="Gambolthemes">
        @include('front_layout.css')
    </head>
    <body>
        @include('front_layout.select_category')
        @include('front_layout.search_modal')
        @include('front_layout.cart-toggle')
        <header class="header clearfix">
            @include('front_layout.topheader')
            @include('front_layout.menu')
            </div>
            </div>
        </header>
        <div class="wrapper">
            <div class="gambo-Breadcrumb">
                <div class="container">
                    @include('front_layout.breadcrumb')
                </div>
            </div>
            <div class="dashboard-group">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="user-dt">
                                <div class="user-img">
                                    <img src="{{ asset('front_pages/images/avatar/img-5.jpg')}}" alt="">
                                    <div class="img-add">
                                        <input type="file" id="file">
                                        <label for="file"><i class="uil uil-camera-plus"></i></label>
                                    </div>
                                </div>
                                <h4>Johe Doe</h4>
                                <p>+91999999999<a href="#"><i class="uil uil-edit"></i></a></p>
                                <div class="earn-points"><img src="{{ asset('front_pages/images/Dollar.svg')}}" alt="">Points : <span>20</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-4">
                            @include('front_layout.wishlist-sidebar')
                        </div>
                        <div class="col-lg-9 col-md-8">
                            <div class="dashboard-right">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="main-title-tab">
                                            <h4><i class="uil uil-heart"></i>Shopping Wishlist</h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="pdpt-bg">
                                            <div class="wishlist-body-dtt">
                                                <div class="cart-item">
                                                    <div class="cart-product-img">
                                                        <img src="{{ asset('front_pages/images/product/img-11.jpg')}}" alt="">
                                                        <div class="offer-badge">4% OFF</div>
                                                    </div>
                                                    <div class="cart-text">
                                                        <h4>Product Title Here</h4>
                                                        <div class="cart-item-price">$15 <span>$18</span></div>
                                                        <button type="button" class="cart-close-btn"><i class="uil uil-trash-alt"></i></button>
                                                    </div>
                                                </div>
                                                <div class="cart-item">
                                                    <div class="cart-product-img">
                                                        <img src="{{ asset('front_pages/images/product/img-2.jpg')}}" alt="">
                                                        <div class="offer-badge">1% OFF</div>
                                                    </div>
                                                    <div class="cart-text">
                                                        <h4>Product Title Here</h4>
                                                        <div class="cart-item-price">$9.9 <span>$10</span></div>
                                                        <button type="button" class="cart-close-btn"><i class="uil uil-trash-alt"></i></button>
                                                    </div>
                                                </div>
                                                <div class="cart-item">
                                                    <div class="cart-product-img">
                                                        <img src="{{ asset('front_pages/images/product/img-14.jpg')}}" alt="">
                                                    </div>
                                                    <div class="cart-text">
                                                        <h4>Product Title Here</h4>
                                                        <div class="cart-item-price">$12</div>
                                                        <button type="button" class="cart-close-btn"><i class="uil uil-trash-alt"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('front_layout.footer')
        @include('front_layout.javascript')
    </body>
</html>

