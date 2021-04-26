<div class="sub-header-group">
<div class="sub-header">
<div class="ui dropdown">
    <a href="#" class="category_drop hover-btn" data-toggle="modal" data-target="#category_model" title="Categories"><i class="uil uil-apps"></i><span class="cate__icon">Select Category</span></a>
</div>
<nav class="navbar navbar-expand-lg navbar-light py-3">
    <div class="container-fluid">
        <button class="navbar-toggler menu_toggle_btn" type="button" data-target="#navbarSupportedContent"><i class="uil uil-bars"></i></button>
        <div class="collapse navbar-collapse d-flex flex-column flex-lg-row flex-xl-row justify-content-lg-end bg-dark1 p-3 p-lg-0 mt1-5 mt-lg-0 mobileMenu" id="navbarSupportedContent">
            <ul class="navbar-nav main_nav align-self-stretch">
                <li class="nav-item"><a href="/" @if(request()->route()->getName() == 'Synetoss Grocery') class="nav-link active" @else class="nav-link" @endif title="Home">Home</a></li>
                <li class="nav-item"><a href="/new-products" @if(request()->route()->getName() == 'New Products') class="nav-link active" @else class="nav-link new_item" @endif title="New Products">New Products</a></li>
                <li class="nav-item"><a href="/featured-products" @if(request()->route()->getName() == 'Featured Products') class="nav-link active" @else class="nav-link" @endif title="Featured Products">Featured Products</a></li>
                <li class="nav-item">
                    <div class="ui icon top left dropdown nav__menu">
                        <a class="nav-link" title="Pages">Pages <i class="uil uil-angle-down"></i></a>
                        <div class="menu dropdown_page">
                            <a href="/dashboard_overview" class="item channel_item page__links">Account</a>
                            <a href="/about_us" class="item channel_item page__links">About Us</a>
                            <a href="/checkout" class="item channel_item page__links">Checkout</a>
                            <a href="/request_product" class="item channel_item page__links">Product Request</a>
                            <a href="/order_placed" class="item channel_item page__links">Order Placed</a>
                            <a href="/bill" class="item channel_item page__links">Bill Slip</a>
                            <a href="/sign_in" class="item channel_item page__links">Sign In</a>
                            <a href="/sign_up" class="item channel_item page__links">Sign Up</a>
                            <a href="/forgot_password" class="item channel_item page__links">Forgot Password</a>
                            <a href="/contact_us" class="item channel_item page__links">Contact Us</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="ui icon top left dropdown nav__menu">
                        <a class="nav-link" title="Blog">Blog <i class="uil uil-angle-down"></i></a>
                        <div class="menu dropdown_page">
                            <a href="/our_blog" class="item channel_item page__links">Our Blog</a>
                            <a href="/blog_detail_view" class="item channel_item page__links">Blog Details View</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item"><a href="/contact_us" class="nav-link" title="Contact">Contact Us</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="catey__icon">
    <a href="#" class="cate__btn" data-toggle="modal" data-target="#category_model" title="Categories"><i class="uil uil-apps"></i></a>
</div>
<div class="header_cart order-1">
    <a href="#" class="cart__btn hover-btn pull-bs-canvas-left" title="Cart"><i class="uil uil-shopping-cart-alt"></i><span>Cart</span><ins>{{ $user_cart }}</ins><i class="uil uil-angle-down"></i></a>
</div>
<div class="search__icon order-1">
    <a href="#" class="search__btn hover-btn" data-toggle="modal" data-target="#search_model" title="Search"><i class="uil uil-search"></i></a>
</div>

