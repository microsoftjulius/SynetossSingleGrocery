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
        <div class="icon-bar">
            <a href="#" class="facebook" title="Share"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="twitter" title="Share"><i class="fab fa-twitter"></i></a>
            <a href="#" class="google" title="Share"><i class="fab fa-google"></i></a>
            <a href="#" class="linkedin" title="Share"><i class="fab fa-linkedin-in"></i></a>
            <a href="#" class="whatsapp" title="Share"><i class="fab fa-whatsapp"></i></a>
        </div>
        @include('front_layout.select_category')
        @include('front_layout.search_modal')
        @include('front_layout.cart-toggle')
        <header class="header clearfix">
            @include('front_layout.topheader')
            @include('front_layout.menu')
        </header>
        <div class="wrapper">
            <div class="gambo-Breadcrumb">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                                    <li class="breadcrumb-item"><a href="/check-products">Vegetables & Fruits</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Product Title</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="all-product-grid">
                <div class="container">
                    @foreach ($item_details as $details)
                        <div class="row">
                            <div class="col-lg-12">
                                @include('layouts.admin-partials.messages')
                                <div class="product-dt-view">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4">
                                            <div id="sync1" class="owl-carousel owl-theme">
                                                <div class="item">
                                                    <img src="{{asset('images/images/product/big-1.jpg')}}" alt="">
                                                </div>
                                                <div class="item">
                                                    <img src="{{asset('front_pages/images/product/big-2.jpg')}}" alt="">
                                                </div>
                                                <div class="item">
                                                    <img src="{{asset('front_pages/images/product/big-3.jpg')}}" alt="">
                                                </div>
                                                <div class="item">
                                                    <img src="{{asset('front_pages/images/product/big-4.jpg')}}" alt="">
                                                </div>
                                            </div>
                                            <div id="sync2" class="owl-carousel owl-theme">
                                                <div class="item">
                                                    <img src="{{asset('images/item/'.$details->image)}}" alt="">
                                                </div>
                                                <div class="item">
                                                    <img src="{{asset('images/item/'.$details->image)}}" alt="">
                                                </div>
                                                <div class="item">
                                                    <img src="{{asset('images/item/'.$details->image)}}" alt="">
                                                </div>
                                                <div class="item">
                                                    <img src="{{asset('images/item/'.$details->image)}}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8">
                                            <div class="product-dt-right">
                                                <h2>{{ $details->item_name }}</h2>
                                                <div class="no-stock">
                                                    <p class="pd-no">Brand.<span>{{ $details->brand }}</span></p>
                                                    <p class="stock-qty">Availability<span style="text-transform: capitalize">({{ $details->item_status }})</span></p>
                                                </div>
                                                <div class="product-radio">
                                                    <ul class="product-now">
                                                        <li>
                                                            <input type="radio" id="p1" name="product1">
                                                            <label for="p1">{{ $details->weight }}</label>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <p class="pp-descp">
                                                    {{ $details->item_description }}
                                                </p>
                                                <div class="product-group-dt">
                                                    <ul>
                                                        <li>
                                                            <div class="main-price color-discount">Discount Price<span>${{ number_format($details->price) }}</span></div>
                                                        </li>
                                                        <li>
                                                            <div class="main-price mrp-price">MRP Price<span>${{ number_format($details->price * 1.32) }}</span></div>
                                                        </li>
                                                    </ul>
                                                    <ul class="gty-wish-share">
                                                        <li>
                                                            <div class="qty-product">
                                                                <div class="quantity buttons_added">
                                                                    <input type="button" value="-" class="minus minus-btn">
                                                                    <input type="number" step="1" name="quantity" value="1" class="input-text qty text">
                                                                    <input type="button" value="+" class="plus plus-btn">
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li><span class="like-icon save-icon" title="wishlist"></span></li>
                                                    </ul>
                                                    <ul class="ordr-crt-share">
                                                        <li>
                                                            <a href="/cart/add-item-to-cart/{{ $details->item_id }}">
                                                                <button class="add-cart-btn hover-btn"><i class="uil uil-shopping-cart-alt"></i>Add to Cart</button>
                                                            </a>
                                                        </li>

                                                        <li><button class="order-btn hover-btn">Order Now</button></li>
                                                    </ul>
                                                </div>
                                                <div class="pdp-details">
                                                    <ul>
                                                        <li>
                                                            <div class="pdp-group-dt">
                                                                <div class="pdp-icon"><i class="uil uil-usd-circle"></i></div>
                                                                <div class="pdp-text-dt">
                                                                    <span>Lowest Price Guaranteed</span>
                                                                    <p>Get difference refunded if you find it cheaper anywhere else.</p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="pdp-group-dt">
                                                                <div class="pdp-icon"><i class="uil uil-cloud-redo"></i></div>
                                                                <div class="pdp-text-dt">
                                                                    <span>Easy Returns & Refunds</span>
                                                                    <p>Return products at doorstep and get refund in seconds.</p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="row">
                        <div class="col-lg-4 col-md-12">
                            <div class="pdpt-bg">
                                <div class="pdpt-title">
                                    <h4>More Like This</h4>
                                </div>
                                <div class="pdpt-body scrollstyle_4">
                                    @foreach ($related_products as $item)
                                        <div class="cart-item border_radius">
                                            <a href="/check-product/{{ base64_encode($item->id * $id_multiplier) }}/{{ $random_string }}" class="cart-product-img">
                                                <img src="{{asset('images/item/'.$item->image)}}" alt="">
                                                <div class="offer-badge">4% OFF</div>
                                            </a>
                                            <div class="cart-text">
                                                <h4>{{ $item->item_name }}</h4>
                                                <div class="cart-radio">
                                                    <ul class="kggrm-now">
                                                        <li>
                                                            <input type="radio" id="k1" name="cart1">
                                                            <label for="k1">{{ $item->weight }}</label>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="qty-group">
                                                    <div class="quantity buttons_added">
                                                        <input type="button" value="-" class="minus minus-btn">
                                                        <input type="number" step="1" name="quantity" value="1" class="input-text qty text">
                                                        <input type="button" value="+" class="plus plus-btn">
                                                    </div>
                                                    <div class="cart-item-price">${{ ($item->price - ($item->price * $item->discount)) }} <span>${{ $item->price}}</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-12">
                            <div class="pdpt-bg">
                                <div class="pdpt-title">
                                    <h4>Product Details</h4>
                                </div>
                                <div class="pdpt-body scrollstyle_4">
                                    <div class="pdct-dts-1">
                                        <div class="pdct-dt-step">
                                            <h4>Description</h4>
                                            <p>
                                                {{ $item->item_description }}
                                            </p>
                                        </div>
                                        <div class="pdct-dt-step">
                                            <h4>Benefits</h4>
                                            <div class="product_attr">
                                                {{ $item->benefits }}
                                            </div>
                                        </div>
                                        {{-- <div class="pdct-dt-step">
                                            <h4>How to Use</h4>
                                            <div class="product_attr">
                                                The peeled, orange segments can be added to the daily fruit bowl, and its juice is a refreshing drink.
                                            </div>
                                        </div>
                                        <div class="pdct-dt-step">
                                            <h4>Seller</h4>
                                            <div class="product_attr">
                                                Gambolthemes Pvt Ltd, Sks Nagar, Near Mbd Mall, Ludhana, 141001
                                            </div>
                                        </div> --}}
                                        <div class="pdct-dt-step">
                                            <h4>Disclaimer</h4>
                                            <p>
                                                {{ $item->disclaimer }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section145">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-title-tt">
                                <div class="main-title-left">
                                    <span>For You</span>
                                    <h2>Top Featured Products</h2>
                                </div>
                                <a href="#" class="see-more-btn">See All</a>
                            </div>
                        </div>
                        @include('front_layout.featured_items')
                    </div>
                </div>
            </div>
        </div>
        @include('front_layout.footer')
        <script data-cfasync="false" src="{{ asset('front_pages/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script><script src="{{ asset('front_pages/js/jquery-3.3.1.min.js')}}"></script>
        <script src="{{ asset('front_pages/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ asset('front_pages/vendor/OwlCarousel/owl.carousel.js')}}"></script>
        <script src="{{ asset('front_pages/vendor/semantic/semantic.min.js')}}"></script>
        <script src="{{ asset('front_pages/js/jquery.countdown.min.js')}}"></script>
        <script src="{{ asset('front_pages/js/custom.js')}}"></script>
        <script src="{{ asset('front_pages/js/product.thumbnail.slider.js')}}"></script>
        <script src="{{ asset('front_pages/js/offset_overlay.js')}}"></script>
        <script src="{{ asset('front_pages/js/night-mode.js')}}"></script>
    </body>
</html>

