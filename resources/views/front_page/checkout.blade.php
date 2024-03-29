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
            <div class="all-product-grid">
                <div class="container">
                    @include('layouts.admin-partials.messages')
                    <div class="row">
                        <div class="col-lg-8 col-md-7">
                            <div id="checkout_wizard" class="checkout accordion left-chck145">
                                <div class="checkout-step">
                                    <div class="checkout-card" id="headingOne">
                                        <span class="checkout-step-number">1</span>
                                        <h4 class="checkout-step-title">
                                            <button class="wizard-btn" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> Email Verification</button>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="collapse in show" data-parent="#checkout_wizard">
                                        <div class="checkout-step-body">
                                            <p>We need your email so we can inform you about any delay or problem.</p>
                                            <p class="phn145">4 digits code send your email <span></span><a class="edit-no-btn hover-btn" data-toggle="collapse" href="#edit-number">Edit</a></p>
                                            <div class="collapse" id="edit-number">
                                                <div class="row">
                                                    <div class="col-lg-8">
                                                        <div class="checkout-login">
                                                            <form action="/send-email-code-to-customer" method="GET">
                                                                <div class="login-pone">
                                                                    <input type="email" class="form-control" value="{{ base64_decode(base64_decode(base64_decode(request()->route()->user_email))) }}" placeholder="Email Address" name="customer_email" required>
                                                                </div><br>
                                                                <button class="btn btn-sm btn-info chck-btn hover-btn">Send Code</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="otp-verifaction">
                                                {{-- <div class="row">
                                                    <div class="col-lg-12">
                                                        <form action="/confirm-user-code/{{ request()->route()->user_email }}">
                                                            <div class="form-group mb-0">
                                                                <label class="control-label">Enter Code</label>
                                                                <ul class="code-alrt-inputs">
                                                                    <li>
                                                                        <input id="code[1]" name="digit1" type="text" placeholder="" class="form-control input-md" required="">
                                                                    </li>
                                                                    <li>
                                                                        <input id="code[2]" name="digit2" type="text" placeholder="" class="form-control input-md" required="">
                                                                    </li>
                                                                    <li>
                                                                        <input id="code[3]" name="digit3" type="text" placeholder="" class="form-control input-md" required="">
                                                                    </li>
                                                                    <li>
                                                                        <input id="code[4]" name="digit4" type="text" placeholder="" class="form-control input-md" required="">
                                                                    </li>
                                                                    <li>
                                                                        <button class="btn btn-info collapsed chck-btn hover-btn">Confirm code</button>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="checkout-step">
                                    <div class="checkout-card" id="headingTwo">
                                        <span class="checkout-step-number">2</span>
                                        <h4 class="checkout-step-title">
                                            <button class="wizard-btn collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> Delivery Address</button>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#checkout_wizard">
                                        <div class="checkout-step-body">
                                            <div class="checout-address-step">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <form class="" action="/save-client-delivery-address" method="GET">
                                                            <div class="form-group">
                                                                <div class="product-radio">
                                                                    <ul class="product-now">
                                                                        <li>
                                                                            <input type="radio" id="ad1" name="address" value="home" checked>
                                                                            <label for="ad1">Home</label>
                                                                        </li>
                                                                        <li>
                                                                            <input type="radio" id="ad2" name="address" value="office">
                                                                            <label for="ad2">Office</label>
                                                                        </li>
                                                                        <li>
                                                                            <input type="radio" id="ad3" name="address" value="other">
                                                                            <label for="ad3">Other</label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="address-fieldset">
                                                                <div class="row">
                                                                    <div class="col-lg-6 col-md-12">
                                                                        <div class="form-group">
                                                                            <label class="control-label">Name*</label>
                                                                            <input id="name" name="name" type="text" placeholder="Name" class="form-control input-md" required="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-12">
                                                                        <div class="form-group">
                                                                            <label class="control-label">Email Address*</label>
                                                                            <input id="email1" name="email" type="email" placeholder="Email Address" value="{{ base64_decode(base64_decode(base64_decode(request()->route()->user_email))) }}" class="form-control input-md" required="" readonly>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="control-label">Password *</label>
                                                                            <input id="password" name="password" type="password" placeholder="password" class="form-control input-md" required="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="control-label">Flat / House / Office No.*</label>
                                                                            <input id="flat" name="flat" type="text" placeholder="Address" class="form-control input-md" required="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12 col-md-12">
                                                                        <div class="form-group">
                                                                            <label class="control-label">Street / Society / Office Name*</label>
                                                                            <input id="street" name="street" type="text" placeholder="Street Address" class="form-control input-md">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-12">
                                                                        <div class="form-group">
                                                                            <label class="control-label">Pincode*</label>
                                                                            <input id="pincode" name="pincode" type="text" placeholder="Pincode" class="form-control input-md" required="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-12">
                                                                        <div class="form-group">
                                                                            <label class="control-label">Locality*</label>
                                                                            <input id="Locality" name="locality" type="text" placeholder="Enter City" class="form-control input-md" required="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12 col-md-12">
                                                                        <div class="form-group">
                                                                            <div class="address-btns">
                                                                                <button class="save-btn14 hover-btn">Save</button>
                                                                                <a class="collapsed ml-auto next-btn16 hover-btn" role="button" data-toggle="collapse" data-parent="#checkout_wizard" href="#collapseThree"> Next </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="checkout-step">
                                    <div class="checkout-card" id="headingThree">
                                        <span class="checkout-step-number">3</span>
                                        <h4 class="checkout-step-title">
                                            <button class="wizard-btn collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> Delivery Time & Date </button>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#checkout_wizard">
                                        <div class="checkout-step-body">
                                            <form action="/confirm-delivery-time-and-date/{{ base64_decode(base64_decode(base64_decode(request()->route()->user_email))) }}">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="control-label">Select Date and Time*</label>
                                                            <div class="date-slider-group">
                                                                <div class="owl-carousel date-slider owl-theme">
                                                                    <div class="item">
                                                                        <div class="date-now">
                                                                            <input type="radio" id="dd1" name="date1" value="Today" checked="">
                                                                            <label for="dd1">Today</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="item">
                                                                        <div class="date-now">
                                                                            <input type="radio" id="dd2" value="Tomorrow" name="date1">
                                                                            <label for="dd2">Tomorrow</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="item">
                                                                        <div class="date-now">
                                                                            <input type="radio" id="dd3" value="10 May 2020" name="date1">
                                                                            <label for="dd3">10 May 2020</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="item">
                                                                        <div class="date-now">
                                                                            <input type="radio" id="dd4" value="11 May 2020" name="date1">
                                                                            <label for="dd4">11 May 2020</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="item">
                                                                        <div class="date-now">
                                                                            <input type="radio" id="dd5" value="12 May 2020" name="date1">
                                                                            <label for="dd5">12 May 2020</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="item">
                                                                        <div class="date-now">
                                                                            <input type="radio" id="dd6" value="13 May 2020" name="date1">
                                                                            <label for="dd6">13 May 2020</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="item">
                                                                        <div class="date-now">
                                                                            <input type="radio" id="dd7" value="14 May 2020" name="date1">
                                                                            <label for="dd7">14 May 2020</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="item">
                                                                        <div class="date-now">
                                                                            <input type="radio" id="dd8" value="15 My 2020" name="date1">
                                                                            <label for="dd8">15 May 2020</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="time-radio">
                                                                <div class="ui form">
                                                                    <div class="grouped fields">
                                                                        <div class="field">
                                                                            <div class="ui radio checkbox chck-rdio">
                                                                                <input type="radio" name="time_range" value="8.00AM - 10.00AM" tabindex="0" class="hidden">
                                                                                <label>8.00AM - 10.00AM</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="field">
                                                                            <div class="ui radio checkbox chck-rdio">
                                                                                <input type="radio" name="time_range" value="10.00AM - 12.00PM" tabindex="0" class="hidden">
                                                                                <label>10.00AM - 12.00PM</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="field">
                                                                            <div class="ui radio checkbox chck-rdio">
                                                                                <input type="radio" name="time_range" value="12.00PM - 2.00PM" tabindex="0" class="hidden">
                                                                                <label>12.00PM - 2.00PM</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="field">
                                                                            <div class="ui radio checkbox chck-rdio">
                                                                                <input type="radio" name="time_range" value="2.00PM - 4.00PM" tabindex="0" class="hidden">
                                                                                <label>2.00PM - 4.00PM</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="field">
                                                                            <div class="ui radio checkbox chck-rdio">
                                                                                <input type="radio" name="time_range" value="4.00PM - 6.00PM" tabindex="0" class="hidden">
                                                                                <label>4.00PM - 6.00PM</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="btn btn-info collapsed next-btn16 hover-btn" type="submit"> Proccess to payment </button>
                                                {{-- <a class="collapsed next-btn16 hover-btn" role="button" data-toggle="collapse" href="#collapseFour"> Proccess to payment </a> --}}
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="checkout-step">
                                    <div class="checkout-card" id="headingFour">
                                        <span class="checkout-step-number">4</span>
                                        <h4 class="checkout-step-title">
                                            <button class="wizard-btn collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Payment</button>
                                        </h4>
                                    </div>
                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#checkout_wizard">
                                        <div class="checkout-step-body">
                                            <form action="/place-order-for-client/{{ base64_decode(base64_decode(base64_decode(request()->route()->user_email))) }}" data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
                                                method="GET" class="stripe-payment"
                                                data-cc-on-file="false">
                                            <div class="payment_method-checkout">
                                                <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="rpt100">
                                                                <ul class="radio--group-inline-container_1">
                                                                    <li>
                                                                        <div class="radio-item_1">
                                                                            <input id="cashondelivery1" value="cashondelivery" name="paymentmethod" type="radio" data-minimum="50.0">
                                                                            <label for="cashondelivery1" class="radio-label_1">Cash on Delivery</label>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="radio-item_1">
                                                                            <input id="card1" value="card" name="paymentmethod" type="radio" data-minimum="50.0">
                                                                            <label for="card1" class="radio-label_1">Credit / Debit Card</label>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="form-group return-departure-dts" data-method="cashondelivery">
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <div class="pymnt_title">
                                                                            <h4>Cash on Delivery</h4>
                                                                            <p>Cash on Delivery will not be available if your order value exceeds $10.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group return-departure-dts" data-method="card">
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <div class="pymnt_title mb-4">
                                                                            <h4>Credit / Debit Card</h4>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="form-group mt-1">
                                                                            <label class="control-label">Holder Name*</label>
                                                                            <div class="ui search focus">
                                                                                <div class="ui left icon input swdh11 swdh19">
                                                                                    <input class="prompt srch_explore" type="text" name="holdername" value="" id="holder[name]" maxlength="64" placeholder="Holder Name">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="form-group mt-1">
                                                                            <label class="control-label">Card Number*</label>
                                                                            <div class="ui search focus">
                                                                                <div class="ui left icon input swdh11 swdh19">
                                                                                    <input class="prompt srch_explore" type="text" name="cardnumber" value="" id="card[number]" maxlength="64" placeholder="Card Number">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <div class="form-group mt-1">
                                                                            <label class="control-label">Expiration Month*</label>
                                                                            <select class="ui fluid search dropdown form-dropdown" name="card[expire-month]">
                                                                                <option value="">Month</option>
                                                                                <option value="1">January</option>
                                                                                <option value="2">February</option>
                                                                                <option value="3">March</option>
                                                                                <option value="4">April</option>
                                                                                <option value="5">May</option>
                                                                                <option value="6">June</option>
                                                                                <option value="7">July</option>
                                                                                <option value="8">August</option>
                                                                                <option value="9">September</option>
                                                                                <option value="10">October</option>
                                                                                <option value="11">November</option>
                                                                                <option value="12">December</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <div class="form-group mt-1">
                                                                            <label class="control-label">Expiration Year*</label>
                                                                            <div class="ui search focus">
                                                                                <div class="ui left icon input swdh11 swdh19">
                                                                                    <input class="prompt srch_explore" type="text" name="card[expire-year]" maxlength="4" placeholder="Year">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <div class="form-group mt-1">
                                                                            <label class="control-label">CVV*</label>
                                                                            <div class="ui search focus">
                                                                                <div class="ui left icon input swdh11 swdh19">
                                                                                    <input class="prompt srch_explore" name="card[cvc]" maxlength="3" placeholder="CVV">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="btn btn-info hover-btn" type="submit">Place Order</button>
                                        </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-5">
                            <div class="pdpt-bg mt-0">
                                <div class="pdpt-title">
                                    <h4>Order Summary</h4>
                                </div>
                                @foreach ($items_in_cart as $item)
                                    <div class="right-cart-dt-body">
                                        <div class="cart-item border_radius">
                                            <div class="cart-product-img">
                                                <img src="{{asset('images/item/'.$item->image)}}" alt="">
                                                <div class="offer-badge">{{ $item->discount * 100 }}% OFF</div>
                                            </div>
                                            <div class="cart-text">
                                                <h4>{{ $item->item_name }}</h4>
                                                <div class="cart-item-price">${{ ($item->price - ($item->price * $item->discount)) * $item->quantity }} <span>${{ $item->price * $item->quantity}}</span></div>
                                                <button type="button" class="cart-close-btn"><i class="uil uil-multiply"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="total-checkout-group">
                                    <div class="cart-total-dil">
                                        <h4>Price</h4>
                                        <span>${{ $total_amount }}</span>
                                    </div>
                                    <div class="cart-total-dil pt-3">
                                        <h4>Delivery Charges</h4>
                                        <span>${{ $delivery_charges }}</span>
                                    </div>
                                </div>
                                <div class="cart-total-dil saving-total ">
                                    <h4>Total Saving</h4>
                                    <span>${{ $total_saving }}</span>
                                </div>
                                <div class="main-total-cart">
                                    <h2>Total</h2>
                                    <span>${{ $total_amount + $delivery_charges }}</span>
                                </div>
                                <div class="payment-secure">
                                    <i class="uil uil-padlock"></i>Secure checkout
                                </div>
                            </div>
                            <a href="#" class="promo-link45">Have a promocode?</a>
                            <div class="checkout-safety-alerts">
                                <p><i class="uil uil-sync"></i>100% Replacement Guarantee</p>
                                <p><i class="uil uil-check-square"></i>100% Genuine Products</p>
                                <p><i class="uil uil-shield-check"></i>Secure Payments</p>
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

