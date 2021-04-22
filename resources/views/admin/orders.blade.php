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
            <div class="container-fluid mt--2">
                @include('layouts.admin-partials.messages')
                <div class="row card">
                    <div class="col-lg-12 mt-4">
                        <div class="col-lg-12 col-sm-12 col-md-12">
                            <table id="dtOrderExample" class="table table-striped table-responsive table-bordered table-sm" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th class="th-sm">#</th>
                                        <th class="th-sm">User Name</th>
                                        <th class="th-sm">Order Number</th>
                                        <th class="th-sm">Payment Type</th>
                                        <th class="th-sm">Payment Id</th>
                                        <th class="th-sm">Order Status</th>
                                        <th class="th-sm">Order Assigned To</th>
                                        <th class="th-sm">Order Type</th>
                                        <th class="th-sm">Order Date</th>
                                        <th class="th-sm">Change Order Status</th>
                                        <th class="th-sm">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($getorders as $i=>$orders)
                                        <tr>
                                            <td>{{ $i+1 }}</td>
                                            <td>{{ $orders['users']->name }}</td>
                                            <td>{{ $orders->order_number }}</td>
                                            <td>
                                                @if($orders->payment_type =='0')
                                                    COD
                                                @elseif($orders->payment_type =='1')
                                                    RazorPay
                                                @elseif($orders->payment_type =='2')
                                                    Stripe
                                                @elseif($orders->payment_type =='3')
                                                    Wallet
                                                @endif
                                            </td>
                                            <td>
                                                @if($orders->razorpay_payment_id == '')
                                                    --
                                                @else
                                                    {{$orders->razorpay_payment_id}}
                                                @endif
                                            </td>
                                            <td>
                                                @if($orders->status == '1')
                                                    Order Received
                                                @elseif ($orders->status == '2')
                                                    On the way
                                                @elseif ($orders->status == '3')
                                                    Assigned to Driver
                                                @elseif ($orders->status == '4')
                                                    Delivered
                                                @elseif ($orders->status == '5')
                                                    Cancelled by User
                                                @elseif ($orders->status == '6')
                                                    Cancelled by Admin
                                                @endif
                                            </td>
                                            <td>
                                                @if ($orders->name == "")
                                                    --
                                                @else
                                                    {{$orders->name}}
                                                @endif
                                            </td>
                                            <td>
                                                @if($orders->order_type == 1)
                                                    Delivery
                                                @else
                                                    Pickup
                                                @endif
                                            </td>
                                            <td>
                                                @if($orders->ordered_date > $date)
                                                    {{$orders->ordered_date}} <br>
                                                    <span class="badge badge-info">Future Order</span>
                                                @else
                                                    {{$orders->ordered_date}}
                                                @endif
                                            </td>
                                            <td>
                                                {{$orders->status}}
                                            </td>
                                            <td>
                                                <button class="btn btn-sm btn-primary"> <i class="fa fa-edit"></i></button>
                                                <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-customer"> <i class="fa fa-trash"></i></button>
                                            </td>
                                        </tr>
                                    @endforeach
                            </table>
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