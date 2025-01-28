@section('title', 'Public List')
@include('layout.header');

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Public List
            <small> </small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Public</li>
            <li class="active">View Public</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

        <div class="row">
            <div class="col-md-12">
                <div class="box box-info">
                    <div class="box-header with-border">
                    </div>

                    <div class="box-body">
        <table class="table table-striped hover" id="table">
            <thead>
            <tr>
                <th>NIC</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Address</th>
                <th>GN Division</th>
                <th>Phone</th>
                <th>DOB</th>
            </tr>
            </thead>
        </table>
                    </div>
                </div>
            </div>

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@section('script')
    <script>

        $(function() {
            $('#table').DataTable({
                dom: "<'row'<'col-sm-12'Bftr>>" +
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
                ajax: '{{ url('/update_public_table') }}',
                columns: [
                    { data: 'nic', name: 'nic' },
                    { data: 'first_name', name: 'first_name' },
                    { data: 'last_name', name: 'last_name' },
                    { data: 'address', name: 'address' },
                    { data: 'gs_division', name: 'gs_division' },
                    { data: 'phone', name: 'phone' },
                    { data: 'dob', name: 'dob' }
                ]
            });
        });


        {{--jQuery(document).ready(function(){--}}
        {{--$.ajaxSetup({--}}
        {{--headers: {--}}
        {{--'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')                    }--}}
        {{--});--}}

        {{--jQuery.ajax({--}}
        {{--url: "{{ url('/issue_token_data') }}",--}}
        {{--method: 'post',--}}
        {{--data: {--}}
        {{--name: jQuery('#name').val(),--}}
        {{--type: jQuery('#type').val(),--}}
        {{--price: jQuery('#price').val()--}}
        {{--},--}}
        {{--success: function(result){--}}
        {{--console.log(result);--}}
        {{--}});--}}

        {{--});--}}
    </script>
@stop

@include('layout.footer');