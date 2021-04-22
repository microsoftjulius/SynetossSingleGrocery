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
                                            <h4><i class="uil uil-box"></i>My Orders</h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="pdpt-bg">
                                            <div class="pdpt-title">
                                                <h6>Delivery Timing 10 May, 3.00PM - 6.00PM</h6>
                                            </div>
                                            <div class="order-body10">
                                                <ul class="order-dtsll">
                                                    <li>
                                                        <div class="order-dt-img">
                                                            <img src="{{ asset('front_pages/images/groceries.svg')}}" alt="">
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="order-dt47">
                                                            <h4>Gambo - Ludhiana</h4>
                                                            <p>Delivered - Gambo</p>
                                                            <div class="order-title">2 Items <span data-inverted="" data-tooltip="2kg broccoli, 1kg Apple" data-position="top center">?</span></div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="total-dt">
                                                    <div class="total-checkout-group">
                                                        <div class="cart-total-dil">
                                                            <h4>Sub Total</h4>
                                                            <span>$25</span>
                                                        </div>
                                                        <div class="cart-total-dil pt-3">
                                                            <h4>Delivery Charges</h4>
                                                            <span>Free</span>
                                                        </div>
                                                    </div>
                                                    <div class="main-total-cart">
                                                        <h2>Total</h2>
                                                        <span>$25</span>
                                                    </div>
                                                </div>
                                                <div class="track-order">
                                                    <h4>Track Order</h4>
                                                    <div class="bs-wizard" style="border-bottom:0;">
                                                        <div class="bs-wizard-step complete">
                                                            <div class="text-center bs-wizard-stepnum">Placed</div>
                                                            <div class="progress">
                                                                <div class="progress-bar"></div>
                                                            </div>
                                                            <a href="#" class="bs-wizard-dot"></a>
                                                        </div>
                                                        <div class="bs-wizard-step complete">
                                                            <div class="text-center bs-wizard-stepnum">Packed</div>
                                                            <div class="progress">
                                                                <div class="progress-bar"></div>
                                                            </div>
                                                            <a href="#" class="bs-wizard-dot"></a>
                                                        </div>
                                                        <div class="bs-wizard-step active">
                                                            <div class="text-center bs-wizard-stepnum">On the way</div>
                                                            <div class="progress">
                                                                <div class="progress-bar"></div>
                                                            </div>
                                                            <a href="#" class="bs-wizard-dot"></a>
                                                        </div>
                                                        <div class="bs-wizard-step disabled">
                                                            <div class="text-center bs-wizard-stepnum">Delivered</div>
                                                            <div class="progress">
                                                                <div class="progress-bar"></div>
                                                            </div>
                                                            <a href="#" class="bs-wizard-dot"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="alert-offer">
                                                    <img src="{{ asset('front_pages/images/ribbon.svg')}}" alt="">
                                                    Cashback of $2 will be credit to Gambo Super Market wallet 6-12 hours of delivery.
                                                </div>
                                                <div class="call-bill">
                                                    <div class="delivery-man">
                                                        Delivery Boy - <a href="#"><i class="uil uil-phone"></i> Call Us</a>
                                                    </div>
                                                    <div class="order-bill-slip">
                                                        <a href="#" class="bill-btn5 hover-btn">View Bill</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pdpt-bg">
                                            <div class="pdpt-title">
                                                <h6>Delivery Timing 10 May, 3.00PM - 6.00PM</h6>
                                            </div>
                                            <div class="order-body10">
                                                <ul class="order-dtsll">
                                                    <li>
                                                        <div class="order-dt-img">
                                                            <img src="{{ asset('front_pages/images/groceries.svg')}}" alt="">
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="order-dt47">
                                                            <h4>Gambo - Ludhiana</h4>
                                                            <p>Delivered - Gambo</p>
                                                            <div class="order-title">2 Items <span data-inverted="" data-tooltip="2kg broccoli, 1kg Apple" data-position="top center">?</span></div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="total-dt">
                                                    <div class="total-checkout-group">
                                                        <div class="cart-total-dil">
                                                            <h4>Sub Total</h4>
                                                            <span>$25</span>
                                                        </div>
                                                        <div class="cart-total-dil pt-3">
                                                            <h4>Delivery Charges</h4>
                                                            <span>Free</span>
                                                        </div>
                                                    </div>
                                                    <div class="main-total-cart">
                                                        <h2>Total</h2>
                                                        <span>$25</span>
                                                    </div>
                                                </div>
                                                <div class="track-order">
                                                    <h4>Track Order</h4>
                                                    <div class="bs-wizard" style="border-bottom:0;">
                                                        <div class="bs-wizard-step complete">
                                                            <div class="text-center bs-wizard-stepnum">Placed</div>
                                                            <div class="progress">
                                                                <div class="progress-bar"></div>
                                                            </div>
                                                            <a href="#" class="bs-wizard-dot"></a>
                                                        </div>
                                                        <div class="bs-wizard-step complete">
                                                            <div class="text-center bs-wizard-stepnum">Packed</div>
                                                            <div class="progress">
                                                                <div class="progress-bar"></div>
                                                            </div>
                                                            <a href="#" class="bs-wizard-dot"></a>
                                                        </div>
                                                        <div class="bs-wizard-step complete">
                                                            <div class="text-center bs-wizard-stepnum">Arrived</div>
                                                            <div class="progress">
                                                                <div class="progress-bar"></div>
                                                            </div>
                                                            <a href="#" class="bs-wizard-dot"></a>
                                                        </div>
                                                        <div class="bs-wizard-step complete">
                                                            <div class="text-center bs-wizard-stepnum">Delivered</div>
                                                            <div class="progress">
                                                                <div class="progress-bar"></div>
                                                            </div>
                                                            <a href="#" class="bs-wizard-dot"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="call-bill">
                                                    <div class="delivery-man">
                                                        <a href="#"><i class="uil uil-rss"></i>Feedback</a>
                                                    </div>
                                                    <div class="order-bill-slip">
                                                        <a href="#" class="bill-btn5 hover-btn">View Bill</a>
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

