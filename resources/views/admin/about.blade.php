

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
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <span id="msg"></span>
                                <h4 class="card-title">Settings</h4>
                                <p class="text-muted"><code></code>
                                </p>
                                <div id="privacy-policy-three" class="privacy-policy">
                                    <form method="post" name="about" id="about" enctype="multipart/form-data">
                                        @csrf
                                        <p>About Settings</p>
                                        <div class="form-group">
                                            <label for="about_content" class="col-form-label">About Content:</label>
                                            <textarea class="form-control" id="about_content" rows="5" name="about_content">{{$getabout->about_content}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="image" class="col-form-label">About Image:</label>
                                            <input type="file" class="form-control" name="image" id="image" value="{{$getabout->image}}">
                                            <img src='{!! asset("public/images/about/".$getabout->image) !!}' class='img-fluid mt-3' style='max-height: 150px;'>
                                        </div>
                                        <p>Footer Settings</p>
                                        <div class="form-group">
                                            <label for="fb" class="col-form-label">Facebook Link:</label>
                                            <input type="text" class="form-control" name="fb" id="fb" value="{{$getabout->fb}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="twitter" class="col-form-label">Twitter Link:</label>
                                            <input type="text" class="form-control" name="twitter" id="twitter" value="{{$getabout->twitter}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="insta" class="col-form-label">Instagram Link:</label>
                                            <input type="text" class="form-control" name="insta" id="insta" value="{{$getabout->insta}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="android" class="col-form-label">Android App Link:</label>
                                            <input type="text" class="form-control" name="android" id="android" value="{{$getabout->android}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="ios" class="col-form-label">iOS App Link:</label>
                                            <input type="text" class="form-control" name="ios" id="ios" value="{{$getabout->ios}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="copyright" class="col-form-label">Copyright:</label>
                                            <input type="text" class="form-control" name="copyright" id="copyright" value="{{$getabout->copyright}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="title" class="col-form-label">Title for Title bar:</label>
                                            <input type="text" class="form-control" name="title" id="title" value="{{$getabout->title}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="logo" class="col-form-label">Logo:</label>
                                            <input type="file" class="form-control" name="logo" id="logo" value="{{$getabout->logo}}">
                                            <img src='{!! asset("public/images/about/".$getabout->logo) !!}' class='img-fluid mt-3' style='max-height: 150px;'>
                                        </div>
                                        <div class="form-group">
                                            <label for="favicon" class="col-form-label">Favicon:</label>
                                            <input type="file" class="form-control" name="favicon" id="favicon" value="{{$getabout->favicon}}">
                                            <img src='{!! asset("public/images/about/".$getabout->favicon) !!}' class='img-fluid mt-3' style='max-height: 150px;'>
                                        </div>
                                        <hr>
                                        <p>Contacts Settings</p>
                                        <div class="form-group">
                                            <label for="mobile" class="col-form-label">Mobile:</label>
                                            <input type="text" class="form-control" name="mobile" id="mobile" value="{{$getabout->mobile}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="email" class="col-form-label">Email:</label>
                                            <input type="text" class="form-control" name="email" id="email" value="{{$getabout->email}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="address" class="col-form-label">Address:</label>
                                            <input type="text" class="form-control" name="address" id="address" value="{{$getabout->address}}">
                                        </div>
                                        @if (env('Environment') == 'sendbox')
                                        <button type="button" class="btn btn-primary" onclick="myFunction()">Update</button>
                                        @else
                                        <button type="submit" class="btn btn-primary">Update</button>
                                        @endif
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('layouts.admin-partials.footer')
        </div>
        </div>
        <!-- Argon Scripts -->
        @include('layouts.admin-partials.javascript')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.12.1/ckeditor.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
            
                $('#about').on('submit', function(event){
                    event.preventDefault();
                    var form_data = new FormData(this);
                    $('#preloader').show();
                    $.ajax({
                        url:"{{ URL::to('admin/about/update') }}",
                        method:"POST",
                        data:form_data,
                        cache: false,
                        contentType: false,
                        processData: false,
                        dataType: "json",
                        success: function(result) {
                            $('#preloader').hide();
                            var msg = '';
                            if(result.error.length > 0)
                            {
                                for(var count = 0; count < result.error.length; count++)
                                {
                                    msg += '<div class="alert alert-danger">'+result.error[count]+'</div>';
                                }
                                $('#msg').html(msg);
                                setTimeout(function(){
                                  $('#msg').html('');
                                }, 5000);
                            }
                            else
                            {
                                location.reload();
                            }
                        },
                    })
                });
            });
            
        </script>
    </body>
</html>

