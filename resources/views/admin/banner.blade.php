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
                                <button class="btn btn-md btn-primary" type="button" data-toggle="modal" data-target="#exampleModalCenter">Add Promotion Banner</button>
                            </div>
                        </div>
                        <div class="col-lg-12 col-sm-12 col-md-12">
                            <table id="dtOrderExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th class="th-sm">#</th>
                                        <th class="th-sm">Image</th>
                                        <th class="th-sm">Item Name</th>
                                        <th class="th-sm">Promotion Run Upto</th>
                                        <th class="th-sm">Created At</th>
                                        <th class="th-sm">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($getbanner as $i=>$item)
                                        <tr>
                                            <td>{{ $i+1 }}</td>
                                            <td><img src="{{ asset('images/banner/'.$item->image) }}" style="width:50px; height:50px"/></td>
                                            <td>{{ $item->item_name }}</td>
                                            <td>{{ $item->promotion_runs_upto }}</td>
                                            <td>{{ $item->created_at }}</td>
                                            <td>
                                                <a href="/customers/edit/{{ $item->id}}"><button class="btn btn-sm btn-primary"> <i class="fa fa-edit"></i></button></a>
                                                <a href="/delete-promotion-banner/{{ $item->id }}"><button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-customer"> <i class="fa fa-trash"></i></button></a>
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
            <form action="/create-promotion-banner" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Add Promotion Banner</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            <label for="Category">Image:</label>
                            <input type="file" name="image" id="" class="form-control">
                            <label for="ice-cream-choice">Item:</label>
                            <input list="ice-cream-flavors" id="ice-cream-choice" name="item_name" class="form-control"/>
                                <datalist id="ice-cream-flavors">
                                    @foreach ($getitem as $item)
                                        <option value="{{ $item->item_name }}">{{ $item->item_name }}</option>
                                    @endforeach
                                </datalist>
                            <label for="PromotionRunsUpto">Promotion Runs Upto</label>
                            <input type="date" name="promotion_runs_upto" id="" class="form-control" required>
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