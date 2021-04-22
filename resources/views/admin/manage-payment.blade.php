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
                <div class="row card">
                    <div class="col-lg-12 mt-4">
                        <div class="col-lg-12 col-sm-12 col-md-12 mb-6">
                            <form action="/update-payment" method="GET">
                                    <h3>{{ $paymentdetails->payment_name }}</h3>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Environment</label>
                                        <select name="" id="" class="form-control">
                                            <option value="">Choose </option>
                                            <option value="Sandbox">Sandbox</option>
                                            <option value="Production">Production</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <label for="stripeTestPublicKey">Stripe Test Public Key</label>
                                                <input type="text" name="test_public_key" id="" class="form-control" required value="{{ $paymentdetails->test_public_key }}">
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="stripeTestPublicKey">Stripe Test Secrete Key</label>
                                                <input type="text" name="test_secret_key" id="" class="form-control" required value="{{ $paymentdetails->test_secret_key }}">
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="stripeTestPublicKey">Stripe Live Public Key</label>
                                                <input type="text" name="live_public_key" id="" required class="form-control" value="{{ $paymentdetails->live_public_key }}">
                                            </div>
                                            <input type="hidden" name="id" id="" class="form-control" value="{{ $paymentdetails->id }}">
                                            <div class="col-lg-6">
                                                <label for="stripeTestPublicKey">Stripe Live Secrete Key</label>
                                                <input type="text" name="live_secret_key" id="" class="form-control" required value="{{ $paymentdetails->live_secret_key }}">
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Update</button>
                            </form>
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