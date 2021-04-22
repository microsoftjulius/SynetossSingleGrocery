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
            <div class="all-product-grid">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-8">
                            <div class="order-placed-dt">
                                <i class="uil uil-check-circle icon-circle"></i>
                                <h2>Order Successfully Placed</h2>
                                <p>Thank you for your order! will received order timing - <span>(Today, 3.00PM - 5.00PM)</span></p>
                                <div class="delivery-address-bg">
                                    <div class="title585">
                                        <div class="pln-icon"><i class="uil uil-telegram-alt"></i></div>
                                        <h4>Your order will be sent to this address</h4>
                                    </div>
                                    <ul class="address-placed-dt1">
                                        <li>
                                            <p><i class="uil uil-map-marker-alt"></i>Address :<span>#000, St 8, Sks Nagar, Near Pakhowal Road, Ldh, 141001</span></p>
                                        </li>
                                        <li>
                                            <p><i class="uil uil-phone-alt"></i>Phone Number :<span>+919999999999</span></p>
                                        </li>
                                        <li>
                                            <p><i class="uil uil-envelope"></i>Email Address :<span><a href="https://gambolthemes.net/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="355f5a5d5b515a5075504d54584559501b565a58">[email&#160;protected]</a></span></p>
                                        </li>
                                        <li>
                                            <p><i class="uil uil-card-atm"></i>Payment Method :<span>Cash on Delivery</span></p>
                                        </li>
                                    </ul>
                                    <div class="stay-invoice">
                                        <div class="st-hm">Stay Home<i class="uil uil-smile"></i></div>
                                        <a href="#" class="invc-link hover-btn">invoice</a>
                                    </div>
                                    <div class="placed-bottom-dt">
                                        The payment of <span>$16</span> you'll make when the deliver arrives with your order.
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

