

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
        <div id="address_model" class="header-cate-model main-gambo-model modal fade" tabindex="-1" role="dialog" aria-modal="false">
            <div class="modal-dialog category-area" role="document">
                <div class="category-area-inner">
                    <div class="modal-header">
                        <button type="button" class="close btn-close" data-dismiss="modal" aria-label="Close">
                        <i class="uil uil-multiply"></i>
                        </button>
                    </div>
                    <div class="category-model-content modal-content">
                        <div class="cate-header">
                            <h4>Add New Address</h4>
                        </div>
                        <div class="add-address-form">
                            <div class="checout-address-step">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <form class="">
                                            <div class="form-group">
                                                <div class="product-radio">
                                                    <ul class="product-now">
                                                        <li>
                                                            <input type="radio" id="ad1" name="address1" checked>
                                                            <label for="ad1">Home</label>
                                                        </li>
                                                        <li>
                                                            <input type="radio" id="ad2" name="address1">
                                                            <label for="ad2">Office</label>
                                                        </li>
                                                        <li>
                                                            <input type="radio" id="ad3" name="address1">
                                                            <label for="ad3">Other</label>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="address-fieldset">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12">
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
                                                        <div class="form-group mb-0">
                                                            <div class="address-btns">
                                                                <button class="save-btn14 hover-btn">Save</button>
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
            </div>
        </div>
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
                                            <h4><i class="uil uil-location-point"></i>My Address</h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="pdpt-bg">
                                            <div class="pdpt-title">
                                                <h4>My Address</h4>
                                            </div>
                                            <div class="address-body">
                                                <a href="#" class="add-address hover-btn" data-toggle="modal" data-target="#address_model">Add New Address</a>
                                                <div class="address-item">
                                                    <div class="address-icon1">
                                                        <i class="uil uil-home-alt"></i>
                                                    </div>
                                                    <div class="address-dt-all">
                                                        <h4>Home</h4>
                                                        <p>#0000, St No. 8, Shahid Karnail Singh Nagar, MBD Mall, Frozpur road, Ludhiana, 141001</p>
                                                        <ul class="action-btns">
                                                            <li><a href="#" class="action-btn"><i class="uil uil-edit"></i></a></li>
                                                            <li><a href="#" class="action-btn"><i class="uil uil-trash-alt"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="address-item">
                                                    <div class="address-icon1">
                                                        <i class="uil uil-home-alt"></i>
                                                    </div>
                                                    <div class="address-dt-all">
                                                        <h4>Office</h4>
                                                        <p>#0000, St No. 8, Shahid Karnail Singh Nagar, MBD Mall, Frozpur road, Ludhiana, 141001</p>
                                                        <ul class="action-btns">
                                                            <li><a href="#" class="action-btn"><i class="uil uil-edit"></i></a></li>
                                                            <li><a href="#" class="action-btn"><i class="uil uil-trash-alt"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="address-item">
                                                    <div class="address-icon1">
                                                        <i class="uil uil-home-alt"></i>
                                                    </div>
                                                    <div class="address-dt-all">
                                                        <h4>Other</h4>
                                                        <p>#0000, St No. 8, Shahid Karnail Singh Nagar, MBD Mall, Frozpur road, Ludhiana, 141001</p>
                                                        <ul class="action-btns">
                                                            <li><a href="#" class="action-btn"><i class="uil uil-edit"></i></a></li>
                                                            <li><a href="#" class="action-btn"><i class="uil uil-trash-alt"></i></a></li>
                                                        </ul>
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

