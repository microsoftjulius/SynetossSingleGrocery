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
        <div class="bs-canvas bs-canvas-left position-fixed bg-cart h-100">
            <div class="bs-canvas-header side-cart-header p-3 ">
                <div class="d-inline-block  main-cart-title">My Cart <span>(2 Items)</span></div>
                <button type="button" class="bs-canvas-close close" aria-label="Close"><i class="uil uil-multiply"></i></button>
            </div>
            <div class="bs-canvas-body">
                <div class="cart-top-total">
                    <div class="cart-total-dil">
                        <h4>Gambo Super Market</h4>
                        <span>$34</span>
                    </div>
                    <div class="cart-total-dil pt-2">
                        <h4>Delivery Charges</h4>
                        <span>$1</span>
                    </div>
                </div>
                <div class="side-cart-items">
                    <div class="cart-item">
                        <div class="cart-product-img">
                            <img src="{{asset('front_pages/images/product/img-1.jpg')}}" alt="">
                            <div class="offer-badge">6% OFF</div>
                        </div>
                        <div class="cart-text">
                            <h4>Product Title Here</h4>
                            <div class="cart-radio">
                                <ul class="kggrm-now">
                                    <li>
                                        <input type="radio" id="a1" name="cart1">
                                        <label for="a1">0.50</label>
                                    </li>
                                    <li>
                                        <input type="radio" id="a2" name="cart1">
                                        <label for="a2">1kg</label>
                                    </li>
                                    <li>
                                        <input type="radio" id="a3" name="cart1">
                                        <label for="a3">2kg</label>
                                    </li>
                                    <li>
                                        <input type="radio" id="a4" name="cart1">
                                        <label for="a4">3kg</label>
                                    </li>
                                </ul>
                            </div>
                            <div class="qty-group">
                                <div class="quantity buttons_added">
                                    <input type="button" value="-" class="minus minus-btn">
                                    <input type="number" step="1" name="quantity" value="1" class="input-text qty text">
                                    <input type="button" value="+" class="plus plus-btn">
                                </div>
                                <div class="cart-item-price">$10 <span>$15</span></div>
                            </div>
                            <button type="button" class="cart-close-btn"><i class="uil uil-multiply"></i></button>
                        </div>
                    </div>
                    <div class="cart-item">
                        <div class="cart-product-img">
                            <img src="{{asset('front_pages/images/product/img-2.jpg')}}" alt="">
                            <div class="offer-badge">6% OFF</div>
                        </div>
                        <div class="cart-text">
                            <h4>Product Title Here</h4>
                            <div class="cart-radio">
                                <ul class="kggrm-now">
                                    <li>
                                        <input type="radio" id="a5" name="cart2">
                                        <label for="a5">0.50</label>
                                    </li>
                                    <li>
                                        <input type="radio" id="a6" name="cart2">
                                        <label for="a6">1kg</label>
                                    </li>
                                    <li>
                                        <input type="radio" id="a7" name="cart2">
                                        <label for="a7">2kg</label>
                                    </li>
                                </ul>
                            </div>
                            <div class="qty-group">
                                <div class="quantity buttons_added">
                                    <input type="button" value="-" class="minus minus-btn">
                                    <input type="number" step="1" name="quantity" value="1" class="input-text qty text">
                                    <input type="button" value="+" class="plus plus-btn">
                                </div>
                                <div class="cart-item-price">$24 <span>$30</span></div>
                            </div>
                            <button type="button" class="cart-close-btn"><i class="uil uil-multiply"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bs-canvas-footer">
                <div class="cart-total-dil saving-total ">
                    <h4>Total Saving</h4>
                    <span>$11</span>
                </div>
                <div class="main-total-cart">
                    <h2>Total</h2>
                    <span>$35</span>
                </div>
                <div class="checkout-cart">
                    <a href="#" class="promo-code">Have a promocode?</a>
                    <a href="#" class="cart-checkout-btn hover-btn">Proceed to Checkout</a>
                </div>
            </div>
        </div>
        <div class="bs-canvas bs-canvas-right position-fixed bg-cart h-100">
            <div class="bs-canvas-header side-cart-header p-3 ">
                <div class="d-inline-block  main-cart-title">Filters</div>
                <button type="button" class="bs-canvas-close close" aria-label="Close"><i class="uil uil-multiply"></i></button>
            </div>
            <div class="bs-canvas-body filter-body">
                <div class="filter-items">
                    <div class="filtr-cate-title">
                        <h4>Categories</h4>
                    </div>
                    <div class="filter-item-body scrollstyle_4">
                        <div class="cart-radio">
                            <ul class="cte-select">
                                <li>
                                    <input type="radio" id="c1" name="category1">
                                    <label for="c1">All</label>
                                </li>
                                <li>
                                    <input type="radio" id="c2" name="category1" checked>
                                    <label for="c2">Vegetables & Fruits</label>
                                </li>
                                <li>
                                    <input type="radio" id="c3" name="category1">
                                    <label for="c3">Grocery & Staples</label>
                                </li>
                                <li>
                                    <input type="radio" id="c4" name="category1">
                                    <label for="c4">Dairy & Eggs</label>
                                </li>
                                <li>
                                    <input type="radio" id="c5" name="category1">
                                    <label for="c5">Beverages</label>
                                </li>
                                <li>
                                    <input type="radio" id="c6" name="category1">
                                    <label for="c6">Snacks</label>
                                </li>
                                <li>
                                    <input type="radio" id="c7" name="category1">
                                    <label for="c7">Home Care</label>
                                </li>
                                <li>
                                    <input type="radio" id="c8" name="category1">
                                    <label for="c8">Noodles & Sauces</label>
                                </li>
                                <li>
                                    <input type="radio" id="c9" name="category1">
                                    <label for="c9">Personal Care</label>
                                </li>
                                <li>
                                    <input type="radio" id="c10" name="category1">
                                    <label for="c10">Pat Care</label>
                                </li>
                                <li>
                                    <input type="radio" id="c11" name="category1">
                                    <label for="c11">Mea & Seafood</label>
                                </li>
                                <li>
                                    <input type="radio" id="c12" name="category1">
                                    <label for="c12">Electronics</label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="filter-items">
                    <div class="filtr-cate-title">
                        <h4>Brand</h4>
                    </div>
                    <div class="other-item-body scrollstyle_4">
                        <div class="brand-list">
                            <div class="search-by-catgory">
                                <div class="ui search">
                                    <div class="ui left icon input swdh10">
                                        <input class="prompt srch10" type="text" placeholder="Search by brand..">
                                        <i class="uil uil-search-alt icon icon1"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-control custom-checkbox pb2">
                                <input type="checkbox" class="custom-control-input" id="brand_1">
                                <label class="custom-control-label" for="brand_1">Brand Name</label>
                            </div>
                            <div class="custom-control custom-checkbox pb2">
                                <input type="checkbox" class="custom-control-input" id="brand_2">
                                <label class="custom-control-label" for="brand_2">Brand Name</label>
                            </div>
                            <div class="custom-control custom-checkbox pb2">
                                <input type="checkbox" class="custom-control-input" id="brand_3">
                                <label class="custom-control-label" for="brand_3">Brand Name</label>
                            </div>
                            <div class="custom-control custom-checkbox pb2">
                                <input type="checkbox" class="custom-control-input" id="brand_4">
                                <label class="custom-control-label" for="brand_4">Brand Name</label>
                            </div>
                            <div class="custom-control custom-checkbox pb2">
                                <input type="checkbox" class="custom-control-input" id="brand_5">
                                <label class="custom-control-label" for="brand_5">Brand Name</label>
                            </div>
                            <div class="custom-control custom-checkbox pb2">
                                <input type="checkbox" class="custom-control-input" id="brand_6">
                                <label class="custom-control-label" for="brand_6">Brand Name</label>
                            </div>
                            <div class="custom-control custom-checkbox pb2">
                                <input type="checkbox" class="custom-control-input" id="brand_7">
                                <label class="custom-control-label" for="brand_7">Brand Name</label>
                            </div>
                            <div class="custom-control custom-checkbox pb2">
                                <input type="checkbox" class="custom-control-input" id="brand_8">
                                <label class="custom-control-label" for="brand_8">Brand Name</label>
                            </div>
                            <div class="custom-control custom-checkbox pb2">
                                <input type="checkbox" class="custom-control-input" id="brand_9">
                                <label class="custom-control-label" for="brand_9">Brand Name</label>
                            </div>
                            <div class="custom-control custom-checkbox pb2">
                                <input type="checkbox" class="custom-control-input" id="brand_10">
                                <label class="custom-control-label" for="brand_10">Brand Name</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="filter-items">
                    <div class="filtr-cate-title">
                        <h4>Price</h4>
                    </div>
                    <div class="price-pack-item-body scrollstyle_4">
                        <div class="brand-list">
                            <div class="custom-control custom-checkbox pb2">
                                <input type="checkbox" class="custom-control-input" id="price_1">
                                <label class="custom-control-label" for="price_1">Less than $2 <span class="webproduct">(9)</span></label>
                            </div>
                            <div class="custom-control custom-checkbox pb2">
                                <input type="checkbox" class="custom-control-input" id="price_2">
                                <label class="custom-control-label" for="price_2">$2 to $5 <span class="webproduct">(8)</span></label>
                            </div>
                            <div class="custom-control custom-checkbox pb2">
                                <input type="checkbox" class="custom-control-input" id="price_3">
                                <label class="custom-control-label" for="price_3">$6 to $10 <span class="webproduct">(12)</span></label>
                            </div>
                            <div class="custom-control custom-checkbox pb2">
                                <input type="checkbox" class="custom-control-input" id="price_4">
                                <label class="custom-control-label" for="price_4">$11 to $15 <span class="webproduct">(4)</span></label>
                            </div>
                            <div class="custom-control custom-checkbox pb2">
                                <input type="checkbox" class="custom-control-input" id="price_5">
                                <label class="custom-control-label" for="price_5">$15 to $20 <span class="webproduct">(16)</span></label>
                            </div>
                            <div class="custom-control custom-checkbox pb2">
                                <input type="checkbox" class="custom-control-input" id="price_6">
                                <label class="custom-control-label" for="price_6">$21 to $25 <span class="webproduct">(18)</span></label>
                            </div>
                            <div class="custom-control custom-checkbox pb2">
                                <input type="checkbox" class="custom-control-input" id="price_7">
                                <label class="custom-control-label" for="price_7">More than $25 <span class="webproduct">(25)</span></label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="filter-items">
                    <div class="filtr-cate-title">
                        <h4>Discount</h4>
                    </div>
                    <div class="offer-item-body scrollstyle_4">
                        <div class="brand-list">
                            <div class="custom-control custom-checkbox pb2">
                                <input type="checkbox" class="custom-control-input" id="offer_1">
                                <label class="custom-control-label" for="offer_1">2% - 5% <span class="webproduct">(9)</span></label>
                            </div>
                            <div class="custom-control custom-checkbox pb2">
                                <input type="checkbox" class="custom-control-input" id="offer_2">
                                <label class="custom-control-label" for="offer_2">6% - 10% <span class="webproduct">(5)</span></label>
                            </div>
                            <div class="custom-control custom-checkbox pb2">
                                <input type="checkbox" class="custom-control-input" id="offer_3">
                                <label class="custom-control-label" for="offer_3">11% - 15% <span class="webproduct">(11)</span></label>
                            </div>
                            <div class="custom-control custom-checkbox pb2">
                                <input type="checkbox" class="custom-control-input" id="offer_4">
                                <label class="custom-control-label" for="offer_4">16% - 25% <span class="webproduct">(27)</span></label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="filter-items">
                    <div class="filtr-cate-title">
                        <h4>Pack Size</h4>
                    </div>
                    <div class="price-pack-item-body scrollstyle_4">
                        <div class="brand-list">
                            <div class="custom-control custom-checkbox pb2">
                                <input type="checkbox" class="custom-control-input" id="pack_1">
                                <label class="custom-control-label" for="pack_1">1 pc</label>
                            </div>
                            <div class="custom-control custom-checkbox pb2">
                                <input type="checkbox" class="custom-control-input" id="pack_2">
                                <label class="custom-control-label" for="pack_2">1 pc approx. 400 to 600 gm</label>
                            </div>
                            <div class="custom-control custom-checkbox pb2">
                                <input type="checkbox" class="custom-control-input" id="pack_3">
                                <label class="custom-control-label" for="pack_3">1 pc approx. 500 to 800 gm</label>
                            </div>
                            <div class="custom-control custom-checkbox pb2">
                                <input type="checkbox" class="custom-control-input" id="pack_4">
                                <label class="custom-control-label" for="pack_4">Combo 3 Items</label>
                            </div>
                            <div class="custom-control custom-checkbox pb2">
                                <input type="checkbox" class="custom-control-input" id="pack_5">
                                <label class="custom-control-label" for="pack_5">Combo 4 Items</label>
                            </div>
                            <div class="custom-control custom-checkbox pb2">
                                <input type="checkbox" class="custom-control-input" id="pack_6">
                                <label class="custom-control-label" for="pack_6">Combo 5 Items</label>
                            </div>
                            <div class="custom-control custom-checkbox pb2">
                                <input type="checkbox" class="custom-control-input" id="pack_7">
                                <label class="custom-control-label" for="pack_7">2 pcs</label>
                            </div>
                            <div class="custom-control custom-checkbox pb2">
                                <input type="checkbox" class="custom-control-input" id="pack_8">
                                <label class="custom-control-label" for="pack_8">100 g</label>
                            </div>
                            <div class="custom-control custom-checkbox pb2">
                                <input type="checkbox" class="custom-control-input" id="pack_9">
                                <label class="custom-control-label" for="pack_9">200 g</label>
                            </div>
                            <div class="custom-control custom-checkbox pb2">
                                <input type="checkbox" class="custom-control-input" id="pack_10">
                                <label class="custom-control-label" for="pack_10">250 g</label>
                            </div>
                            <div class="custom-control custom-checkbox pb2">
                                <input type="checkbox" class="custom-control-input" id="pack_11">
                                <label class="custom-control-label" for="pack_11">500g</label>
                            </div>
                            <div class="custom-control custom-checkbox pb2">
                                <input type="checkbox" class="custom-control-input" id="pack_12">
                                <label class="custom-control-label" for="pack_12">1kg</label>
                            </div>
                            <div class="custom-control custom-checkbox pb2">
                                <input type="checkbox" class="custom-control-input" id="pack_13">
                                <label class="custom-control-label" for="pack_13">2kg</label>
                            </div>
                            <div class="custom-control custom-checkbox pb2">
                                <input type="checkbox" class="custom-control-input" id="pack_14">
                                <label class="custom-control-label" for="pack_14">3kg</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <header class="header clearfix">
            @include('front_layout.topheader')
            @include('front_layout.menu')
        </header>
        <div class="wrapper">
            <div class="gambo-Breadcrumb">
                <div class="container">
                    @include('front_layout.breadcrumb')
                </div>
            </div>
            <div class="all-product-grid">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="product-top-dt">
                                <div class="product-left-title">
                                    <h2>{{ $category_name }}</h2>
                                </div>
                                <a href="#" class="filter-btn pull-bs-canvas-right">Filters</a>
                                <div class="product-sort">
                                    <div class="ui selection dropdown vchrt-dropdown">
                                        <input name="gender" type="hidden" value="default">
                                        <i class="dropdown icon d-icon"></i>
                                        <div class="text">Popularity</div>
                                        <div class="menu">
                                            <div class="item" data-value="0">Popularity</div>
                                            <div class="item" data-value="1">Price - Low to High</div>
                                            <div class="item" data-value="2">Price - High to Low</div>
                                            <div class="item" data-value="3">Alphabetical</div>
                                            <div class="item" data-value="4">Saving - High to Low</div>
                                            <div class="item" data-value="5">Saving - Low to High</div>
                                            <div class="item" data-value="6">% Off - High to Low</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-list-view">
                        <div class="row">
                            @foreach ($all_items_of_similar_category as $similar_category)
                                <div class="col-lg-3 col-md-6">
                                    <div class="product-item mb-30" style="height:400px">
                                        <a href="" class="product-img">
                                            <img src="{{asset('images/item/'.$similar_category->image)}}" alt="" style="height: 200px">
                                            <div class="product-absolute-options">
                                                <span class="offer-badge-1">{{ $similar_category->discount }}% off</span>
                                                <span class="like-icon" title="wishlist"></span>
                                            </div>
                                        </a>
                                        <div class="product-text-dt">
                                            <p>Available<span>(In Stock)</span></p>
                                            <h4>{{ $similar_category->item_name }}</h4>
                                            <div class="product-price">${{ $similar_category->price - ($similar_category->price * $similar_category->discount) }} <span>${{ $similar_category->price }}</span></div>
                                            <div class="qty-cart">
                                                <div class="quantity buttons_added">
                                                    <input type="button" value="-" class="minus minus-btn">
                                                    <input type="number" step="1" name="quantity" value="1" class="input-text qty text">
                                                    <input type="button" value="+" class="plus plus-btn">
                                                </div>
                                                <span class="cart-icon"><i class="uil uil-shopping-cart-alt"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <div class="col-md-12">
                                <div class="more-product-btn">
                                    <button class="show-more-btn hover-btn" onclick="window.location.href = '#';">Show More</button>
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

