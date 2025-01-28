@section('title', 'Issue Token')
@include('layout.header');

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Update Branch/Service
            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Branch/Service</li>
            <li class="active">Update Branch/Service</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

        <div class="row">
            <div class="col-md-12">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title"></h3>
                    </div>

                    <div class="box-body">
                        <meta name="csrf-token" content="{{ csrf_token() }}">

                        <table class="table table-striped hover" id="table">
                            <thead>
                            <tr>
                                <th>Branch Name</th>
                                <th>Head of the Branch</th>
                                <th>Service Name</th>
                                <th>First Officer</th>
                                <th>Second Officer</th>
                                <th>Third Officer</th>
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


<!-- Modal -->
<div class="modal modalq fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-dialogq">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Update Public Details</h4>
            </div>
            <div class="modal-body">

                <div class="row">
                    <div class="col-md-12">
                        <div class="box box-danger">

                            <div class="box-body">
                                <meta name="csrf-token" content="{{ csrf_token() }}">

                                <div class="box-body">

                                    <b>
                                        Service Name
                                    </b>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-bookmark-o"></i></span>
                                        <input id="service_name" type="text" class="form-control" placeholder="Service Name">
                                        <input id="id" type="text" hidden>
                                    </div>
                                    <br>

                                    <b>First Officer</b>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-bookmark-o"></i></span>
                                        <input id="first_officer" type="text" class="form-control" placeholder="First Officer">
                                    </div>
                                    <br>

                                    <b>Second Officer</b>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-bookmark-o"></i></span>
                                        <input id="second_officer" type="text" class="form-control" placeholder="Second Officer">
                                    </div>
                                    <br>

                                    <b>Third Officer</b>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-bookmark-o"></i></span>
                                        <input id="third_officer" type="text" class="form-control" placeholder="Third Officer">
                                    </div>
                                    <br>


                                </div>
                            </div>
                        </div>


                    </div>
                </div>


            </div>
            <div class="modal-footer">
                <button id="update_service"  class="btn btn-success btn-flat">Save Changes</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>


<!-- /.content-wrapper -->
@section('script')
    <script>
        $(document).ready(function() {
            $('#service_name').focus();

            $('#table').DataTable({
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
                    { data: 'action', name: 'action' },
                ]
            });
        });


        function update(el){
            $('#service_name').focus();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')                    }
            });
            jQuery.ajax({
                url: "{{ url('/update_service_data') }}",
                method: 'post',
                data: {
                    id: el,
                },
                success: function (result) {
                    id:$('#id').val(el);
                    $('#service_name').val(result.data[0].s_name);
                    $('#first_officer').val(result.data[0].first_officer);
                    $('#second_officer').val(result.data[0].second_officer);
                    $('#third_officer').val(result.data[0].third_officer);
                    $('#service_name').focus();

                }
            });

            $('#myModal').modal('toggle');
            $('#service_name').focus();


        }




        $('#update_service').click(function () {

            swal({
                    title: "Are you sure?",
                    text: "You will be able to Update Again!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonClass: "btn-success",
                    confirmButtonText: "Yes Update ",
                    cancelButtonText: "No, cancel !",
                    closeOnConfirm: false,
                    closeOnCancel: false
                },
                function(isConfirm) {
                    if (isConfirm) {
                        var sta = 'no';
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')                    }
                        });
                        jQuery.ajax({
                            url: "{{ url('/update_service') }}",
                            method: 'post',
                            data: {
                                id:$('#id').val(),
                                service_name: $('#service_name').val(),
                                first_officer: $('#first_officer').val(),
                                second_officer: $('#second_officer').val(),
                                third_officer: $('#third_officer').val(),
                            },
                            success: function (result) {
                                sta = 'ok';
                                $('#myModal').modal('hide');
                                window.onkeydown = window.onfocus = null; // This line is the solution
                                swal({
                                    title: "Updated!",
                                    text: "Your imaginary file has been updated!",
                                    type: "success",
                                    timer: 7000
                                });

                                console.log(result);
                                var table = $("#table").DataTable();
                                table.ajax.reload();


                            }
                        });

                        if(sta == "ok"){
                        }
                        else {
                            swal({
                                title: "Error",
                                text: "Enter full details to insert service!",
                                type: "error",
                                timer: 3000
                            });
                        }

                    } else {
                        $('#myModal').modal('hide');
                        swal("Cancelled", "Your imaginary file is safe :)", "error");
                    }
                });

        });

    </script>
@stop

@include('layout.footer');