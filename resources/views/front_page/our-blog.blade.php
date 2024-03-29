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
                                        <a class="nav-item nav-link active" href="/our_blog">Blog</a>
                                        <a class="nav-item nav-link" href="/career">Careers</a>
                                        <a class="nav-item nav-link" href="/press">Press</a>
                                    </div>
                                </nav>
                            </div>
                            <div class="title129">
                                <h2>Insights, ideas, and stories</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog-gambo">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-5">
                            <div class="pdpt-bg-left mt-0">
                                <div class="pdpt-title">
                                    <h4>Most Viewed Posts</h4>
                                </div>
                                <ul class="top-posts">
                                    <li>
                                        <div class="blog-top-item">
                                            <a href="blog_detail_view.html" class="top-post-link">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                                            <span class="blog-time">8 May, 2020</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="blog-top-item">
                                            <a href="blog_detail_view.html" class="top-post-link">Vestibulum venenatis sem eu venenatis vulputate.</a>
                                            <span class="blog-time">7 May, 2020</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="blog-top-item">
                                            <a href="blog_detail_view.html" class="top-post-link">In ac diam vitae ex luctus viverra eu eu quam.</a>
                                            <span class="blog-time">4 May, 2020</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="blog-top-item">
                                            <a href="blog_detail_view.html" class="top-post-link">Nullam commodo felis sed lacus lobortis ullamcorper.</a>
                                            <span class="blog-time">3 May, 2020</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="blog-top-item">
                                            <a href="blog_detail_view.html" class="top-post-link">Aenean vel ligula pulvinar, ornare urna sed, luctus lacus.</a>
                                            <span class="blog-time">2 May, 2020</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="pdpt-bg-left mb-30">
                                <div class="pdpt-title">
                                    <h4>Contact With Us</h4>
                                </div>
                                <div class="cntct-social">
                                    <ul class="team-social">
                                        <li><a href="#" class="scl-btn hover-btn"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#" class="scl-btn hover-btn"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#" class="scl-btn hover-btn"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#" class="scl-btn hover-btn"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#" class="scl-btn hover-btn"><i class="fab fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-7">
                            <div class="blog-item">
                                <a href="blog_detail_view.html" class="blog-img">
                                    <img src="{{asset('front_pages/images/blog/img-1.jpg')}}" alt="">
                                    <div class="blog-cate-badge">Food & Life Style</div>
                                </a>
                                <div class="date-icons-group">
                                    <div class="blog-time sz-14">15 May, 2020</div>
                                    <ul class="like-share-icons">
                                        <li>
                                            <a href="#" class="like-share"><i class="uil uil-thumbs-up"></i><span>5</span></a>
                                        </li>
                                        <li>
                                            <a href="#" class="like-share"><i class="uil uil-share-alt"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="blog-detail">
                                    <h4>Blog Title Here</h4>
                                    <p>Maecenas viverra odio sed mauris mattis blandit. Nullam et dolor vitae erat scelerisque vulputate. Maecenas felis arcu, pulvinar id cursus eget, ultrices ac metus. Mauris condimentum tortor sapien, laoreet ornare nibh iaculis eu. Donec posuere ipsum at malesuada egestas. Pellentesque accumsan lacus urna, sed suscipit ipsum bibendum sit amet.</p>
                                    <a href="blog_detail_view.html">Read More</a>
                                </div>
                            </div>
                            <div class="blog-item">
                                <a href="blog_detail_view.html" class="blog-img">
                                    <img src="{{asset('front_pages/images/blog/img-2.jpg')}}" alt="">
                                    <div class="blog-cate-badge">Food & Life Style</div>
                                </a>
                                <div class="date-icons-group">
                                    <div class="blog-time sz-14">14 May, 2020</div>
                                    <ul class="like-share-icons">
                                        <li>
                                            <a href="#" class="like-share"><i class="uil uil-thumbs-up"></i><span>10</span></a>
                                        </li>
                                        <li>
                                            <a href="#" class="like-share"><i class="uil uil-share-alt"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="blog-detail">
                                    <h4>Blog Title Here</h4>
                                    <p>Maecenas viverra odio sed mauris mattis blandit. Nullam et dolor vitae erat scelerisque vulputate. Maecenas felis arcu, pulvinar id cursus eget, ultrices ac metus. Mauris condimentum tortor sapien, laoreet ornare nibh iaculis eu. Donec posuere ipsum at malesuada egestas. Pellentesque accumsan lacus urna, sed suscipit ipsum bibendum sit amet.</p>
                                    <a href="blog_detail_view.html">Read More</a>
                                </div>
                            </div>
                            <div class="blog-item">
                                <a href="blog_detail_view.html" class="blog-img">
                                    <img src="{{asset('front_pages/images/blog/img-3.jpg')}}" alt="">
                                    <div class="blog-cate-badge">Food & Life Style</div>
                                </a>
                                <div class="date-icons-group">
                                    <div class="blog-time sz-14">10 May, 2020</div>
                                    <ul class="like-share-icons">
                                        <li>
                                            <a href="#" class="like-share"><i class="uil uil-thumbs-up"></i><span>25</span></a>
                                        </li>
                                        <li>
                                            <a href="#" class="like-share"><i class="uil uil-share-alt"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="blog-detail">
                                    <h4>Blog Title Here</h4>
                                    <p>Maecenas viverra odio sed mauris mattis blandit. Nullam et dolor vitae erat scelerisque vulputate. Maecenas felis arcu, pulvinar id cursus eget, ultrices ac metus. Mauris condimentum tortor sapien, laoreet ornare nibh iaculis eu. Donec posuere ipsum at malesuada egestas. Pellentesque accumsan lacus urna, sed suscipit ipsum bibendum sit amet.</p>
                                    <a href="blog_detail_view.html">Read More</a>
                                </div>
                            </div>
                            <div class="blog-more-btn">
                                <a href="#" class="blog-btn hover-btn">More View</a>
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

