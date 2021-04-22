<!-- Sidenav -->
<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
        <!-- Brand -->
        <div class="sidenav-header  align-items-center">
            <a class="navbar-brand text-primary" href="javascript:void(0)">
                Synetoss Grocery
            </a>
        </div>
        <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Nav items -->
                <div class="row nav-item" style="background-color: #f6f9fc">
                    <a class="nav-link">
                    <span class="nav-link-text">MAIN NAVIGATION</span>
                    </a>
                </div>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a @if(request()->route()->getName() == 'Dashboard') class="nav-link active" @else class="nav-link" @endif href="/">
                        <i class="ni ni-compass-04 text-info"></i>
                        <span class="nav-link-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a @if(request()->route()->getName() == "Categories") class="nav-link active" @else class="nav-link" @endif href="/categories">
                        <i class="fa fa-bars text-primary"></i>
                        <span class="nav-link-text">Categories</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a @if(request()->route()->getName() == "Items") class="nav-link active" @else class="nav-link" @endif href="/items">
                        <i class="fa fa-plus text-primary"></i>
                        <span class="nav-link-text">Items</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#promotions" data-toggle="collapse" aria-expanded="false" @if(request()->route()->getName() == "Promotion Banners") class="nav-link dropdown-toggle active" @else class="nav-link" @endif">
                            <i class="fa fa-bullseye text-red"></i>
                            <span class="nav-link-text">Promotions</span>
                        </a>
                        <ul class="collapse list-unstyled" id="promotions">
                            <li>
                                <a @if(request()->route()->getName() == "Promotion Banners") class="nav-link active" @else class="nav-link" @endif href="/banners">
                                <i class="fa fa-bullhorn text-warning"></i>
                                <span class="nav-link-text">Promotion Banners</span>
                                </a>
                            </li>
                            <li>
                                <a @if(request()->route()->getName() == "Pincodes") class="nav-link active" @else class="nav-link" @endif href="/pin-codes">
                                <i class="fa fa-map-pin text-dark"></i>
                                <span class="nav-link-text">Pincodes</span>
                                </a>
                            </li>
                            <li>
                            <a @if(request()->route()->getName() == "Promocodes") class="nav-link active" @else class="nav-link" @endif href="/promocode">
                            <i class="fa fa-tag text-primary"></i>
                            <span class="nav-link-text">Promocodes</span>
                            </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a @if(request()->route()->getName()=='Drivers') class="nav-link active" @else class="nav-link" @endif href="/drivers">
                        <i class="fa fa-car text-primary"></i>
                        <span class="nav-link-text">Drivers</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a @if(request()->route()->getName() == "Working Hours") class="nav-link active" @else class="nav-link" @endif href="/working-hours">
                        <i class="fa fa-clock-o text-yellow"></i>
                        <span class="nav-link-text">Working Hours</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a @if(request()->route()->getName() == "Payment Methods") class="nav-link active" @else class="nav-link" @endif href="/payment-methods">
                        <i class="fa fa-usd text-pink"></i>
                        <span class="nav-link-text">Payment Methods</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a @if(request()->route()->getName() == "Orders") class="nav-link active" @else class="nav-link" @endif href="/orders">
                        <i class="fa fa-shopping-cart text-green"></i>
                        <span class="nav-link-text">Orders</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a @if(request()->route()->getName() == "Users") class="nav-link active" @else class="nav-link" @endif href="/users">
                        <i class="fa fa-users text-primary"></i>
                        <span class="nav-link-text">Users</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a @if(request()->route()->getName() == "Reviews") class="nav-link active" @else class="nav-link" @endif href="/review">
                        <i class="fa fa-star text-info"></i>
                        <span class="nav-link-text">Reviews</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a @if(request()->route()->getName() == "Inquiries") class="nav-link active" @else class="nav-link" @endif href="/inquiries">
                        <i class="fa fa-envelope text-danger"></i>
                        <span class="nav-link-text">Inquiries</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#marketing" data-toggle="collapse" aria-expanded="false" class="nav-link dropdown-toggle">
                            <i class="fa fa-share-alt fa-fw text-info"></i>
                            <span class="nav-link-text">Marketing</span>
                        </a>
                        <ul class="collapse list-unstyled" id="marketing">
                            <li>
                                <a href="/marketing" class="nav-link">Marketing</a>
                            </li>
                            <li>
                                <a href="/news-letter-subscriber" class="nav-link">Newsletter Subscribers</a>
                            </li>
                            <li>
                                <a href="/mail" class="nav-link">Mail</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#promotions" data-toggle="collapse" aria-expanded="false" class="nav-link dropdown-toggle active">
                            <i class="fa fa-edit text-yellow"></i>
                            <span class="nav-link-text">CMS Pages</span>
                        </a>
                        <ul class="collapse list-unstyled" id="promotions">
                            <li>
                                <a href="/private-policy" class="nav-link">Private Policy</a>
                            </li>
                            <li>
                                <a href="/terms-and-conditions" class="nav-link">Terms & Conditions</a>
                            </li>
                            <li>
                                <a href="/about" class="nav-link">About Us</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>