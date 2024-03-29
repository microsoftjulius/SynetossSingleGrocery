

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
                                    <img src="{{asset('front_pages/images/avatar/img-5.jpg')}}" alt="">
                                    <div class="img-add">
                                        <input type="file" id="file">
                                        <label for="file"><i class="uil uil-camera-plus"></i></label>
                                    </div>
                                </div>
                                <h4>{{ auth()->user()->name }}</h4>
                                <p>+91999999999<a href="#"><i class="uil uil-edit"></i></a></p>
                                <div class="earn-points"><img src="{{asset('front_pages/images/Dollar.svg')}}" alt="">Points : <span>20</span></div>
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
                                            <h4><i class="uil uil-apps"></i>Overview</h4>
                                        </div>
                                        <div class="welcome-text">
                                            <h2>Hi! {{ auth()->user()->name }}</h2>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="pdpt-bg">
                                            <div class="pdpt-title">
                                                <h4>My Rewards</h4>
                                            </div>
                                            <div class="ddsh-body">
                                                <h2>6 Rewards</h2>
                                                <ul>
                                                    <li>
                                                        <a href="#" class="small-reward-dt hover-btn">Won $2</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="small-reward-dt hover-btn">Won 40% Off</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="small-reward-dt hover-btn">Caskback $1</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="rewards-link5">+More</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <a href="#" class="more-link14">Rewards and Details <i class="uil uil-angle-double-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="pdpt-bg">
                                            <div class="pdpt-title">
                                                <h4>My Orders</h4>
                                            </div>
                                            <div class="ddsh-body">
                                                <h2>{{ $user_cart }} Recently Purchases</h2>
                                                <ul class="order-list-145">
                                                    <li>
                                                        <div class="smll-history">
                                                            <div class="order-title">{{ $user_cart }} Items <span data-inverted="" data-tooltip="2kg broccoli, 1kg Apple" data-position="top center">?</span></div>
                                                            <div class="order-status">On the way</div>
                                                            <p>${{ $total_amount + $delivery_charges }}</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <a href="#" class="more-link14">All Orders <i class="uil uil-angle-double-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="pdpt-bg">
                                            <div class="pdpt-title">
                                                <h4>My Wallet</h4>
                                            </div>
                                            <div class="wllt-body">
                                                <h2>Balance: ${{ $wallet_balance }}</h2>
                                                <ul class="wallet-list">
                                                    <li>
                                                        <a href="#" class="wallet-links14"><i class="uil uil-card-atm"></i>Payment Methods</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="wallet-links14"><i class="uil uil-gift"></i>3 offers Active</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="wallet-links14"><i class="uil uil-coins"></i>Points Earning</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <a href="#" class="more-link14">Rewards and Details <i class="uil uil-angle-double-right"></i></a>
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

