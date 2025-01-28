@section('title', 'Issue Token')
@include('layout.header');

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Issue Token
            <small>To Public</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Branch/Service</li>
            <li class="active">View Branch/Service</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

        <div class="row">
            <div class="col-md-12">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">By Firm Name Registration Form</h3>
                    </div>

                    <div class="box-body">

                        <table class="table table-striped hover" id="table1">
                            <thead>
                            <tr>
                                <th>Branch Name</th>
                                <th>Head Of The Branch</th>
                                <th>Service Name</th>
                                <th>First Officer</th>
                                <th>Second Officer</th>
                                <th>Third Officer</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <th>Branch Name</th>
                            <th>Head Of The Branch</th>
                            <th>Service Name</th>
                            <th>First Officer</th>
                            <th>Second Officer</th>
                            <th>Third Officer</th>
                            </tfoot>
                        </table>


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
            $('#table1').DataTable({

                dom: "<'row'<'col-sm-12'Bftr>>" +
                "<'row'<'col-sm-4'l><'col-sm-8'p>>",
                buttons: [
                ],
                processing: true,
                serverSide: true,
                ajax: '{{ url('/add_service_table') }}',
                columns: [
                    { data: 'name', name: 'name' , searchable: true},
                    { data: 'head', name: 'head' },
                    { data: 's_name', name: 's_name' },
                    { data: 'first_officer', name: 'first_officer' },
                    { data: 'second_officer', name: 'second_officer' },
                    { data: 'third_officer', name: 'third_officer' },
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