@section('title', 'Update Public Details')
@include('layout.header');

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Update Details
            <small>Of Public</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Public</li>
            <li class="active">Update Public</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

        <div class="row">
            <div class="col-md-12">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Update Public Details</h3>
                    </div>

                    <div class="box-body">

        <table class="table table-striped hover" id="table">
            <thead>
            <tr>
                <th>NIC</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Address</th>
                <th>GS Division</th>
                <th>Phone</th>
                <th>DOB</th>
                <th>Action</th>

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

                                    <b>NIC No / Serial No</b>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-bookmark-o"></i></span>
                                            <input id="nic" type="text" class="form-control" placeholder="NIC" disabled>
                                            <span id="vo" class="input-group-addon">V</span>
                                        </div>
                                    <br>


                                    <b>GN Division</b>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-bookmark-o"></i></span>
                                        <select class="form-control select2" id="gs_division" style="width: 100%;">
                                            <option selected="selected">Select GN Division</option>
                                        <option>Kirankulam South - 150A</option>
                                        <option>Kirankulam - 150B</option>
                                        <option>Kirankulam Center - 150C</option>
                                        <option>Kirankulam North - 150</option>
                                        <option>Puthukkudiyiruppu South - 151A</option>
                                        <option>Puthukkudiyiruppu</option>
					<option>Puthukkudiyiruppu North - 151B</option>
					<option>Vedarkudiyiruppu - 151B</option>
					<option>Thalankudah -153</option>
					<option>Manmunai - 153A</option>
					<option>Mavilangathurai - 154</option>
					<option>Ollikulam - 155A</option>
					<option>Kankeyanodai South - 155</option>
					<option>Kankeyanodai - 155</option>
					<option>Palamunai - 152</option>
					<option>Kovilkulam - 156C</option>
					<option>Irajathuraikiramam</option>
					<option>Selvanakar - 157A</option>
					<option>Selvanakar East - 156B</option>
					<option>Arayampathy-03 - 156</option>
					<option>Arayampathy South - 156C</option>
					<option>Arayampathy East - 157C</option>
					<option>Arayampathy Center - 156D</option>
					<option>Arayampathy-01 - 158</option>
					<option>Arayampathy-02 - 157</option>
					<option>Arayampathy North - 157D</option>
					<option>Arayampathy West - 158A</option>
                                        </select>
                                    </div>
                                    <br>

                                    <b>First Name</b>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-bookmark-o"></i></span>
                                        <input id="first_name" type="text" class="form-control" placeholder="First Name">
                                    </div>
                                    <br>

                                    <b>Last Name</b>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-bookmark-o"></i></span>
                                        <input id="last_name" type="text" class="form-control" placeholder="Last Name">
                                    </div>
                                    <br>

                                    <b>Address</b>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-bookmark-o"></i></span>
                                        <input id="address" type="text" class="form-control" placeholder="Address">
                                    </div>
                                    <br>

                                    <b>Telephone Number</b>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-bookmark-o"></i></span>
                                        <input id="tp_number" type="text" class="form-control" data-inputmask='"mask": "(999)-9999999"' data-mask placeholder="Telephone Number">
                                    </div>
                                    <br>

                                    <b>Date of Birth</b>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-bookmark-o"></i></span>
                                        <input id="dob" type="date" class="form-control" placeholder="DOB">
                                    </div>
                                    <br>


                                </div>
                            </div>
                        </div>


                    </div>
                </div>


            </div>
            <div class="modal-footer">
                <button id="update_public"  class="btn btn-success btn-flat">Save Changes</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>


@section('script')
    <script>

        $(document).ready(function() {
            //$('.select2').select2();
            $('[data-mask]').inputmask();
            $('#table').DataTable({
                dom: "<'row'<'col-sm-12'Bftr>>" +
                "<'row'<'col-sm-4'l><'col-sm-8'p>>",
                buttons: [

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
                    { data: 'dob', name: 'dob' },
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

        function update(el){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')                    }
            });
            jQuery.ajax({
                url: "{{ url('/update_public_data') }}",
                method: 'post',
                data: {
                    nic: el,
                },
                success: function (result) {
                    //toastrOption();
                    //Command: toastr["success"]('First Name : ' + $('#first_name').val() + '<br>' + 'NIC No : ' + $('#users').val(), "Token Issued Successfully ");
                    //console.log(result);

                    $('#nic').val(result.data[0].nic);
                    $('#gs_division').val(result.data[0].gs_division);
                    $('#first_name').val(result.data[0].first_name);
                    $('#last_name').val(result.data[0].last_name);
                    $('#address').val(result.data[0].address);
                    $('#tp_number').val(result.data[0].phone);
                    $('#dob').val(result.data[0].dob);
                }
            });

            $('#myModal').modal('toggle');
        }


        $('#update_public').click(function () {

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
                            url: "{{ url('/update_public_db') }}",
                            method: 'post',
                            data: {
                                nic: $('#nic').val(),
                                first_name: $('#first_name').val(),
                                last_name: $('#last_name').val(),
                                address: $('#address').val(),
                                phone: $('#tp_number').val(),
                                gs_division: $('#gs_division').val(),
                                dob: $('#dob').val()
                            },
                            success: function (result) {
                                sta = 'ok';
                                $('#myModal').modal('hide');
                                swal({
                                    title: "Public data Updated !",
                                    text: "Your imaginary file has been updated!",
                                    type: "success",
                                    timer: 90000
                                });
                                var table = $("#table").DataTable();
                                table.ajax.reload();


                            }
                        });
                        if(sta == "ok"){
                        }
                        else {
                            swal({
                                title: "Error",
                                text: "Enter full details to update!",
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