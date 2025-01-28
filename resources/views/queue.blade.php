@section('title', 'Queue')
@include('layout.header');

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Queue
            <small>Of Public</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Queue</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

        <div class="row">
            <div class="col-md-12">
                <div class="box box-info">


                    <div class="box-body">

        <table class="table table-striped hover" id="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>PID</th>
                <th>First Name</th>
                <th>Branch</th>
                <th>Service</th>
                <th>Status</th>
                <th>1st Visit Date</th>
                <th>Visit</th>
                <th>2nd Next Visit</th>
                <th>2nd Reason</th>
                <th>3rd Next Visit</th>
                <th>3rd Reason</th>
                <th>Action</th>
            </tr>
            </thead>
        </table>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->


<!-- Modal -->
<div class="modal modalq fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-dialogq">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Status Update</h4>
            </div>
            <div class="modal-body">
                <meta name="csrf-token" content="{{ csrf_token() }}">

                <div class="box box-info">

                    <div class="box-body">

                        <div class="input-group">
                            <input id="q_id" type="hidden" class="form-control" placeholder="Next Visit Date">
                            <input id="visit_no" type="hidden" class="form-control" placeholder="Next Visit Date">
                        </div>
                        <br>


                        <b>Next Visit Date</b>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-bookmark-o"></i></span>
                            <input id="next_visit" type="date" class="form-control" placeholder="Next Visit Date">
                        </div>
                        <br>

                        <b>Reason</b>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-bookmark-o"></i></span>
                            <input id="reason" type="text" class="form-control" placeholder="Reason">
                        </div>
                        <br>
                </div>
                </div>

            </div>
            <div class="modal-footer">
                <button id="update_status" type="button" class="btn btn-success btn-flat">Save Changes</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>








@section('script')
    <script>



        $(function() {
            $('#table').DataTable({
                "lengthChange": true,
                "lengthMenu": [[5, 10, 20, 50, 100,200,500,-1],[5, 10, 20, 50, 100,200,500, "All"]],
                dom: "<f'row'<'col-sm-12'tr>>" +
                "<'row'<'col-sm-4'l><'col-sm-8'p>>",
                buttons: [

                ],
                processing: true,
                serverSide: true,
                ajax: '{{ url('/queue_table') }}',
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
                    { data: 'visit_date_1st', name: 'visit_date_1st' },
                    { data: 'visit', name: 'visit' },
                    { data: 'next_visit_date_2nd', name: 'next_visit_date_2nd' },
                    { data: 'reason_2nd', name: 'reason_2nd' },
                    { data: 'next_visit_date_3rd', name: 'next_visit_date_3rd' },
                    { data: 'reason_3rd', name: 'reason_3rd' },
                    { data: 'action', name: 'action' },
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





        function queueAction(el,er) {

            $('#q_id').val(el);
            $('#visit_no').val(er);
            $('#myModal').modal('toggle');

        }

        function queueCompleted(el) {

            swal({
                    title: "Are you sure?",
                    text: "You will not be able to change the state!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonClass: "btn-success",
                    confirmButtonText: "Yes, Completed!",
                    cancelButtonText: "No, cancel!",
                    closeOnConfirm: false,
                    closeOnCancel: false
                },
                function(isConfirm) {
                    if (isConfirm) {

                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });

                        jQuery.ajax({
                            url: "{{ url('/queue_status') }}",
                            method: 'post',
                            data: {
                                id: el,
                                status:'Completed'
                            },
                            success: function (data) {
                                var table = $("#table").DataTable();
                                table.ajax.reload();
                                console.log(data);
                            }
                        });

                        window.onkeydown = window.onfocus = null; // This line is the solution

                        swal({
                            title: "Updated!",
                            text: "Token marked as completed state.",
                            type: "success",
                            timer: 3000
                        });


                    } else {
                        swal("Cancelled", "Nothing happed to token :)", "error");
                    }
                });
        }


        function queueOnprocessing(el,vi) {

            $('#q_id').val(el);
            $('#visit_no').val(vi);
            $('#myModal').modal('toggle');

        }


        function queueCancel(el) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            jQuery.ajax({
                url: "{{ url('/queue_status') }}",
                method: 'post',
                data: {
                    id: el,
                    status:'Canceled'
                },
                success: function (data) {
                    var table = $("#table").DataTable();
                    table.ajax.reload();
                    console.log(data);
                }
            });

        }




        $('#update_status').click(function() {

            if($('#visit_no').val() == "1"){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                jQuery.ajax({
                    url: "{{ url('/queue_status_action') }}",
                    method: 'post',
                    data: {
                        id: $('#q_id').val(),
                        next_visit_date_2nd: $('#next_visit').val(),
                        reason_2nd: $('#reason').val(),
                    },
                    success: function (data) {
                        var table = $("#table").DataTable();
                        table.ajax.reload();
                        console.log(data);
                        $('#next_visit').val('');
                        $('#reason').val('');
                        $('#myModal').modal('hide');

                    }
                });
            }

           else if($('#visit_no').val() == "2"){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                jQuery.ajax({
                    url: "{{ url('/queue_status_action2') }}",
                    method: 'post',
                    data: {
                        id: $('#q_id').val(),
                        next_visit_date_3rd: $('#next_visit').val(),
                        reason_3rd: $('#reason').val(),
                    },
                    success: function (data) {
                        var table = $("#table").DataTable();
                        table.ajax.reload();
                        console.log(data);
                        $('#myModal').modal('hide');

                    }
                });
            }



        });

    </script>
@stop

@include('layout.footer');