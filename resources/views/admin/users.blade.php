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
                        <div class="col-lg-12 col-sm-12 col-md-12">
                            <table id="dtOrderExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th class="th-sm">#</th>
                                        <th class="th-sm">Profile Image</th>
                                        <th class="th-sm">Name</th>
                                        <th class="th-sm">Email</th>
                                        <th class="th-sm">Mobile</th>
                                        <th class="th-sm">Login With</th>
                                        <th class="th-sm">OTP Verification Status</th>
                                        <th class="th-sm">Created at</th>
                                        <th class="th-sm">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($getusers as $i=>$users)
                                        <tr>
                                            <td>{{ $i+1 }}</td>
                                            <td><img src="{{ asset('images/'.$users->profile_image) }}" style="width:30px"/></td>
                                            <td>{{ $users->name }}</td>
                                            <td>{{ $users->email }}</td>
                                            <td>{{ $users->mobile }}</td>
                                            <td>
                                                @if($users->login_type == "facebook")
                                                    Facebook
                                                @elseif($users->login_type == "google")
                                                    Google
                                                @else
                                                    Email
                                                @endif
                                            </td>
                                            <td>
                                                @if($users->is_verified == "1")
                                                    Verified
                                                @else
                                                    Unverified
                                                @endif
                                            </td>
                                            <td>{{$users->created_at}}</td>
                                            <td>
                                                <button class="btn btn-sm btn-primary"> <i class="fa fa-eye"></i> view</button>
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