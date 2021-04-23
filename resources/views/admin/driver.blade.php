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
                        <div class="row mb-4 text-right">
                            <div class="col-lg-4"></div>
                            <div class="col-lg-4"></div>
                            <div class="col-lg-4 col-md-4 col-sm4">
                                <button class="btn btn-md btn-primary" type="button" data-toggle="modal" data-target="#exampleModalCenter"> Add driver</button>
                            </div>
                        </div>
                        <div class="col-lg-12 col-sm-12 col-md-12">
                            <table id="dtOrderExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th class="th-sm">#</th>
                                        <th class="th-sm">Profile Image</th>
                                        <th class="th-sm">Name</th>
                                        <th class="th-sm">Email</th>
                                        <th class="th-sm">Mobile</th>
                                        <th class="th-sm">Created at</th>
                                        <th class="th-sm">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($getdriver as $i=>$driver)
                                        <tr>
                                            <td>{{ $i+1 }}</td>
                                            <td><img src="{{ asset('images/'.$driver->profile_image) }}" style="width:30px"/></td>
                                            <td>{{ $driver->name }}</td>
                                            <td>{{ $driver->email }}</td>
                                            <td>
                                                {{ $driver->mobile }}
                                            </td>
                                            <td>
                                                {{ $driver->created_at }}
                                            </td>
                                            <td>
                                                <a href="/customers/edit/{{ $driver->id}}"><button class="btn btn-sm btn-primary"> <i class="fa fa-edit"></i></button></a>
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
        <!-- Modal -->
        <div class="modal fade modal-md" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <form action="/create-driver" method="GET">
                @csrf
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Add New driver</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            <label for="driverName">Driver Name:</label>
                            <input type="text" name="name" id="" class="form-control" placeholder="driver Name" required>
                            <label for="email">Email</label>
                            <input type="text" name="email" id="" class="form-control" required autocomplete="off" placeholder="email">
                            <label for="mobile">Mobile</label>
                            <input type="text" name="mobile" id="" class="form-control" required autocomplete="off" placeholder="mobile">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="" class="form-control" required autocomplete="off" placeholder="password">
                            
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </div>
            </form>
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