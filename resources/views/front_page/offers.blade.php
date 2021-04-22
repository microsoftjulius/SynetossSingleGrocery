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
            <div class="all-product-grid mb-14">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="default-title mt-4">
                                <h2>Offers</h2>
                                <img src="{{ asset('front_pages/images/line.svg')}}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <a href="#" class="offers-item">
                                <div class="offer-img">
                                    <img src="{{ asset('front_pages/images/offers/img-1.jpg')}}" alt="">
                                </div>
                                <div class="offers-text">
                                    <h4>📢 Offer Title Here!</h4>
                                    <p>Up to 25% off on Vegetables & Fruits & much more</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="#" class="offers-item">
                                <div class="offer-img">
                                    <img src="{{ asset('front_pages/images/offers/img-2.jpg')}}" alt="">
                                </div>
                                <div class="offers-text">
                                    <h4>📢 Offer Title Here!</h4>
                                    <p>Up to 25% off on Grocery & Staples & much more</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="#" class="offers-item">
                                <div class="offer-img">
                                    <img src="{{ asset('front_pages/images/offers/img-3.jpg')}}" alt="">
                                </div>
                                <div class="offers-text">
                                    <h4>📢 Offer Title Here!</h4>
                                    <p>Up to 75% off on Personal Care & much more</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('front_layout.footer')
        @include('front_layout.javascript')
    </body>
</html>

