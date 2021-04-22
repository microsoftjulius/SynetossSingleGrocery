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
            <div class="default-dt">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="default_tabs">
                                <nav>
                                    <div class="nav nav-tabs tab_default  justify-content-center">
                                        <a class="nav-item nav-link" href="/about_us">About</a>
                                        <a class="nav-item nav-link" href="/our_blog">Blog</a>
                                        <a class="nav-item nav-link" href="/career">Careers</a>
                                        <a class="nav-item nav-link active" href="/press">Press</a>
                                    </div>
                                </nav>
                            </div>
                            <div class="title129">
                                <h2>Press Releases</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog-gambo">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-5">
                            <div class="fcrse_3">
                                <ul class="blogleft12">
                                    <li>
                                        <a href="#collapse2" class="category-topics cate-right" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapse2">Archive News</a>
                                        <div class="collapse show" id="collapse2" style="">
                                            <ul class="category-card">
                                                <li>
                                                    <a href="#" class="category-item1">2020</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="socl148">
                                            <button class="twiter158" data-href="#" onclick="sharingPopup(this);" id="twitter-share"><i class="uil uil-twitter ic45"></i>Follow</button>
                                            <button class="facebook158" data-href="#" onclick="sharingPopup(this);" id="facebook-share"><i class="uil uil-facebook ic45"></i>Follow</button>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="help_link">
                                            <a href="#">FAQ Help Center</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-7">
                            <div class="press-title">
                                <h2>Gambo in the News</h2>
                                <p>For media interviews and inquiries, please send an email to <a href="#"><span class="__cf_email__" data-cfemail="9dedeff8eeeeddfafcf0fff2eee8edf8eff0fceff6f8e9b3fef2f0">[email&#160;protected]</span></a></p>
                            </div>
                            <a href="#" class="press-item">
                                <span>May 15, 2020</span>
                                <h4>Live Mint</h4>
                                <p>Gambo delivery the goods</p>
                            </a>
                            <a href="#" class="press-item">
                                <span>May 12, 2020</span>
                                <h4>Business Standred</h4>
                                <p>Gambo targets $20 million revenue in 2020</p>
                            </a>
                            <a href="#" class="press-item">
                                <span>May 8, 2020</span>
                                <h4>Tech Asia</h4>
                                <p>Gambo’s secret to handling 5,000 orders a day</p>
                            </a>
                            <a href="#" class="press-item">
                                <span>May 5, 2020</span>
                                <h4>Your Story</h4>
                                <p>Ludhiana-based online grocery firm gambo is set to create an organic revolution in india</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('front_layout.footer')
        @include('front_layout.javascript')
    </body>
</html>

