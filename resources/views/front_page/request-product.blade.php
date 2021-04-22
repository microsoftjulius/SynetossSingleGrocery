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
            <div class="request-grid">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="default-title">
                                <h2>Request Product?</h2>
                                <img src="{{asset('front_pages/images/line.svg')}}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="request-products">
                                <div class="form-group">
                                    <input type="text" value="" data-role="tagsinput" placeholder="Type Product">
                                </div>
                                <button class="next-btn16 hover-btn mt-3 rqst-btn" type="submit">Request Product</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="life-gambo pb-3">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="default-title">
                                <h2>How Do I Request Product?</h2>
                                <p>How Do I order for Request on Gambo</p>
                                <img src="{{asset('front_pages/images/line.svg')}}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="how-order-steps">
                                <div class="how-order-icon">
                                    <i class="uil uil-text"></i>
                                </div>
                                <h4>Type Product</h4>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="how-order-steps">
                                <div class="how-order-icon">
                                    <i class="uil uil-location-arrow-alt"></i>
                                </div>
                                <h4>Select Product</h4>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="how-order-steps">
                                <div class="how-order-icon">
                                    <i class="uil uil-box"></i>
                                </div>
                                <h4>Request Order Product</h4>
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

