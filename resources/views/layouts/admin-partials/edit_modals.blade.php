<div class="col-lg-4">
<!--Start of editing category form-->
@if(request()->route()->getName() == "Categories")
    <div class="modal fade" id="modal-categories" tabindex="-1" role="dialog" aria-labelledby="modal-categories" aria-hidden="true">
        <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="card bg-secondary border-0 mb-0">
                        <div class="card-header bg-transparent pb-5">
                            <div class="text-muted text-center mt-2 mb-3"><small>Edit Category</small></div>
                        </div>
                        <div class="card-body px-lg-5 py-lg-5">
                            <form role="form">
                                <div class="form-group mb-3">
                                <label for="exampleFormControlInput1">Category Name</label>
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <input class="form-control" placeholder="" type="text" name="category_name" />
                                    </div>
                                </div>
                                <div class="form-group">
                                <label for="exampleFormControlInput1">Image</label>
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <input class="form-control" placeholder="" name="image" type="file" />
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="button" class="btn btn-primary my-4">Save Changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end of category form-->
    <!--start of editing items form-->
    @elseif(request()->route()->getName() == "Items")
    <div class="modal fade" id="modal-items" tabindex="-1" role="dialog" aria-labelledby="modal-items" aria-hidden="true">
        <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="card bg-secondary border-0 mb-0">
                        <div class="card-header bg-transparent pb-5">
                            <div class="text-muted text-center mt-2 mb-3"><small>Edit Item</small></div>
                        </div>
                        <div class="card-body px-lg-5 py-lg-5">
                            <form role="form">
                                <div class="form-group mb-3">
                                <label for="exampleFormControlInput1">Item Name</label>
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <input class="form-control" placeholder="" type="text" name="item_name" />
                                    </div>
                                </div>
                                <div class="form-group">
                                <label for="exampleFormControlInput1">Description</label>
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <input class="form-control" placeholder="" name="item_description" type="text" />
                                    </div>
                                </div>
                                <div class="form-group">
                                <label for="exampleFormControlInput1">Brand</label>
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <input class="form-control" placeholder="" name="brand" type="text" />
                                    </div>
                                </div>
                                <div class="form-group">
                                <label for="exampleFormControlInput1">Manufucturer</label>
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <input class="form-control" placeholder="" name="manufacturer" type="text" />
                                    </div>
                                </div>
                                <div class="form-group">
                                <label for="exampleFormControlInput1">Origin</label>
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <input class="form-control" placeholder="" name="country_origin" type="text" />
                                    </div>
                                </div>
                                <div class="form-group">
                                <label for="exampleFormControlInput1">Ingredient Type</label>
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <input class="form-control" placeholder="" name="ingredient_type" type="text" />
                                    </div>
                                </div>
                                <div class="form-group">
                                <label for="exampleFormControlInput1">Delivery Time</label>
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <input class="form-control" placeholder="" name="delivery_time" type="text" />
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="button" class="btn btn-primary my-4">Save Changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end of editing items form-->
    <!--Start of editing promotion banners form-->
    @elseif(request()->route()->getName() == "Promotion Banners")
    <div class="modal fade" id="modal-promotionbanner" tabindex="-1" role="dialog" aria-labelledby="modal-promotionbanner" aria-hidden="true">
        <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="card bg-secondary border-0 mb-0">
                        <div class="card-header bg-transparent pb-5">
                            <div class="text-muted text-center mt-2 mb-3"><small>Edit Promotion Banner</small></div>
                        </div>
                        <div class="card-body px-lg-5 py-lg-5">
                            <form role="form">
                                <div class="form-group mb-3">
                                <label for="exampleFormControlInput1">Image</label>
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <input class="form-control" placeholder="" type="file" name="image" />
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="button" class="btn btn-primary my-4">Save Changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of promotion Banners Form-->
    <!--Pincodes edit form start-->
    @elseif(request()->route()->getName() == "Pincodes")
    <div class="modal fade" id="modal-pincode" tabindex="-1" role="dialog" aria-labelledby="modal-pincode" aria-hidden="true">
        <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="card bg-secondary border-0 mb-0">
                        <div class="card-header bg-transparent pb-5">
                            <div class="text-muted text-center mt-2 mb-3"><small>Edit Pincode</small></div>
                        </div>
                        <div class="card-body px-lg-5 py-lg-5">
                            <form role="form">
                                <div class="form-group mb-3">
                                <label for="exampleFormControlInput1">pincode</label>
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <input class="form-control" placeholder="" type="text" name="pincode" />
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="button" class="btn btn-primary my-4">Save Changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End form-->
    <!--Start Promotioncode Form -->
    @elseif(request()->route()->getName() == "Promocodes")
    <div class="modal fade" id="modal-promocodes" tabindex="-1" role="dialog" aria-labelledby="modal-promocodes" aria-hidden="true">
        <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="card bg-secondary border-0 mb-0">
                        <div class="card-header bg-transparent pb-5">
                            <div class="text-muted text-center mt-2 mb-3"><small>Edit Promocodes</small></div>
                        </div>
                        <div class="card-body px-lg-5 py-lg-5">
                            <form role="form">
                                <div class="form-group mb-3">
                                <label for="exampleFormControlInput1">Offer Name</label>
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <input class="form-control" placeholder="" type="text" name="offer_name" />
                                    </div>
                                </div>
                                <div class="form-group">
                                <label for="exampleFormControlInput1">Offer Code</label>
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <input class="form-control" placeholder="" name="offer_code" type="text" />
                                    </div>
                                </div>
                                <div class="form-group">
                                <label for="exampleFormControlInput1">Offer Amount</label>
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <input class="form-control" placeholder="" name="offer_amount" type="text" />
                                    </div>
                                </div>
                                <div class="form-group">
                                <label for="exampleFormControlInput1">Description</label>
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <textarea rows="4" class="form-control" placeholder="" name="description" type="text" /></textarea>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="button" class="btn btn-primary my-4">Save Changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of promotioncode Form-->
    @endif
</div>