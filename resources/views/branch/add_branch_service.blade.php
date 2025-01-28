@section('title', 'Issue Token')
@include('layout.header');

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Add Branch/Service
            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Branch/Service</li>
            <li class="active">Add Branch/Service</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

        <div class="row">


            <div class="col-md-7" id="box1">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title"></h3>
                    </div>
                    <div class="box-body">

                        <div class="info-box bg-yellow">
                            <span class="info-box-icon"><span class="glyphicon glyphicon-play"></span></span>

                            <div class="info-box-content">
                                <span class="info-box-number">Select the option >>>></span>

                                <div class="progress">
                                    <div class="progress-bar" style="width: 100%"></div>
                                </div>
                                <span class="progress-description">
                                    Add Branch / Service
                      </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>


                    </div>
                </div>
            </div>




            <div class="col-md-7" id="box2">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Add Branch Form</h3>

                    </div>

                    <div class="box-body">
                        <meta name="csrf-token" content="{{ csrf_token() }}">

                        <b>Branch Name</b>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-bookmark-o"></i></span>
                            <input id="branch_name" type="text" class="form-control" placeholder="Branch Name">
                        </div>
                        <br>


                        <b>Head Of the Branch</b>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-bookmark-o"></i></span>
                            <input id="head_of_the_branch" type="text" class="form-control" placeholder="Head Of the Branch">
                        </div>
                        <br>

                        <button id="add_branch" type="button" class="btn btn-block btn-success btn-flat">Add Branch</button>

                    </div>
                </div>

            </div>
                <div class="col-md-7" id="box3">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Add Service Form</h3>



                    </div>

                    <div class="box-body">
                        <meta name="csrf-token" content="{{ csrf_token() }}">


                        <b>Branch</b>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-bookmark-o"></i></span>
                            <select name="branch_id" id="branch_id" class="form-control select2" style="width: 100%;">
                                <option>Select Branch</option>
                            </select>
                        </div>
                        <br>

                        <b>Service Name</b>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-bookmark-o"></i></span>
                            <input id="service_name" type="text" class="form-control" placeholder="Service Name" maxlength="28">
                        </div>
                        <br>

                        <b>First Officer Name</b>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-bookmark-o"></i></span>
                            <input id="first_officer" type="text" class="form-control" placeholder="First Office">
                        </div>
                        <br>

                        <b>Second Officer Name</b>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-bookmark-o"></i></span>
                            <input id="second_officer" type="text" class="form-control" placeholder="Second Office">
                        </div>
                        <br>

                        <b>Third Officer Name</b>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-bookmark-o"></i></span>
                            <input id="third_officer" type="text" class="form-control" placeholder="Third Office">
                        </div>
                        <br>

                        <button id="add_service" type="button" class="btn btn-block btn-success btn-flat">Add Service</button>

                    </div>
                </div>
                </div>


            <div class="col-md-5">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Select the option</h3>
                    </div>

                    <div class="box-body">

                        <button id="add_branch_option" onclick="add_branch_option()" type="button" class="btn btn-block btn-info btn-flat" >Add Branch</button>
                        <button id="add_service_option" onclick="add_service_option()" type="button" class="btn btn-block btn-info btn-flat">Add Service</button>


                    </div>
                </div>
            </div>



        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Branches And Services On Database</h3>
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
        var branchID;
        $('#branch_id').on('select2:select', function (e) {
            branchID = e.params.data.id;
            console.log(branchID);
        });


        $('#add_branch').click(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


            swal({
                    title: "Are you sure to insert a branch?",
                    text: "You will not be able to delete branch entry after entered!",
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
                            url: "{{ url('/add_branch') }}",
                            method: 'post',
                            data: {
                                name: $('#branch_name').val(),
                                head: $('#head_of_the_branch').val(),
                            },

                            success: function (result) {
                                //toastrOption();
                                //Command: toastr["success"]('Branch Name : ' + $('#branch_name').val() + '<br>' + 'Head Of The Branch : ' + $('#head_of_the_branch').val(), "Branch Added Successfully ");
                                console.log(result);
                                window.onkeydown = window.onfocus = null; // This line is the solution
                                $('#branch_name').focus();
                                swal({
                                    title: "Branch Inserted !",
                                    text: "Branch inserted to database  successfully!",
                                    type: "success",
                                    timer: 7000
                                });
                                $('#branch_name').val('');
                                $('#head_of_the_branch').val('');

                                jQuery.ajax({
                                    url: "{{ url('/select_branch') }}",
                                    method: 'post',
                                    data: {
                                    },
                                    success: function(people){
                                        $('#branch_id').empty();
                                        $('#branch_id').append('<option>Select Branch</option>');
                                        for(var i=0; i < people.data.length; i++){
                                            $('#branch_id').append('<option value =  ' +people.data[i].id + '>' + people.data[i].name + '</option>');
                                        }
                                        $('#branch_id').select2();
                                    }});
                            }
                        });


                        if(sta == "ok"){
                        }
                        else {
                            swal({
                                title: "Error",
                                text: "Enter full details to insert branch!",
                                type: "error",
                                timer: 3000
                            });
                        }
                    }

                    else {
                        swal("Cancelled", "Nothing happed :)", "error");
                    }
                });
        });



        $('#add_service').click(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            swal({
                    title: "Are you sure to insert service?",
                    text: "You will not be able to delete service after entry!",
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
                            url: "{{ url('/add_service') }}",
                            method: 'post',
                            data: {
                                s_id: branchID,
                                s_name: $('#service_name').val(),
                                first_officer: $('#first_officer').val(),
                                second_officer: $('#second_officer').val(),
                                third_officer: $('#third_officer').val(),
                            },
                            success: function(result){
                                sta = 'ok';
                                window.onkeydown = window.onfocus = null; // This line is the solution
                                $('#branch_id').focus();

                                swal({
                                    title: "Service Inserted !",
                                    text: "Service Inserted to database successfully!",
                                    type: "success",
                                    timer: 7000
                                });

                                $('#service_name').val('');
                                $('#first_officer').val('');
                                $('#second_officer').val('');
                                $('#third_officer').val('');
                                $('#branch_id').prop('selectedIndex', 0).change();

                                var table = $("#table1").DataTable();
                                table.ajax.reload();


                            }});

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
                    }

                    else {
                        swal("Cancelled", "Nothing happed :)", "error");
                    }
                });
        });


        function add_branch_option() {
            $("#box1").hide();
            $("#box2").show();
            $("#box3").hide();
            $("#box4").hide();
            $('#branch_name').focus();

        }

        function add_service_option() {
            $("#box3").show();
            $("#box4").show();
            $("#box2").hide();
            $("#box1").hide();
            $('#branch_id').focus();


        }


        jQuery(document).ready(function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            jQuery.ajax({
                url: "{{ url('/select_branch') }}",
                method: 'post',
                data: {
                },
                success: function(people){
                    $('#branch_id').empty();
                    $('#branch_id').append('<option>Select Branch</option>');
                    for(var i=0; i < people.data.length; i++){
                        $('#branch_id').append('<option value =  ' +people.data[i].id + '>' + people.data[i].name + '</option>');
                    }
                    $('#branch_id').select2();
                }});


            $("#box2").hide();
            $("#box3").hide();
            $("#box4").hide();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });



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
    </script>
@stop

@include('layout.footer');