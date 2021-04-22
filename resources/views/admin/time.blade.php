

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
                <div class="col-xl-12 order-xl-1">
                    <div class="card">
                        <div class="card-body">
                            <form action="/create-time" method="post">
                                <!-- Address -->
                                <div class="pl-lg-4">
                                    @csrf
                                        <div class="form-row">
                                            <label class="col-sm-2 col-form-label"></label>
                                            <div class="form-group col-md-3" style="text-align: center;">
                                                <label><strong>Opening Hours</strong></label>
                                            </div>
                                            <div class="form-group col-md-3" style="text-align: center;">
                                                <label><strong>Closing Time</strong></label>
                                            </div>
                                            <div class="form-group col-md-3" style="text-align: center;">
                                                <label><strong>Select the option if it is always closed</strong></label>
                                            </div>
                                        </div>
                                        @foreach ($gettime as $time)
                                        <div class="form-row">
                                            @if ($time->day == "Monday")
                                            <label class="col-sm-2 col-form-label">Monday</label>
                                            @endif
                                            @if ($time->day == "Tuesday")
                                            <label class="col-sm-2 col-form-label">Tuesday</label>
                                            @endif
                                            @if ($time->day == "Wednesday")
                                            <label class="col-sm-2 col-form-label">Wednesday</label>
                                            @endif
                                            @if ($time->day == "Thursday")
                                            <label class="col-sm-2 col-form-label">Thursday</label>
                                            @endif
                                            @if ($time->day == "Friday")
                                            <label class="col-sm-2 col-form-label">Friday</label>
                                            @endif
                                            @if ($time->day == "Saturday")
                                            <label class="col-sm-2 col-form-label">Saturday</label>
                                            @endif
                                            @if ($time->day == "Sunday")
                                            <label class="col-sm-2 col-form-label">Sunday</label>
                                            @endif
                                            <input type="hidden" name="day[]" value="{{$time->day}}">
                                            @if ($time->always_close == '2')
                                            <div class="form-group col-md-3">
                                                <input type="text" class="form-control" placeholder="Opening Hours" id="open{{$time->day}}" name="open_time[]" value="{{$time->open_time}}">
                                            </div>
                                            @else
                                            <div class="form-group col-md-3">
                                                <input type="text" class="form-control" placeholder="Opening Hours" id="open{{$time->day}}" name="open_time[]" value="Closed" readonly="">
                                            </div>
                                            @endif
                                            @if ($time->always_close == '2')
                                            <div class="form-group col-md-3">
                                                <input type="text" class="form-control" placeholder="Closing Time" id="close{{$time->day}}" name="close_time[]" value="{{$time->close_time}}">
                                            </div>
                                            @else
                                            <div class="form-group col-md-3">
                                                <input type="text" class="form-control" placeholder="Closing Time" id="close{{$time->day}}" name="close_time[]" value="Closed" readonly="">
                                            </div>
                                            @endif
                                            <div class="form-group col-md-3">
                                                <select class="form-control" name="always_close[]" id="always_close{{$time->day}}">
                                                    <option value="">Select the option if it is always closed</option>
                                                    <option value="1" @if ($time->always_close == '1') selected @endif>Yes</option>
                                                    <option value="2" @if ($time->always_close == '2') selected @endif>No</option>
                                                </select>
                                            </div>
                                        </div>
                                        @endforeach
                                        @if (env('Environment') == 'sendbox')
                                            <button type="button" class="btn btn-primary" onclick="myFunction()">Save</button>
                                        @else
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        @endif
                                    </div>
                                </div>
                        </div>
                        </form>
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
        <script>
            $('#input_starttime').pickatime({
            // 12 or 24 hour
            twelvehour: true,
            });
        </script>
    </body>
</html>

