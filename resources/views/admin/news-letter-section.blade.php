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
                    <div class="col-lg-12 col-sm-12 col-md-12 m-3">
                        <table id="dtOrderExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th class="th-sm">
                                        <input type="checkbox" name="" id="">
                                    </th>
                                    <th>E-Mail</th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($subscribers as $i=>$subscriber)
                                    <tr>
                                        <td>{{ $i+1 }}</td>
                                        <td>{{ $subscriber->subscribers_email }}</td>
                                        <td>
                                            <button type="button" value="" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i></button>
                                        </td>
                                    </tr>
                                @endforeach
                        </table>
                    </div>
                </div>
                @include('layouts.admin-partials.footer')
            </div>
        </div>
        <!-- Modal -->
        

        <!-- Argon Scripts -->
        @include('layouts.admin-partials.javascript')
        <script type="text/javascript"></script>
    </body>
</html>