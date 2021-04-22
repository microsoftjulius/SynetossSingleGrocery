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
                                            <h4><i class="uil uil-gift"></i>My Rewards</h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="pdpt-bg">
                                            <ul class="reward-body-all">
                                                <li>
                                                    <div class="total-rewards">
                                                        <div class="tt-icon"><i class="uil uil-money-withdraw"></i></div>
                                                        <span>Cashbacks</span>
                                                        <h4>$15</h4>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="total-rewards">
                                                        <div class="tt-icon"><i class="uil uil-percentage"></i></div>
                                                        <span>Offers</span>
                                                        <h4>$5</h4>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="total-rewards">
                                                        <div class="tt-icon"><i class="uil uil-tag-alt"></i></div>
                                                        <span>Coupons</span>
                                                        <h4>2</h4>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="pdpt-bg">
                                            <div class="reward-body-dtt">
                                                <div class="reward-img-icon">
                                                    <img src="{{ asset('front_pages/images/gift.svg')}}" alt="">
                                                </div>
                                                <span class="rewrd-title">Cashback Won</span>
                                                <h4 class="cashbk-price">$2</h4>
                                                <span class="date-reward">12 May 2020</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="pdpt-bg rewards-coupns">
                                            <div class="reward-body-dtt">
                                                <div class="reward-img-icon">
                                                    <img src="{{ asset('front_pages/images/discount.svg')}}" alt="">
                                                </div>
                                                <span class="rewrd-title">Offer</span>
                                                <h4 class="cashbk-price">Get 25% Cashback</h4>
                                                <span class="date-reward">Expires on : 31st May</span>
                                            </div>
                                            <div class="top-coup-code" title="Coupon Code">Gambocoup25</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="pdpt-bg rewards-coupns">
                                            <div class="reward-body-dtt">
                                                <div class="reward-img-icon">
                                                    <img src="{{ asset('front_pages/images/coupon.svg')}}" alt="">
                                                </div>
                                                <span class="rewrd-title">Coupon Won</span>
                                                <h4 class="cashbk-price">Get 10% Cashback</h4>
                                                <span class="date-reward">Expires on : 25th May</span>
                                            </div>
                                            <div class="top-coup-code" title="Coupon Code">Gambocoup10</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="pdpt-bg rewards-coupns">
                                            <div class="reward-body-dtt">
                                                <div class="reward-img-icon">
                                                    <img src="{{ asset('front_pages/images/discount.svg')}}" alt="">
                                                </div>
                                                <span class="rewrd-title">Offer</span>
                                                <h4 class="cashbk-price">Get 15% Cashback</h4>
                                                <span class="date-reward">Expired on : 5th May</span>
                                            </div>
                                            <div class="top-coup-code" title="Coupon Code">Gambocoup15</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="pdpt-bg rewards-coupns">
                                            <div class="reward-body-dtt">
                                                <div class="reward-img-icon">
                                                    <img src="{{ asset('front_pages/images/coupon.svg')}}" alt="">
                                                </div>
                                                <span class="rewrd-title">Coupon Won</span>
                                                <h4 class="cashbk-price">Get 5% Cashback</h4>
                                                <span class="date-reward">Expires on : 20th May</span>
                                            </div>
                                            <div class="top-coup-code" title="Coupon Code">Gambocoup5</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="pdpt-bg">
                                            <div class="reward-body-dtt">
                                                <div class="reward-img-icon">
                                                    <img src="{{ asset('front_pages/images/gift.svg')}}" alt="">
                                                </div>
                                                <span class="rewrd-title">Cashback Won</span>
                                                <h4 class="cashbk-price">$1</h4>
                                                <span class="date-reward">3 May 2020</span>
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

