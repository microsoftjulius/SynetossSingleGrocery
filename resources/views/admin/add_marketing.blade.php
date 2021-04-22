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
                    <div class="col-lg-12 col-sm-12 col-md-12">
                        <form action="/save-marketing" method="post" enctype="multipart/form-data" id="form-marketing" class="form-horizontal mt-4">
                            @csrf
                            <div class="row col-lg-12">
                                <div class="col-lg-4"></div>
                                <div class="col-lg-4"></div>
                                <div class="col-lg-4 text-right mt-2">
                                    <button class="btn btn-md btn-warning"> <i class="fa fa-save"></i> </button>
                                    <a href="/marketing"><button class="btn btn-md btn-secondary" type="button"> <i class="fa fa-reply"></i> </button></a>
                                </div>
                            </div>
                            <div class="form-group required">
                                <label class="col-sm-12 control-label" for="input-name"><span class="text-red">*</span> Campaign Name</label>
                                <div class="col-sm-12">
                                    <input type="text" name="name" value="" placeholder="Campaign Name" id="input-name" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-12 control-label" for="input-description">Campaign Description</label>
                                <div class="col-sm-12">
                                    <textarea name="description" rows="5" placeholder="Campaign Description" id="input-description" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="form-group required">
                                <label class="col-sm-12 control-label" for="input-code"><span class="text-red">*</span> <span data-toggle="tooltip" title="" data-original-title="The tracking code that will be used to marketing track campaigns.">Tracking Code</span></label>
                                <div class="col-sm-12">
                                    <input type="text" name="code" value="607ca56ace024" placeholder="Tracking Code" id="input-code" required class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-12 control-label" for="input-example"><span data-toggle="tooltip" title="" data-original-title="So the system can track refferals you neeed to add the tracking code to the end of the URL linking to your site.">Examples</span></label>
                                <div class="col-sm-12">
                                    <input type="text" name="example1" placeholder="Examples" id="input-example1" class="form-control">
                                    <br>
                                    <input type="text" name="example2" placeholder="Examples" id="input-example2" class="form-control">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                @include('layouts.admin-partials.footer')
            </div>
        </div>
        <!-- Modal -->
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
