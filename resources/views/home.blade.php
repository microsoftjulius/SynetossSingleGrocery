<!DOCTYPE html>
<html>
    @include('layouts.admin-partials.styling')
    <body>
        @include('layouts.admin-partials.sidebar_nav')
        <!-- Main content -->
        <div class="main-content" id="panel">
            @include('layouts.admin-partials.top_navbar')
            <!-- Header -->
            <!-- Header -->
            @include('layouts.admin-partials.breadcrumbs')
            <!-- Page content -->
            <div class="container-fluid mt--2 mb-6">
                @include('layouts.admin-partials.messages')
                <!-- Card stats -->
                <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card card-stats">
                                    <!-- Card body -->
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <h5 class="card-title text-uppercase text-muted mb-0">Categories</h5>
                                                <span class="h2 font-weight-bold mb-0">{{count($getcategory)}}</span>
                                            </div>
                                            <div class="col-auto">
                                                <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                                                    <i class="fa fa-bars"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card card-stats">
                                    <!-- Card body -->
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <h5 class="card-title text-uppercase text-muted mb-0">Items</h5>
                                                <span class="h2 font-weight-bold mb-0">{{count($getitems)}}</span>
                                            </div>
                                            <div class="col-auto">
                                                <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                                                    <i class="fa fa-cutlery"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card card-stats">
                                    <!-- Card body -->
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <h5 class="card-title text-uppercase text-muted mb-0">Drivers</h5>
                                                <span class="h2 font-weight-bold mb-0">{{count($driver)}}</span>
                                            </div>
                                            <div class="col-auto">
                                                <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                                                    <i class="fa fa-car"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card card-stats">
                                    <!-- Card body -->
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <h5 class="card-title text-uppercase text-muted mb-0">Users</h5>
                                                <span class="h2 font-weight-bold mb-0">{{count($getusers)}}</span>
                                            </div>
                                            <div class="col-auto">
                                                <div class="icon icon-shape bg-gradient-blue text-white rounded-circle shadow">
                                                    <i class="fa fa-users"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card card-stats">
                                    <!-- Card body -->
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <h5 class="card-title text-uppercase text-muted mb-0">Orders</h5>
                                                <span class="h2 font-weight-bold mb-0">{{count($getorders)}}</span>
                                            </div>
                                            <div class="col-auto">
                                                <div class="icon icon-shape bg-gradient-pink text-white rounded-circle shadow">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card card-stats">
                                    <!-- Card body -->
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <h5 class="card-title text-uppercase fw-10 text-muted mb-0">Future Orders</h5>
                                                <span class="h2 font-weight-bold mb-0">{{$future_order}}</span>
                                            </div>
                                            <div class="col-auto">
                                                <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                                                    <i class="fa fa-plus"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card card-stats">
                                    <!-- Card body -->
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <h5 class="card-title text-uppercase text-muted mb-0">Reviews</h5>
                                                <span class="h2 font-weight-bold mb-0">{{count($getreview)}}</span>
                                            </div>
                                            <div class="col-auto">
                                                <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card card-stats">
                                    <!-- Card body -->
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <h5 class="card-title text-uppercase text-muted mb-0">Promocodes</h5>
                                                <span class="h2 font-weight-bold mb-0">{{count($getpromocode)}}</span>
                                            </div>
                                            <div class="col-auto">
                                                <div class="icon icon-shape bg-gradient-yellow text-white rounded-circle shadow">
                                                    <i class="fa fa-gift"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card card-stats">
                                    <!-- Card body -->
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <h5 class="card-title text-uppercase text-muted mb-0">Tax Value</h5>
                                                <span class="h2 font-weight-bold mb-0">{{Auth::user()->currency}}{{ number_format($order_tax, 2) }}</span>
                                            </div>
                                            <div class="col-auto">
                                                <div class="icon icon-shape bg-gradient-warning text-white rounded-circle shadow">
                                                    <i class="fa fa-calculator"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card card-stats">
                                    <!-- Card body -->
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <h5 class="card-title text-uppercase text-muted mb-0">Earnings</h5>
                                                <span class="h2 font-weight-bold mb-0">{{Auth::user()->currency}}{{ number_format($order_total-$order_tax, 2) }}</span>
                                            </div>
                                            <div class="col-auto">
                                                <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                                                    <i class="fa fa-usd"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card card-stats">
                                    <!-- Card body -->
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <h5 class="card-title text-uppercase text-muted mb-0">Todays Order</h5>
                                                <span class="h2 font-weight-bold mb-0">{{$todaysorder}}</span>
                                            </div>
                                            <div class="col-auto">
                                                <div class="icon icon-shape bg-gradient-purple text-white rounded-circle shadow">
                                                    <i class="fa fa-usd"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                @include('layouts.admin-partials.footer')
            </div>
        </div>
        <!-- Argon Scripts -->
        @include('layouts.admin-partials.javascript')
        <script type="text/javascript"></script>
        <script>
            $(document).ready(function () {
            $('#dtOrderExample').DataTable({
            "order": [[ 3, "desc" ]]
            });
            $('.dataTables_length').addClass('bs-select');
            });
        </script>
    </body>
</html>
