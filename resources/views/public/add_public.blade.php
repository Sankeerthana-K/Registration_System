@section('title', 'Add Public Details')
@include('layout.header');

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Add Public Details
            <small>To Database</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Public</li>
            <li class="active">Add Public</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Add Public Details Form</h3>
                    </div>

                    <div class="box-body">
                        <meta name="csrf-token" content="{{ csrf_token() }}">

                            <div class="box-body">
<input id="nic_status" value="nic" hidden>
                                <b>NIC No / Serial No</b>
                                <div class="input-group input-group">
                                    <div class="input-group-btn">
                                        <button id="action_btn" type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">With NIC
                                            <span class="fa fa-caret-down"></span></button>
                                        <ul class="dropdown-menu">
                                            <li><a href="#" onclick="action_key('nic')">With NIC </a></li>
                                            <li><a href="#" onclick="action_key('nonic')">Without NIC</a></li>
                                        </ul>
                                    </div>
                                    <!-- /btn-group -->
                                    <div class="input-group">
                                        <input id="nic" type="text" class="form-control" data-inputmask='"mask": "[999999999999]"' data-mask placeholder="NIC">
                                        <span id="vo" class="input-group-addon">V</span>
                                    </div>
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
                                <button id="add_public" type="button" class="btn btn-block btn-success btn-flat">Add Public</button>


                            </div>
                        </div>
                    </div>


                    </div>
                </div>



<a href="hhh">gg</a>


    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@section('script')
    <script>
        jQuery(document).ready(function(){
            $('.select2').select2();
            $('[data-mask]').inputmask();
            $('#nic').val('');
            $('#nic').focus();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')                    }
            });


            $("#add_public").click(function(){
            swal({
                    title: "Are you sure to add public?",
                    text: "You will not be able to delete public entry!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonClass: "btn-success",
                    confirmButtonText: "Yes, Insert!",
                    cancelButtonText: "No, cancel!",
                    closeOnConfirm: false,
                    closeOnCancel: false
                },
                function(isConfirm) {
                    if (isConfirm) {
                        var sta = 'no';
                        jQuery.ajax({
                            url: "{{ url('/add_public_data') }}",
                            method: 'post',
                            data: {
                                nic: $('#nic').val(),
                                gs_division: $('#gs_division').val(),
                                first_name: $('#first_name').val(),
                                last_name: $('#last_name').val(),
                                address: $('#address').val(),
                                phone: $('#tp_number').val(),
                                dob: $('#dob').val()
                            },
                            success: function(result){
                                var people_key_update = parseInt($('#nic').val()) + 1;
                                $('#nic').val('');
                                $('#gs_division').val('');
                                $('#first_name').val('');
                                $('#last_name').val('');
                                $('#address').val('');
                                $('#tp_number').val('');
                                $('#dob').val('');
                                sta = 'ok';
                                window.onkeydown = window.onfocus = null; // This line is the solution
                                $('#nic').focus();
                                $('#gs_division').prop('selectedIndex', 0).change();

                                swal({
                                    title: "Public Added !",
                                    text: "Public added to database  successfully!",
                                    type: "success",
                                    timer: 7000
                                });

                                $('#nic').focus();
                                $.ajaxSetup({
                                    headers: {
                                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                    }
                                });

				if($('#nic_status').val() == "nonic"){
                                jQuery.ajax({
                                    url: "{{ url('/update_public_key') }}",
                                    method: 'post',
                                    data: {
                                        people_key_update: people_key_update,
                                    },
                                    success: function (data) {
                                    }
                                });
				}

                            }});

                        if(sta == "ok"){
                        }
                        else {
                            swal({
                                title: "Error",
                                text: "Enter full details to issue token!",
                                type: "error",
                                timer: 3000
                            });
                        }
                    }

                    else {
                        swal("Cancelled", "Nothing happed to token :)", "error");
                    }
                });




            });


        });

        function toastrOption() {
            toastr.options = {
                "closeButton": true,
                "debug": false,
                "newestOnTop": true,
                "progressBar": true,
                "positionClass": "toast-top-right",
                "preventDuplicates": true,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }

        }



        function action_key($key) {
            if ($key == 'nic') {
		$('#nic_status').val("nic");
                $('#nic').removeAttr("disabled");
                $('#nic').val('');
                $('#nic').focus();
                $('#action_btn').html('With NIC <span class="fa fa-caret-down"></span>');
                $('#vo').text('V');
            }
            else if($key == 'nonic'){
		$('#nic_status').val("nonic");
                $('#action_btn').html('Without NIC <span class="fa fa-caret-down"></span>');
                $('#nic').attr("disabled", "disabled");
                $('#vo').text('');
                $('#gs_division').focus();


                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                jQuery.ajax({
                    url: "{{ url('/add_public_key') }}",
                    method: 'post',
                    data: {

                    },
                    success: function (people) {
                        console.log(people.people_key);

                       $('#nic').val(people.people_key[0].people_id);
//                        $('#last_name').val(people.data_two[0].last_name);
//                        $('#address').val(people.data_two[0].address);
//                        $('#dob').val(people.data_two[0].dob);

                    }

                });


            }

        }


    </script>


@stop

@include('layout.footer')