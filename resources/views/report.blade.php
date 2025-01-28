@section('title', 'Report')
@include('layout.header');

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Report
            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Report</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

        <div class="row">
            <div class="col-md-12">
                <div class="nav-tabs-custom">
                    <!-- Tabs within a box -->
                    <ul class="nav nav-tabs pull-right">
                        <li class="active"><a href="#accounts" data-toggle="tab">Accounts</a></li>
                        <li><a href="#social" data-toggle="tab">Social</a></li>
                        <li><a href="#register" data-toggle="tab">Register</a></li>
                        <li><a href="#womenandchild" data-toggle="tab">Women & Child</a></li>
                        <li><a href="#admin" data-toggle="tab">Admin</a></li>
                        <li><a href="#planning" data-toggle="tab">Planning</a></li>
                        <li><a href="#land" data-toggle="tab">Land</a></li>
                        <li><a href="#samoorthi" data-toggle="tab">Samoorthi</a></li>
                        <li class="pull-left header"><i class="fa fa-inbox"></i>Report</li>
                    </ul>
                    <div class="tab-content no-padding">
                        <div class="chart tab-pane active" id="accounts" style="position: relative; ">
                            <table class="table table-striped hover" id="table-accounts">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>PID</th>
                                    <th>First Name</th>
                                    <th>Branch</th>
                                    <th>Service</th>
                                    <th>Status</th>
                                    <th>Visit</th>
                                    <th>Issued at</th>
                                    <th>Completed on</th>

                                </tr>
                                </thead>
                                <tfoot>

                                    <th>ID</th>
                                    <th>PID</th>
                                    <th>First Name</th>
                                    <th>Branch</th>
                                    <th>Service</th>
                                    <th>Status</th>
                                    <th>Visit</th>
                                    <th>Issued at</th>
                                    <th>Completed on</th>

                                </tfoot>

                            </table>
                        </div>
                        <div class="chart tab-pane" id="social" style="position: relative;">
                            <table class="table table-striped hover" id="table-social">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>PID</th>
                                    <th>First Name</th>
                                    <th>Branch</th>
                                    <th>Service</th>
                                    <th>Status</th>
				<th>Visit</th>
                                    <th>Issued at</th>
                                    <th>Completed on</th>
                                </tr>
                                </thead>
                                <tfoot>

                                <th>ID</th>
                                <th>PID</th>
                                <th>First Name</th>
                                <th>Branch</th>
                                <th>Service</th>
                                <th>Status</th>
                                <th>Visit</th>
                                <th>Issued at</th>
                                <th>Completed on</th>

                                </tfoot>

                            </table>
                        </div>
                        <div class="chart tab-pane" id="register" style="position: relative;">
                            <table class="table table-striped hover" id="table-register">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>PID</th>
                                    <th>First Name</th>
                                    <th>Branch</th>
                                    <th>Service</th>
                                    <th>Status</th>
                                    <th>Visit</th>
                                    <th>Issued at</th>
                                    <th>Completed on</th>
                                </tr>
                                </thead>
                                <tfoot>

                                <th>ID</th>
                                <th>PID</th>
                                <th>First Name</th>
                                <th>Branch</th>
                                <th>Service</th>
                                <th>Status</th>
                                <th>Visit</th>
                                    <th>Issued at</th>
                                    <th>Completed on</th>

                                </tfoot>

                            </table>
                        </div>
                        <div class="chart tab-pane" id="womenandchild" style="position: relative;">
                            <table class="table table-striped hover" id="table-womenandchild">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>PID</th>
                                    <th>First Name</th>
                                    <th>Branch</th>
                                    <th>Service</th>
                                    <th>Status</th>
                                    <th>Visit</th>
                                    <th>Issued at</th>
                                    <th>Completed on</th>
                                </tr>
                                </thead>
                                <tfoot>

                                <th>ID</th>
                                <th>PID</th>
                                <th>First Name</th>
                                <th>Branch</th>
                                <th>Service</th>
                                <th>Status</th>
                                <th>Visit</th>
                                    <th>Issued at</th>
                                    <th>Completed on</th>

                                </tfoot>

                            </table>
                        </div>
                        <div class="chart tab-pane" id="admin" style="position: relative;">
                            <table class="table table-striped hover" id="table-admin">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>PID</th>
                                    <th>First Name</th>
                                    <th>Branch</th>
                                    <th>Service</th>
                                    <th>Status</th>
                                    <th>Visit</th>
                                    <th>Issued at</th>
                                    <th>Completed on</th>
                                </tr>
                                </thead>
                                <tfoot>

                                <th>ID</th>
                                <th>PID</th>
                                <th>First Name</th>
                                <th>Branch</th>
                                <th>Service</th>
                                <th>Status</th>
                                <th>Visit</th>
                                    <th>Issued at</th>
                                    <th>Completed on</th>

                                </tfoot>

                            </table>
                        </div>
                        <div class="chart tab-pane" id="planning" style="position: relative;">
                            <table class="table table-striped hover" id="table-planning">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>PID</th>
                                    <th>First Name</th>
                                    <th>Branch</th>
                                    <th>Service</th>
                                    <th>Status</th>
                                    <th>Visit</th>
                                    <th>Issued at</th>
                                    <th>Completed on</th>
                                </tr>
                                </thead>
                                <tfoot>

                                <th>ID</th>
                                <th>PID</th>
                                <th>First Name</th>
                                <th>Branch</th>
                                <th>Service</th>
                                <th>Status</th>
                                <th>Visit</th>
                                    <th>Issued at</th>
                                    <th>Completed on</th>

                                </tfoot>

                            </table>
                        </div>
                        <div class="chart tab-pane" id="land" style="position: relative;">
                            <table class="table table-striped hover" id="table-land">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>PID</th>
                                    <th>First Name</th>
                                    <th>Branch</th>
                                    <th>Service</th>
                                    <th>Status</th>
                                    <th>Visit</th>
                                    <th>Issued at</th>
                                    <th>Completed on</th>
                                </tr>
                                </thead>
                                <tfoot>

                                <th>ID</th>
                                <th>PID</th>
                                <th>First Name</th>
                                <th>Branch</th>
                                <th>Service</th>
                                <th>Status</th>
                                <th>Visit</th>
                                    <th>Issued at</th>
                                    <th>Completed on</th>

                                </tfoot>

                            </table>
                        </div>
                        <div class="chart tab-pane" id="samoorthi" style="position: relative;">
                            <table class="table table-striped hover" id="table-samoorthi">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>PID</th>
                                    <th>First Name</th>
                                    <th>Branch</th>
                                    <th>Service</th>
                                    <th>Status</th>
                                    <th>Visit</th>
                                    <th>Issued at</th>
                                    <th>Completed on</th>
                                </tr>
                                </thead>
                                <tfoot>

                                <th>ID</th>
                                <th>PID</th>
                                <th>First Name</th>
                                <th>Branch</th>
                                <th>Service</th>
                                <th>Status</th>
                                <th>Visit</th>
                                    <th>Issued at</th>
                                    <th>Completed on</th>

                                </tfoot>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>




    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@section('script')
    <script>
        jQuery(document).ready(function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')                    }
            });

            $('#table-accounts').DataTable({
                "lengthChange": true,
                "lengthMenu": [[5, 10, 20, 50, 100,200,500,-1],[5, 10, 20, 50, 100,200,500, "All"]],
                "dom": "<'row'<'col-sm-12'Bftr>>" +
                "<'row'<'col-sm-4'l><'col-sm-8'p>>",
                buttons: [
                    { extend: 'copy', className: 'btn btn-sm btn-primary glyphicon glyphicon-duplicate' },
                    { extend: 'csv', className: 'btn btn-sm btn-primary glyphicon glyphicon-save-file' },
                    { extend: 'excel', className: 'btn btn-sm btn-primary glyphicon glyphicon-list-alt' },
                    { extend: 'pdf', className: 'btn btn-sm btn-primary glyphicon glyphicon-file' },
                    { extend: 'print', className: 'btn btn-sm btn-primary glyphicon glyphicon-print' }

                ],
                processing: true,
                serverSide: true,
                ajax: '{{ url('/report_accounts') }}',
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'p_id', name: 'p_id' },
                    { data: 'first_name', name: 'first_name' },
                    { data: 'branch_name', name: 'branch_name' },
                    { data: 'service_name', name: 'service_name' },
                    { data: 'status', name: 'status',
                        render : function(data, type, row) {
                            if(data == 'Not Processed'){
                                return '<span class="label label-default">'+data+'</span>'
                            }

                            if(data == 'Completed'){
                                return '<span class="label label-success">'+data+'</span>'
                            }

                            if(data == 'Canceled'){
                                return '<span class="label label-danger">'+data+'</span>'
                            }

                            if(data == 'On Processing'){
                                return '<span class="label label-info">'+data+'</span>'
                            }

                            return '<span class="label label-default">'+data+'</span>'
                        } },
                    { data: 'visit', name: 'visit' },
                    { data: 'created_at', name: 'created_at' },
                    { data: 'completed', name: 'completed' },

                ],
                initComplete: function () {
                    this.api().columns().every( function () {
                        var column = this;
                        var select = $('<select><option value=""></option></select>')
                            .appendTo( $(column.footer()).empty() )
                            .on( 'change', function () {
                                var val = $.fn.dataTable.util.escapeRegex(
                                    $(this).val()
                                );

                                column
                                    .search( val ? '^'+val+'$' : '', true, false )
                                    .draw();
                            } );

                        column.data().unique().sort().each( function ( d, j ) {
                            select.append( '<option value="'+d+'">'+d+'</option>' )
                        } );
                    } );
                }

            });




            //Social
            $('#table-social').DataTable({
                "lengthChange": true,
                "lengthMenu": [[5, 10, 20, 50, 100,200,500,-1],[5, 10, 20, 50, 100,200,500, "All"]],
                "dom": "<'row'<'col-sm-12'Bftr>>" +
                "<'row'<'col-sm-4'l><'col-sm-8'p>>",
                buttons: [
                    { extend: 'copy', className: 'btn btn-sm btn-primary glyphicon glyphicon-duplicate' },
                    { extend: 'csv', className: 'btn btn-sm btn-primary glyphicon glyphicon-save-file' },
                    { extend: 'excel', className: 'btn btn-sm btn-primary glyphicon glyphicon-list-alt' },
                    { extend: 'pdf', className: 'btn btn-sm btn-primary glyphicon glyphicon-file' },
                    { extend: 'print', className: 'btn btn-sm btn-primary glyphicon glyphicon-print' }

                ],
                processing: true,
                serverSide: true,
                ajax: '{{ url('/report_social') }}',
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'p_id', name: 'p_id' },
                    { data: 'first_name', name: 'first_name' },
                    { data: 'branch_name', name: 'branch_name' },
                    { data: 'service_name', name: 'service_name' },
                    { data: 'status', name: 'status',
                        render : function(data, type, row) {
                            if(data == 'Not Processed'){
                                return '<span class="label label-default">'+data+'</span>'
                            }

                            if(data == 'Completed'){
                                return '<span class="label label-success">'+data+'</span>'
                            }

                            if(data == 'Canceled'){
                                return '<span class="label label-danger">'+data+'</span>'
                            }

                            if(data == 'On Processing'){
                                return '<span class="label label-info">'+data+'</span>'
                            }

                            return '<span class="label label-default">'+data+'</span>'
                        } },
                    { data: 'visit', name: 'visit' },
                    { data: 'created_at', name: 'created_at' },
                    { data: 'completed', name: 'completed' },
                ],
                initComplete: function () {
                    this.api().columns().every( function () {
                        var column = this;
                        var select = $('<select><option value=""></option></select>')
                            .appendTo( $(column.footer()).empty() )
                            .on( 'change', function () {
                                var val = $.fn.dataTable.util.escapeRegex(
                                    $(this).val()
                                );

                                column
                                    .search( val ? '^'+val+'$' : '', true, false )
                                    .draw();
                            } );

                        column.data().unique().sort().each( function ( d, j ) {
                            select.append( '<option value="'+d+'">'+d+'</option>' )
                        } );
                    } );
                }

            });


            //Register
            $('#table-register').DataTable({
                "lengthChange": true,
                "lengthMenu": [[5, 10, 20, 50, 100,200,500,-1],[5, 10, 20, 50, 100,200,500, "All"]],
                "dom": "<'row'<'col-sm-12'Bftr>>" +
                "<'row'<'col-sm-4'l><'col-sm-8'p>>",
                buttons: [
                    { extend: 'copy', className: 'btn btn-sm btn-primary glyphicon glyphicon-duplicate' },
                    { extend: 'csv', className: 'btn btn-sm btn-primary glyphicon glyphicon-save-file' },
                    { extend: 'excel', className: 'btn btn-sm btn-primary glyphicon glyphicon-list-alt' },
                    { extend: 'pdf', className: 'btn btn-sm btn-primary glyphicon glyphicon-file' },
                    { extend: 'print', className: 'btn btn-sm btn-primary glyphicon glyphicon-print' }

                ],
                processing: true,
                serverSide: true,
                ajax: '{{ url('/report_register') }}',
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'p_id', name: 'p_id' },
                    { data: 'first_name', name: 'first_name' },
                    { data: 'branch_name', name: 'branch_name' },
                    { data: 'service_name', name: 'service_name' },
                    { data: 'status', name: 'status',
                        render : function(data, type, row) {
                            if(data == 'Not Processed'){
                                return '<span class="label label-default">'+data+'</span>'
                            }

                            if(data == 'Completed'){
                                return '<span class="label label-success">'+data+'</span>'
                            }

                            if(data == 'Canceled'){
                                return '<span class="label label-danger">'+data+'</span>'
                            }

                            if(data == 'On Processing'){
                                return '<span class="label label-info">'+data+'</span>'
                            }

                            return '<span class="label label-default">'+data+'</span>'
                        } },
                    { data: 'visit', name: 'visit' },
                                        { data: 'created_at', name: 'created_at' },
                    { data: 'completed', name: 'completed' },
                ],
                initComplete: function () {
                    this.api().columns().every( function () {
                        var column = this;
                        var select = $('<select><option value=""></option></select>')
                            .appendTo( $(column.footer()).empty() )
                            .on( 'change', function () {
                                var val = $.fn.dataTable.util.escapeRegex(
                                    $(this).val()
                                );

                                column
                                    .search( val ? '^'+val+'$' : '', true, false )
                                    .draw();
                            } );

                        column.data().unique().sort().each( function ( d, j ) {
                            select.append( '<option value="'+d+'">'+d+'</option>' )
                        } );
                    } );
                }

            });



            //Womenand child
            $('#table-womenandchild').DataTable({
                "lengthChange": true,
                "lengthMenu": [[5, 10, 20, 50, 100,200,500,-1],[5, 10, 20, 50, 100,200,500, "All"]],
                "dom": "<'row'<'col-sm-12'Bftr>>" +
                "<'row'<'col-sm-4'l><'col-sm-8'p>>",
                buttons: [
                    { extend: 'copy', className: 'btn btn-sm btn-primary glyphicon glyphicon-duplicate' },
                    { extend: 'csv', className: 'btn btn-sm btn-primary glyphicon glyphicon-save-file' },
                    { extend: 'excel', className: 'btn btn-sm btn-primary glyphicon glyphicon-list-alt' },
                    { extend: 'pdf', className: 'btn btn-sm btn-primary glyphicon glyphicon-file' },
                    { extend: 'print', className: 'btn btn-sm btn-primary glyphicon glyphicon-print' }

                ],
                processing: true,
                serverSide: true,
                ajax: '{{ url('/report_womenandchild') }}',
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'p_id', name: 'p_id' },
                    { data: 'first_name', name: 'first_name' },
                    { data: 'branch_name', name: 'branch_name' },
                    { data: 'service_name', name: 'service_name' },
                    { data: 'status', name: 'status',
                        render : function(data, type, row) {
                            if(data == 'Not Processed'){
                                return '<span class="label label-default">'+data+'</span>'
                            }

                            if(data == 'Completed'){
                                return '<span class="label label-success">'+data+'</span>'
                            }

                            if(data == 'Canceled'){
                                return '<span class="label label-danger">'+data+'</span>'
                            }

                            if(data == 'On Processing'){
                                return '<span class="label label-info">'+data+'</span>'
                            }

                            return '<span class="label label-default">'+data+'</span>'
                        } },
                    { data: 'visit', name: 'visit' },
                                        { data: 'created_at', name: 'created_at' },
                    { data: 'completed', name: 'completed' },
                ],
                initComplete: function () {
                    this.api().columns().every( function () {
                        var column = this;
                        var select = $('<select><option value=""></option></select>')
                            .appendTo( $(column.footer()).empty() )
                            .on( 'change', function () {
                                var val = $.fn.dataTable.util.escapeRegex(
                                    $(this).val()
                                );

                                column
                                    .search( val ? '^'+val+'$' : '', true, false )
                                    .draw();
                            } );

                        column.data().unique().sort().each( function ( d, j ) {
                            select.append( '<option value="'+d+'">'+d+'</option>' )
                        } );
                    } );
                }

            });


            //Admin
            $('#table-admin').DataTable({
                "lengthChange": true,
                "lengthMenu": [[5, 10, 20, 50, 100,200,500,-1],[5, 10, 20, 50, 100,200,500, "All"]],
                "dom": "<'row'<'col-sm-12'Bftr>>" +
                "<'row'<'col-sm-4'l><'col-sm-8'p>>",
                buttons: [
                    { extend: 'copy', className: 'btn btn-sm btn-primary glyphicon glyphicon-duplicate' },
                    { extend: 'csv', className: 'btn btn-sm btn-primary glyphicon glyphicon-save-file' },
                    { extend: 'excel', className: 'btn btn-sm btn-primary glyphicon glyphicon-list-alt' },
                    { extend: 'pdf', className: 'btn btn-sm btn-primary glyphicon glyphicon-file' },
                    { extend: 'print', className: 'btn btn-sm btn-primary glyphicon glyphicon-print' }

                ],
                processing: true,
                serverSide: true,
                ajax: '{{ url('/report_admin') }}',
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'p_id', name: 'p_id' },
                    { data: 'first_name', name: 'first_name' },
                    { data: 'branch_name', name: 'branch_name' },
                    { data: 'service_name', name: 'service_name' },
                    { data: 'status', name: 'status',
                        render : function(data, type, row) {
                            if(data == 'Not Processed'){
                                return '<span class="label label-default">'+data+'</span>'
                            }

                            if(data == 'Completed'){
                                return '<span class="label label-success">'+data+'</span>'
                            }

                            if(data == 'Canceled'){
                                return '<span class="label label-danger">'+data+'</span>'
                            }

                            if(data == 'On Processing'){
                                return '<span class="label label-info">'+data+'</span>'
                            }

                            return '<span class="label label-default">'+data+'</span>'
                        } },
                    { data: 'visit', name: 'visit' },
                                        { data: 'created_at', name: 'created_at' },
                    { data: 'completed', name: 'completed' },
                ],
                initComplete: function () {
                    this.api().columns().every( function () {
                        var column = this;
                        var select = $('<select><option value=""></option></select>')
                            .appendTo( $(column.footer()).empty() )
                            .on( 'change', function () {
                                var val = $.fn.dataTable.util.escapeRegex(
                                    $(this).val()
                                );

                                column
                                    .search( val ? '^'+val+'$' : '', true, false )
                                    .draw();
                            } );

                        column.data().unique().sort().each( function ( d, j ) {
                            select.append( '<option value="'+d+'">'+d+'</option>' )
                        } );
                    } );
                }

            });

            //Planning
            $('#table-planning').DataTable({
                "lengthChange": true,
                "lengthMenu": [[5, 10, 20, 50, 100,200,500,-1],[5, 10, 20, 50, 100,200,500, "All"]],
                "dom": "<'row'<'col-sm-12'Bftr>>" +
                "<'row'<'col-sm-4'l><'col-sm-8'p>>",
                buttons: [
                    { extend: 'copy', className: 'btn btn-sm btn-primary glyphicon glyphicon-duplicate' },
                    { extend: 'csv', className: 'btn btn-sm btn-primary glyphicon glyphicon-save-file' },
                    { extend: 'excel', className: 'btn btn-sm btn-primary glyphicon glyphicon-list-alt' },
                    { extend: 'pdf', className: 'btn btn-sm btn-primary glyphicon glyphicon-file' },
                    { extend: 'print', className: 'btn btn-sm btn-primary glyphicon glyphicon-print' }

                ],
                processing: true,
                serverSide: true,
                ajax: '{{ url('/report_planning') }}',
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'p_id', name: 'p_id' },
                    { data: 'first_name', name: 'first_name' },
                    { data: 'branch_name', name: 'branch_name' },
                    { data: 'service_name', name: 'service_name' },
                    { data: 'status', name: 'status',
                        render : function(data, type, row) {
                            if(data == 'Not Processed'){
                                return '<span class="label label-default">'+data+'</span>'
                            }

                            if(data == 'Completed'){
                                return '<span class="label label-success">'+data+'</span>'
                            }

                            if(data == 'Canceled'){
                                return '<span class="label label-danger">'+data+'</span>'
                            }

                            if(data == 'On Processing'){
                                return '<span class="label label-info">'+data+'</span>'
                            }

                            return '<span class="label label-default">'+data+'</span>'
                        } },
                    { data: 'visit', name: 'visit' },
                                        { data: 'created_at', name: 'created_at' },
                    { data: 'completed', name: 'completed' },
                ],
                initComplete: function () {
                    this.api().columns().every( function () {
                        var column = this;
                        var select = $('<select><option value=""></option></select>')
                            .appendTo( $(column.footer()).empty() )
                            .on( 'change', function () {
                                var val = $.fn.dataTable.util.escapeRegex(
                                    $(this).val()
                                );

                                column
                                    .search( val ? '^'+val+'$' : '', true, false )
                                    .draw();
                            } );

                        column.data().unique().sort().each( function ( d, j ) {
                            select.append( '<option value="'+d+'">'+d+'</option>' )
                        } );
                    } );
                }

            });


            //Land
            $('#table-land').DataTable({
                "lengthChange": true,
                "lengthMenu": [[5, 10, 20, 50, 100,200,500,-1],[5, 10, 20, 50, 100,200,500, "All"]],
                "dom": "<'row'<'col-sm-12'Bftr>>" +
                "<'row'<'col-sm-4'l><'col-sm-8'p>>",
                buttons: [
                    { extend: 'copy', className: 'btn btn-sm btn-primary glyphicon glyphicon-duplicate' },
                    { extend: 'csv', className: 'btn btn-sm btn-primary glyphicon glyphicon-save-file' },
                    { extend: 'excel', className: 'btn btn-sm btn-primary glyphicon glyphicon-list-alt' },
                    { extend: 'pdf', className: 'btn btn-sm btn-primary glyphicon glyphicon-file' },
                    { extend: 'print', className: 'btn btn-sm btn-primary glyphicon glyphicon-print' }

                ],
                processing: true,
                serverSide: true,
                ajax: '{{ url('/report_land') }}',
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'p_id', name: 'p_id' },
                    { data: 'first_name', name: 'first_name' },
                    { data: 'branch_name', name: 'branch_name' },
                    { data: 'service_name', name: 'service_name' },
                    { data: 'status', name: 'status',
                        render : function(data, type, row) {
                            if(data == 'Not Processed'){
                                return '<span class="label label-default">'+data+'</span>'
                            }

                            if(data == 'Completed'){
                                return '<span class="label label-success">'+data+'</span>'
                            }

                            if(data == 'Canceled'){
                                return '<span class="label label-danger">'+data+'</span>'
                            }

                            if(data == 'On Processing'){
                                return '<span class="label label-info">'+data+'</span>'
                            }

                            return '<span class="label label-default">'+data+'</span>'
                        } },
                    { data: 'visit', name: 'visit' },
                                        { data: 'created_at', name: 'created_at' },
                    { data: 'completed', name: 'completed' },
                ],
                initComplete: function () {
                    this.api().columns().every( function () {
                        var column = this;
                        var select = $('<select><option value=""></option></select>')
                            .appendTo( $(column.footer()).empty() )
                            .on( 'change', function () {
                                var val = $.fn.dataTable.util.escapeRegex(
                                    $(this).val()
                                );

                                column
                                    .search( val ? '^'+val+'$' : '', true, false )
                                    .draw();
                            } );

                        column.data().unique().sort().each( function ( d, j ) {
                            select.append( '<option value="'+d+'">'+d+'</option>' )
                        } );
                    } );
                }

            });

            //Samoorthi
            $('#table-samoorthi').DataTable({
                "lengthChange": true,
                "lengthMenu": [[5, 10, 20, 50, 100,200,500,-1],[5, 10, 20, 50, 100,200,500, "All"]],
                "dom": "<'row'<'col-sm-12'Bftr>>" +
                "<'row'<'col-sm-4'l><'col-sm-8'p>>",
                buttons: [
                    { extend: 'copy', className: 'btn btn-sm btn-primary glyphicon glyphicon-duplicate' },
                    { extend: 'csv', className: 'btn btn-sm btn-primary glyphicon glyphicon-save-file' },
                    { extend: 'excel', className: 'btn btn-sm btn-primary glyphicon glyphicon-list-alt' },
                    { extend: 'pdf', className: 'btn btn-sm btn-primary glyphicon glyphicon-file' },
                    { extend: 'print', className: 'btn btn-sm btn-primary glyphicon glyphicon-print' }

                ],
                processing: true,
                serverSide: true,
                ajax: '{{ url('/report_samoorthi') }}',
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'p_id', name: 'p_id' },
                    { data: 'first_name', name: 'first_name' },
                    { data: 'branch_name', name: 'branch_name' },
                    { data: 'service_name', name: 'service_name' },
                    { data: 'status', name: 'status',
                        render : function(data, type, row) {
                            if(data == 'Not Processed'){
                                return '<span class="label label-default">'+data+'</span>'
                            }

                            if(data == 'Completed'){
                                return '<span class="label label-success">'+data+'</span>'
                            }

                            if(data == 'Canceled'){
                                return '<span class="label label-danger">'+data+'</span>'
                            }

                            if(data == 'On Processing'){
                                return '<span class="label label-info">'+data+'</span>'
                            }

                            return '<span class="label label-default">'+data+'</span>'
                        } },
                    { data: 'visit', name: 'visit' },
                                       { data: 'created_at', name: 'created_at' },
                    { data: 'completed', name: 'completed' },
                ],
                initComplete: function () {
                    this.api().columns().every( function () {
                        var column = this;
                        var select = $('<select><option value=""></option></select>')
                            .appendTo( $(column.footer()).empty() )
                            .on( 'change', function () {
                                var val = $.fn.dataTable.util.escapeRegex(
                                    $(this).val()
                                );

                                column
                                    .search( val ? '^'+val+'$' : '', true, false )
                                    .draw();
                            } );

                        column.data().unique().sort().each( function ( d, j ) {
                            select.append( '<option value="'+d+'">'+d+'</option>' )
                        } );
                    } );
                }

            });
        });
    </script>
@stop

@include('layout.footer');