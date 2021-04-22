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
                    <div class="row col-lg-12">
                        <div class="col-lg-4"></div>
                        <div class="col-lg-4"></div>
                        <div class="col-lg-4 text-right mt-2">
                            <a href="/add-marketing"><button class="btn btn-md btn-primary"> <i class="fa fa-plus"></i> </button></a>
                            <button class="btn btn-md btn-warning"> <i class="fa fa-trash"></i> </button>
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-12 col-md-12 m-3">
                        <table id="dtOrderExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th class="th-sm">#</th>
                                    <th class="th-sm">Campaign Name</th>
                                    <th class="th-sm">Code</th>
                                    <th class="th-sm">Clicks</th>
                                    <th class="th-sm">Orders</th>
                                    <th class="th-sm">Date Added</th>
                                    <th class="th-sm">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($market_campaign as $i=>$campaign)
                                    <tr>
                                        <td><input type="checkbox" name="campain_id" id="" value="{{ $campaign->id }}"></td>
                                        <td>{{ $campaign->campaign_name }}</td>
                                        <td>{{ $campaign->campaign_code }}</td>
                                        <td>{{ $campaign->clicks }}</td>
                                        <td>{{ $campaign->orders }}</td>
                                        <td>{{ $campaign->created_at }}</td>
                                        <td class="text-right">
                                            <a><button class="btn btn-sm btn-warning"> <i class="fa fa-pencil"></i></button></a>
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