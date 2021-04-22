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
                @include('layouts.admin-partials.edit_modals')
                <div class="row card">
                    <div class="col-lg-12 mt-4">
                        <div class="row mb-4 text-right">
                            <div class="col-lg-4"></div>
                            <div class="col-lg-4"></div>
                            <div class="col-lg-4 col-md-4 col-sm4">
                                <button class="btn btn-md btn-primary" type="button" data-toggle="modal" data-target="#exampleModalCenter">Add Pincode</button>
                            </div>
                        </div>
                        <div class="col-lg-12 col-sm-12 col-md-12">
                            <table id="dtOrderExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th class="th-sm">#</th>
                                        <th class="th-sm">PinCode</th>
                                        <th class="th-sm">Created At</th>
                                        <th class="th-sm">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($getpincode as $i=>$item)
                                        <tr>
                                            <td>{{ $i+1 }}</td>
                                            <td>{{ $item->pincode }}</td>
                                            <td>{{ $item->created_at }}</td>
                                            <td>
                                                <a href="/customers/edit/{{ $item->id}}"><button class="btn btn-sm btn-primary"> <i class="fa fa-edit"></i></button></a>
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
            <form action="/create-pincode" method="get">
                @csrf
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Add Pincode</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            <label for="Category">PinCode:</label>
                            <input type="text" name="pincode" id="" class="form-control">
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