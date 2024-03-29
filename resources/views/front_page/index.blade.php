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
        </header>
        <div class="wrapper">
            <div class="main-banner-slider">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            @include('layouts.admin-partials.messages')
                            <div class="owl-carousel offers-banner owl-theme">
                                <div class="item">
                                    <div class="offer-item">
                                        <div class="offer-item-img">
                                            <div class="gambo-overlay"></div>
                                            <img src="{{asset('front_pages/images/banners/offer-1.jpg')}}" alt="">
                                        </div>
                                        <div class="offer-text-dt">
                                            <div class="offer-top-text-banner">
                                                <p>6% Off</p>
                                                <div class="top-text-1">Buy More & Save More</div>
                                                <span>Fresh Vegetables</span>
                                            </div>
                                            <a href="#" class="Offer-shop-btn hover-btn">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="offer-item">
                                        <div class="offer-item-img">
                                            <div class="gambo-overlay"></div>
                                            <img src="{{asset('front_pages/images/banners/offer-2.jpg')}}" alt="">
                                        </div>
                                        <div class="offer-text-dt">
                                            <div class="offer-top-text-banner">
                                                <p>5% Off</p>
                                                <div class="top-text-1">Buy More & Save More</div>
                                                <span>Fresh Fruits</span>
                                            </div>
                                            <a href="#" class="Offer-shop-btn hover-btn">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="offer-item">
                                        <div class="offer-item-img">
                                            <div class="gambo-overlay"></div>
                                            <img src="{{asset('front_pages/images/banners/offer-3.jpg')}}" alt="">
                                        </div>
                                        <div class="offer-text-dt">
                                            <div class="offer-top-text-banner">
                                                <p>3% Off</p>
                                                <div class="top-text-1">Hot Deals on New Items</div>
                                                <span>Daily Essentials Eggs & Dairy</span>
                                            </div>
                                            <a href="#" class="Offer-shop-btn hover-btn">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="offer-item">
                                        <div class="offer-item-img">
                                            <div class="gambo-overlay"></div>
                                            <img src="{{asset('front_pages/images/banners/offer-4.jpg')}}" alt="">
                                        </div>
                                        <div class="offer-text-dt">
                                            <div class="offer-top-text-banner">
                                                <p>2% Off</p>
                                                <div class="top-text-1">Buy More & Save More</div>
                                                <span>Beverages</span>
                                            </div>
                                            <a href="#" class="Offer-shop-btn hover-btn">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="offer-item">
                                        <div class="offer-item-img">
                                            <div class="gambo-overlay"></div>
                                            <img src="{{asset('front_pages/images/banners/offer-5.jpg')}}" alt="">
                                        </div>
                                        <div class="offer-text-dt">
                                            <div class="offer-top-text-banner">
                                                <p>3% Off</p>
                                                <div class="top-text-1">Buy More & Save More</div>
                                                <span>Nuts & Snacks</span>
                                            </div>
                                            <a href="#" class="Offer-shop-btn hover-btn">Shop Now</a>
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
                                    <span>Shop By</span>
                                    <h2>Categories</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="owl-carousel cate-slider owl-theme">
                                @foreach ($all_categories as $category)
                                    <div class="item" style="height:200px">
                                        <a href="#" class="category-item">
                                            <div class="cate-img">
                                                <img src="{{asset('images/category/'.$category->image)}}" alt="" style="width:100px; height:100px;">
                                            </div>
                                            <h4>{{ $category->category_name }}</h4>
                                        </a>
                                    </div>
                                @endforeach
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
            <div class="section145">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-title-tt">
                                <div class="main-title-left">
                                    <span>Offers</span>
                                    <h2>Best Values</h2>
                                </div>
                            </div>
                        </div>
                        {{-- @foreach ($getbanner as $banner) --}}
                            <div class="col-lg-4 col-md-6">
                                <a href="#" class="best-offer-item offr-none">
                                    <img src="{{asset('front_pages/images/banners/offer-5.jpg')}}" alt="" style="width: 350px; height:300px">
                                    <div class="cmtk_dt">
                                        <div class="product_countdown-timer offer-counter-text" data-countdown="{{ date(now()) }}"></div>
                                    </div>
                                </a>
                            </div>
                        {{-- @endforeach --}}
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
                                        <h2>{{ 'Available Categories' }}</h2>
                                    </div>
                                    <a href="#" class="see-more-btn">See All</a>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="owl-carousel featured-slider owl-theme">
                                    @foreach ($item_per_category as $category_item)
                                        <div class="item" style="height:400px">
                                            <div class="product-item">
                                                <a href="/products-of-category/{{ base64_encode($category_item->category_id * $id_multiplier) }}/{{ $random_string }}" class="product-img">
                                                    <img src="{{asset('images/item/'.$category_item->image)}}" alt="" style="height:200px">
                                                    <div class="product-absolute-options">
                                                        {{-- <span class="offer-badge-1">{{ $category_item->discount * 100 }}% off</span> --}}
                                                        <span class="like-icon" title="wishlist"></span>
                                                    </div>
                                                </a>
                                                <div class="product-text-dt">
                                                    <p>Available<span>(In Stock)</span></p>
                                                    <h4>{{ $category_item->slug }}</h4>
                                                    {{-- <div class="qty-cart">
                                                        <div class="quantity buttons_added">
                                                            <input type="button" value="-" class="minus minus-btn">
                                                            <input type="number" step="1" name="quantity" value="1" class="input-text qty text">
                                                            <input type="button" value="+" class="plus plus-btn">
                                                        </div>
                                                    </div> --}}
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
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
                                    <h2>Added New Products</h2>
                                </div>
                                <a href="#" class="see-more-btn">See All</a>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="owl-carousel featured-slider owl-theme">
                                @foreach ($new_products as $item)
                                    <div class="item" style="height:500px">
                                        <div class="product-item">
                                            <a href="/check-product/{{ base64_encode($item->id * $id_multiplier) }}/{{ $random_string }}" class="product-img">
                                                <img src="{{asset('images/item/'.$item->image)}}" alt="" style="height:200px">
                                                <div class="product-absolute-options">
                                                    <span class="offer-badge-1">New</span>
                                                    <span class="like-icon" title="wishlist"></span>
                                                </div>
                                            </a>
                                            <div class="product-text-dt" style="height: 130px">
                                                <p>Available<span>(In Stock)</span></p>
                                                <h4>{{ $item->item_name }}</h4>
                                                <div class="product-price">${{ $item->price - ($item->price * $item->discount)}} <span>${{ $item->price }}</span></div>
                                                <div class="qty-cart">
                                                    <div class="quantity buttons_added">
                                                        <input type="button" value="-" class="minus minus-btn">
                                                        <input type="number" step="1" name="quantity" value="1" class="input-text qty text">
                                                        <input type="button" value="+" class="plus plus-btn">
                                                    </div>
                                                    <span class="cart-icon"><a href="/cart/add-item-to-cart/{{ $item->item_id }}"><i class="uil uil-shopping-cart-alt"></i></a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('front_layout.footer')
        @include('front_layout.javascript')

        {{-- <script src="http://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous">
        </script> --}}
        <script>
                jQuery(document).ready(function(){
                    jQuery('#ajaxSubmit').click(function(e){
                        alert("Button clicked");
                    e.preventDefault();
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                        }
                    });
                    jQuery.ajax({
                        url: "{{ url('/grocery/post') }}",
                        method: 'post',
                        data: {
                            name: jQuery('#name').val(),
                            type: jQuery('#type').val(),
                            price: jQuery('#price').val()
                        },
                        success: function(result){
                            console.log(result);
                        }});
                    });
                    });
        </script>
    </body>
</html>

