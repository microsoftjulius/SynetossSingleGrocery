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
                @include('layouts.admin-partials.edit_modals')
                <div class="row card mb-6">
                    <div class="col-lg-12 mt-4">
                        <div class="row mb-4 text-right">
                            <div class="col-lg-4"></div>
                            <div class="col-lg-4"></div>
                            <div class="col-lg-4 col-md-4 col-sm4">
                                <button class="btn btn-md btn-primary" type="button" data-toggle="modal" data-target="#exampleModalCenter"> Add Category</button>
                            </div>
                        </div>
                        <div class="col-lg-12 col-sm-12 col-md-12">
                            <table id="dtOrderExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th class="th-sm">#</th>
                                        <th class="th-sm">Image</th>
                                        <th class="th-sm">Category Name</th>
                                        <th class="th-sm">Created at</th>
                                        <th class="th-sm">Status</th>
                                        <th class="th-sm">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($getcategory as $i=>$category)
                                        <tr>
                                            <td>{{ $i+1 }}</td>
                                            <td><img src="{{ asset('images/category/'.$category->image) }}" style="width:100px"/></td>
                                            <td>{{ $category->category_name }}</td>
                                            <td>{{ $category->created_at }}</td>
                                            <td>
                                                @if($category->is_vailable == 1)    
                                                {{ 'Available' }}
                                                @else
                                                {{ 'Out of Stock' }}
                                                @endif
                                            
                                            </td>
                                            <td>
                                                <a href="/customers/edit/{{ $category->id}}"><button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-categories"> <i class="fa fa-edit"></i></button></a>
                                                <a href="/delete-category/{{ $category->id }}"><button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-customer"> <i class="fa fa-trash"></i></button></a>
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
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <form action="/create-category" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Add New Category</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            <label for="categoryName">Category Name</label>
                            <input type="text" name="category_name" id="" class="form-control">
                            <label for="image">Image</label>
                            <input type="file" name="image" id="" class="form-control">
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
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