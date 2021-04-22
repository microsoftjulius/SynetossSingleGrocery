

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
                    <div id="privacy-policy-three" class="privacy-policy">
                        <form name="termscondition" id="termscondition">
                            @csrf
                            <div class="form-group">
                            <textarea class="form-control" id="ckeditor" name="termscondition">{{$gettermscondition->termscondition_content}}</textarea>
                            </div>
                            @if (env('Environment') == 'sendbox')
                            <button type="button" name="update" class="btn mb-1 btn-primary mt-5" onclick="myFunction()">Update</button>
                            @else
                            <button type="submit" name="update" class="btn mb-1 btn-primary mt-5">Update</button>
                            @endif
                        </form>
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
            CKEDITOR.replace('ckeditor');
        </script>
        <script type="text/javascript">
            $(document).ready(function() {
            
            $('#termscondition').on('submit', function(event){
                event.preventDefault();
                // var form_data = new FormData(this);
                var termscondition = CKEDITOR.instances['ckeditor'].getData();
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url:"{{ URL::to('admin/termscondition/update') }}",
                    method:'POST',
                    data:{'termscondition':termscondition},
                    dataType: "json",
                    success: function(result) {
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
                            msg += '<div class="alert alert-success mt-1">'+result.success+'</div>';
                            $('#msg').html(msg);
                            setTimeout(function(){
                              $('#msg').html('');
                            }, 5000);
                        }
                    },
                });
            });
            });
        </script>
    </body>
</html>

