<div class="top-header-group">
    <div class="top-header">
        <div class="res_main_logo">
            <a href="/"><img src="{{ asset('front_pages/images/dark-logo-1.svg')}}" alt=""></a>
        </div>
        <div class="main_logo" id="logo">
            <a href="/"><img src="{{ asset('front_pages/images/logo.svg')}}" alt=""></a>
            <a href="/"><img class="logo-inverse" src="{{ asset('front_pages/images/dark-logo.svg')}}" alt=""></a>
        </div>
        <div class="select_location">
            <div class="ui inline dropdown loc-title">
                <div class="text">
                    <i class="uil uil-location-point"></i>
                    Gurugram
                </div>
                <i class="uil uil-angle-down icon__14"></i>
                <div class="menu dropdown_loc">
                    <div class="item channel_item">
                        <i class="uil uil-location-point"></i>
                        Gurugram
                    </div>
                    <div class="item channel_item">
                        <i class="uil uil-location-point"></i>
                        New Delhi
                    </div>
                    <div class="item channel_item">
                        <i class="uil uil-location-point"></i>
                        Bangaluru
                    </div>
                    <div class="item channel_item">
                        <i class="uil uil-location-point"></i>
                        Mumbai
                    </div>
                    <div class="item channel_item">
                        <i class="uil uil-location-point"></i>
                        Hyderabad
                    </div>
                    <div class="item channel_item">
                        <i class="uil uil-location-point"></i>
                        Kolkata
                    </div>
                    <div class="item channel_item">
                        <i class="uil uil-location-point"></i>
                        Ludhiana
                    </div>
                    <div class="item channel_item">
                        <i class="uil uil-location-point"></i>
                        Chandigrah
                    </div>
                </div>
            </div>
        </div>
        <div class="search120">
            <div class="ui search">
                <div class="ui left icon input swdh10">
                    <input class="prompt srch10" type="text" placeholder="Search for products..">
                    <i class='uil uil-search-alt icon icon1'></i>
                </div>
            </div>
        </div>
        <div class="header_right">
            <ul>
                <li>
                    <a href="#" class="offer-link"><i class="uil uil-phone-alt"></i>1800-000-000</a>
                </li>
                <li>
                    <a href="/offers" class="offer-link"><i class="uil uil-gift"></i>Offers</a>
                </li>
                <li>
                    <a href="/faq" class="offer-link"><i class="uil uil-question-circle"></i>Help</a>
                </li>
                <li>
                    <a href="/dashboard_my_wishlist" class="option_links" title="Wishlist"><i class='uil uil-heart icon_wishlist'></i><span class="noti_count1">3</span></a>
                </li>
                <li class="ui dropdown">
                    <a href="#" class="opts_account">
                    <img src="{{ asset('front_pages/images/avatar/img-5.jpg')}}" alt="">
                    <span class="user__name">
                        @if(empty(auth()->user()->name))
                            {{ 'Account' }}
                        @else
                            {{ auth()->user()->name }}
                        @endif
                    </span>
                    <i class="uil uil-angle-down"></i>
                    </a>
                    <div class="menu dropdown_account">
                        <div class="night_mode_switch__btn">
                            <a href="#" id="night-mode" class="btn-night-mode">
                            <i class="uil uil-moon"></i> Night mode
                            <span class="btn-night-mode-switch">
                            <span class="uk-switch-button"></span>
                            </span>
                            </a>
                        </div>
                        <a href="/dashboard_overview" class="item channel_item"><i class="uil uil-apps icon__1"></i>Dashbaord</a>
                        <a href="/my_orders" class="item channel_item"><i class="uil uil-box icon__1"></i>My Orders</a>
                        <a href="/dashboard_my_wishlist" class="item channel_item"><i class="uil uil-heart icon__1"></i>My Wishlist</a>
                        <a href="/dashboard_my_wallet" class="item channel_item"><i class="uil uil-usd-circle icon__1"></i>My Wallet</a>
                        <a href="/dashboard_my_addresses" class="item channel_item"><i class="uil uil-location-point icon__1"></i>My Address</a>
                        <a href="/offers" class="item channel_item"><i class="uil uil-gift icon__1"></i>Offers</a>
                        <a href="/faq" class="item channel_item"><i class="uil uil-info-circle icon__1"></i>Faq</a>
                        @if(empty(auth()->user()->name))
                        <a href="/login" class="item channel_item"><i class="uil uil-lock-alt icon__1"></i>Login</a>
                        @else
                        <a href="/logoutUser" class="item channel_item"><i class="uil uil-lock-alt icon__1"></i>Logout</a>
                        @endif

                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>