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
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="default-title mt-4">
                                <h2>Frequently Asked Questions</h2>
                                <img src="{{asset('front_pages/images/line.svg')}}" alt="">
                            </div>
                            <div class="panel-group accordion pt-1" id="accordion0">
                                <div class="panel panel-default">
                                    <div class="panel-heading" id="headingOne">
                                        <div class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-target="#collapseOne" href="#" aria-expanded="false" aria-controls="collapseOne">
                                            Registration
                                            </a>
                                        </div>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion0" style="">
                                        <div class="panel-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam semper faucibus erat a efficitur. Praesent vulputate mauris eget augue semper, at eleifend enim aliquam. Vivamus suscipit lacinia neque eget suscipit. Morbi vitae nisl ac justo placerat vulputate ac quis lectus. Vestibulum pellentesque, orci eu ultrices molestie, nisi libero hendrerit eros, vel interdum augue tortor vel urna. Nullam enim dolor, pulvinar in metus vitae, tincidunt dignissim neque. Pellentesque tempor nulla eu neque hendrerit fringilla. Suspendisse ultricies venenatis maximus. Suspendisse erat elit, ultricies eu porta nec, luctus sit amet dui. Fusce feugiat odio semper, hendrerit lectus vitae, convallis nisl. Ut a justo diam. Donec vitae leo lorem. Cras pharetra libero ut urna condimentum, non imperdiet leo posuere.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" id="headingTwo">
                                        <div class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-target="#collapseTwo" href="#" aria-expanded="false" aria-controls="collapseTwo">
                                            Account Related
                                            </a>
                                        </div>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion0">
                                        <div class="panel-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam semper faucibus erat a efficitur. Praesent vulputate mauris eget augue semper, at eleifend enim aliquam. Vivamus suscipit lacinia neque eget suscipit. Morbi vitae nisl ac justo placerat vulputate ac quis lectus. Vestibulum pellentesque, orci eu ultrices molestie, nisi libero hendrerit eros, vel interdum augue tortor vel urna. Nullam enim dolor, pulvinar in metus vitae, tincidunt dignissim neque. Pellentesque tempor nulla eu neque hendrerit fringilla. Suspendisse ultricies venenatis maximus. Suspendisse erat elit, ultricies eu porta nec, luctus sit amet dui. Fusce feugiat odio semper, hendrerit lectus vitae, convallis nisl. Ut a justo diam. Donec vitae leo lorem. Cras pharetra libero ut urna condimentum, non imperdiet leo posuere.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" id="headingThree">
                                        <div class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-target="#collapseThree" href="#" aria-expanded="false" aria-controls="collapseThree">
                                            Payment
                                            </a>
                                        </div>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion0">
                                        <div class="panel-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam semper faucibus erat a efficitur. Praesent vulputate mauris eget augue semper, at eleifend enim aliquam. Vivamus suscipit lacinia neque eget suscipit. Morbi vitae nisl ac justo placerat vulputate ac quis lectus. Vestibulum pellentesque, orci eu ultrices molestie, nisi libero hendrerit eros, vel interdum augue tortor vel urna. Nullam enim dolor, pulvinar in metus vitae, tincidunt dignissim neque. Pellentesque tempor nulla eu neque hendrerit fringilla. Suspendisse ultricies venenatis maximus. Suspendisse erat elit, ultricies eu porta nec, luctus sit amet dui. Fusce feugiat odio semper, hendrerit lectus vitae, convallis nisl. Ut a justo diam. Donec vitae leo lorem. Cras pharetra libero ut urna condimentum, non imperdiet leo posuere.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" id="headingfour">
                                        <div class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-target="#collapsefour" href="#" aria-expanded="false" aria-controls="collapsefour">
                                            Delivery Related
                                            </a>
                                        </div>
                                    </div>
                                    <div id="collapsefour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour" data-parent="#accordion0">
                                        <div class="panel-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam semper faucibus erat a efficitur. Praesent vulputate mauris eget augue semper, at eleifend enim aliquam. Vivamus suscipit lacinia neque eget suscipit. Morbi vitae nisl ac justo placerat vulputate ac quis lectus. Vestibulum pellentesque, orci eu ultrices molestie, nisi libero hendrerit eros, vel interdum augue tortor vel urna. Nullam enim dolor, pulvinar in metus vitae, tincidunt dignissim neque. Pellentesque tempor nulla eu neque hendrerit fringilla. Suspendisse ultricies venenatis maximus. Suspendisse erat elit, ultricies eu porta nec, luctus sit amet dui. Fusce feugiat odio semper, hendrerit lectus vitae, convallis nisl. Ut a justo diam. Donec vitae leo lorem. Cras pharetra libero ut urna condimentum, non imperdiet leo posuere.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" id="headingfive">
                                        <div class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-target="#collapsefive" href="#" aria-expanded="false" aria-controls="collapsefive">
                                            Order Related
                                            </a>
                                        </div>
                                    </div>
                                    <div id="collapsefive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfive" data-parent="#accordion0">
                                        <div class="panel-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam semper faucibus erat a efficitur. Praesent vulputate mauris eget augue semper, at eleifend enim aliquam. Vivamus suscipit lacinia neque eget suscipit. Morbi vitae nisl ac justo placerat vulputate ac quis lectus. Vestibulum pellentesque, orci eu ultrices molestie, nisi libero hendrerit eros, vel interdum augue tortor vel urna. Nullam enim dolor, pulvinar in metus vitae, tincidunt dignissim neque. Pellentesque tempor nulla eu neque hendrerit fringilla. Suspendisse ultricies venenatis maximus. Suspendisse erat elit, ultricies eu porta nec, luctus sit amet dui. Fusce feugiat odio semper, hendrerit lectus vitae, convallis nisl. Ut a justo diam. Donec vitae leo lorem. Cras pharetra libero ut urna condimentum, non imperdiet leo posuere.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" id="headingsix">
                                        <div class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-target="#collapsesix" href="#" aria-expanded="false" aria-controls="collapsesix">
                                            Customer Related
                                            </a>
                                        </div>
                                    </div>
                                    <div id="collapsesix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingsix" data-parent="#accordion0">
                                        <div class="panel-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam semper faucibus erat a efficitur. Praesent vulputate mauris eget augue semper, at eleifend enim aliquam. Vivamus suscipit lacinia neque eget suscipit. Morbi vitae nisl ac justo placerat vulputate ac quis lectus. Vestibulum pellentesque, orci eu ultrices molestie, nisi libero hendrerit eros, vel interdum augue tortor vel urna. Nullam enim dolor, pulvinar in metus vitae, tincidunt dignissim neque. Pellentesque tempor nulla eu neque hendrerit fringilla. Suspendisse ultricies venenatis maximus. Suspendisse erat elit, ultricies eu porta nec, luctus sit amet dui. Fusce feugiat odio semper, hendrerit lectus vitae, convallis nisl. Ut a justo diam. Donec vitae leo lorem. Cras pharetra libero ut urna condimentum, non imperdiet leo posuere.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" id="headingseven">
                                        <div class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-target="#collapseseven" href="#" aria-expanded="false" aria-controls="collapseseven">
                                            Return & Refund
                                            </a>
                                        </div>
                                    </div>
                                    <div id="collapseseven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingseven" data-parent="#accordion0">
                                        <div class="panel-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam semper faucibus erat a efficitur. Praesent vulputate mauris eget augue semper, at eleifend enim aliquam. Vivamus suscipit lacinia neque eget suscipit. Morbi vitae nisl ac justo placerat vulputate ac quis lectus. Vestibulum pellentesque, orci eu ultrices molestie, nisi libero hendrerit eros, vel interdum augue tortor vel urna. Nullam enim dolor, pulvinar in metus vitae, tincidunt dignissim neque. Pellentesque tempor nulla eu neque hendrerit fringilla. Suspendisse ultricies venenatis maximus. Suspendisse erat elit, ultricies eu porta nec, luctus sit amet dui. Fusce feugiat odio semper, hendrerit lectus vitae, convallis nisl. Ut a justo diam. Donec vitae leo lorem. Cras pharetra libero ut urna condimentum, non imperdiet leo posuere.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" id="headingeight">
                                        <div class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-target="#collapseeight" href="#" aria-expanded="false" aria-controls="collapseeight">
                                            How Does it Work
                                            </a>
                                        </div>
                                    </div>
                                    <div id="collapseeight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingeight" data-parent="#accordion0">
                                        <div class="panel-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam semper faucibus erat a efficitur. Praesent vulputate mauris eget augue semper, at eleifend enim aliquam. Vivamus suscipit lacinia neque eget suscipit. Morbi vitae nisl ac justo placerat vulputate ac quis lectus. Vestibulum pellentesque, orci eu ultrices molestie, nisi libero hendrerit eros, vel interdum augue tortor vel urna. Nullam enim dolor, pulvinar in metus vitae, tincidunt dignissim neque. Pellentesque tempor nulla eu neque hendrerit fringilla. Suspendisse ultricies venenatis maximus. Suspendisse erat elit, ultricies eu porta nec, luctus sit amet dui. Fusce feugiat odio semper, hendrerit lectus vitae, convallis nisl. Ut a justo diam. Donec vitae leo lorem. Cras pharetra libero ut urna condimentum, non imperdiet leo posuere.</p>
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

