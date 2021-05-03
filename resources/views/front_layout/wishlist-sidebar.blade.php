<div class="left-side-tabs">
    <div class="dashboard-left-links">
        <a href="/customer-dashboard" ><span @if(request()->route()->getName() == "Dashboard Overview") class="user-item active" @else  class="user-item" @endif><i class="uil uil-apps"></i>Overview</span></a>
        <a href="/my_orders"> <span @if(request()->route()->getName() == "Dashboard My Orders") class="user-item active" @else  class="user-item" @endif><i class="uil uil-box"></i>My Orders</span></a>
        <a href="/dashboard_my_rewards"> <span @if(request()->route()->getName() == "My Rewards") class="user-item active" @else  class="user-item" @endif><i class="uil uil-gift"></i>My Rewards</span></a>
        <a href="/dashboard_my_wallet"> <span @if(request()->route()->getName() == "My Wallet") class="user-item active" @else  class="user-item" @endif><i class="uil uil-wallet"></i>My Wallet</span></a>
        <a href="/dashboard_my_wishlist"> <span @if(request()->route()->getName() == "My Wishlist") class="user-item active" @else  class="user-item" @endif><i class="uil uil-heart"></i>Shopping Wishlist</span></a>
        <a href="/dashboard_my_addresses"> <span @if(request()->route()->getName() == "My Address") class="user-item active" @else  class="user-item" @endif><i class="uil uil-location-point"></i>My Address</span></a>
        <a href="/sign_in" class="user-item"> <i class="uil uil-exit"></i>Logout</a>
    </div>
</div>

