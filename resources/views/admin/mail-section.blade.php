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
                    <table id="dtOrderExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th class="th-sm">
                                    <input type="checkbox" name="" id="">
                                </th>
                                <th class="th-sm">Customer Name</th>
                                <th>E-Mail</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach ($getorders as $i=>$orders) --}}
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            {{-- @endforeach --}}
                    </table>
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