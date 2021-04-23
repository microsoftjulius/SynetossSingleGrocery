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
                            <div class="col-lg-4">
                            <button class="btn btn-md btn-primary" type="button" data-toggle="modal" data-target="#modal-items"> edit</button>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm4">
                                <button class="btn btn-md btn-primary" type="button" data-toggle="modal" data-target="#exampleModalCenter"> Add Item</button>
                            </div>
                        </div>
                        <div class="col-lg-12 col-sm-12 col-md-12">
                            <table id="dtOrderExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th class="th-sm">#</th>
                                        <th class="th-sm">Category</th>
                                        <th class="th-sm">Product Name</th>
                                        <th class="th-sm">Variation</th>
                                        <th class="th-sm">Stock</th>
                                        <th class="th-sm">Price</th>
                                        <th class="th-sm">Status</th>
                                        <th class="th-sm">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($getitem as $i=>$item)
                                        <tr>
                                            <td>{{ $i+1 }}</td>
                                            <td>{{ $item->category->category_name }}</td>
                                            <td>{{ $item->item_name }}</td>
                                            <td>{{ $item->variation[0]->weight }}</td>
                                            <td>
                                                {{ number_format($item->variation[0]->stock) }}
                                            </td>
                                            <td>
                                                {{ number_format($item->variation[0]->price) }}
                                            </td>
                                            <td>
                                                @if($item->item_status == 1)    
                                                {{ 'Available' }}
                                                @else
                                                {{ 'Out of Stock' }}
                                                @endif
                                            
                                            </td>
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
            <form action="/create-item" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Add New Item</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            <label for="Category">Category:</label>
                                <select name="category_id" id="" class="form-control" required>
                                    <option value="">Select Category</option>
                                    @foreach ($getcategory as $category)
                                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                    @endforeach
                                </select>
                            <label for="itemName">Item Name:</label>
                            <input type="text" name="item_name" id="" class="form-control" placeholder="Item Name" required>

                            <label for="deliveryTime">Delivery time:</label>
                            <input type="text" name="delivery_time" id="" class="form-control" placeholder="Delivery Time" required>
                            <div class="row">
                                <div class="col-lg-4">
                                    <label for="Price">Price:</label>
                                    <input type="text" name="price[]" id="" class="form-control" placeholder="Price" required>
                                </div>
                                <div class="col-lg-4">
                                    <label for="Price">Variation:</label>
                                    <input type="text" name="weight[]" id="" class="form-control" placeholder="Variation" required>
                                </div>
                                <div class="col-lg-4">
                                    <label for="Price">Available Stock:</label>
                                    <input type="text" name="stockqty[]" id="" class="form-control" placeholder="Enter your stock quantity" required>
                                </div>
                            </div>
                            <label for="description">Description</label>
                            <textarea name="description" id="" cols="30" rows="3" placeholder="Description"  class="form-control" required></textarea>
                            <hr>
                            <h3 class="text-muted">Product information</h3>
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="Brand">Brand</label>
                                    <input type="text" name="brand" id="" class="form-control" placeholder="Brand" required>
                                </div>
                                <div class="col-lg-6">
                                    <label for="Manufacturer">Manufacturer</label>
                                    <input type="text" name="manufacturer" id="" class="form-control" placeholder="Manufacturer" required>
                                </div>
                                <div class="col-lg-6">
                                    <label for="countryOfOrigin">Country Of Origin</label>
                                    <input type="text" name="country_origin" id="" class="form-control" placeholder="Country of origin" required>
                                </div>
                                <div class="col-lg-6">
                                    <label for="ingredientType">Ingredient Type</label>
                                    <input type="text" name="ingredient_type" id="" class="form-control" placeholder="Ingredient type" required>
                                </div>
                            </div>
                            <label for="items">Select Items</label>
                            <input type="file" name="file[]" id="items" class="form-control" accept=".jpg, .jpeg, .png, .mp4" required>
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