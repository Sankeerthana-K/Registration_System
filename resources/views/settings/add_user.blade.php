@section('title', 'Add User')
@include('layout.header');

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Add User
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
            <li class="active">Here</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Add User</h3>
                    </div>

                    <div class="box-body">
                        <div class="card-body">

                            <meta name="csrf-token" content="{{ csrf_token() }}">

                            <div class="box-body">

                                <b>E-Mail Address</b>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-bookmark-o"></i></span>
                                    <input id="e_mail" type="text" class="form-control" placeholder="E-Mail Address">
                                </div>
                                <br>

                                <b>Password</b>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-bookmark-o"></i></span>
                                    <input id="password" type="password" class="form-control" placeholder="Password">
                                </div>
                                <br>

                                <b>User Name</b>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-bookmark-o"></i></span>
                                    <input id="name" type="text" class="form-control" placeholder="User Name">
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

                                <b>User Role</b>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-bookmark-o"></i></span>
                                    <select name="role" id="role" class="form-control select2" style="width: 100%;">
                                        <option>Select User Role</option>
                                        <option>Admin</option>
                                        <option>Receptionist</option>
                                        <option>Staff</option>
                                    </select>
                                </div>
                                <br>

                                <b>Branch</b>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-bookmark-o"></i></span>
                                    <select name="branch_id" id="branch" class="form-control select2" style="width: 100%;">
                                        <option>Select Branch</option>
                                    </select>
                                </div>
                                <br>




                                <button id="add_user" type="button" class="btn btn-block btn-success btn-flat">Add User</button>


                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>


        </div>




    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@section('script')
    <script>

        jQuery(document).ready(function() {
            $('.select2').select2();
        })
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')                    }
        });


        $("#add_user").click(function(){
            swal({
                    title: "Are you sure to add user?",
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
                        jQuery.ajax({
                            url: "{{ url('/add_user') }}",
                            method: 'post',
                            data: {
                                name: $('#name').val(),
                                first_name: $('#first_name').val(),
                                last_name: $('#last_name').val(),
                                branch: $('#branch').val(),
                                email: $('#e_mail').val(),
                                password: $('#password').val(),
                                role: $('#role').val()
                            },
                            success: function(result){

                                window.onkeydown = window.onfocus = null; // This line is the solution

                                swal({
                                    title: "User Added !",
                                    text: "User added to database  successfully!",
                                    type: "success",
                                    timer: 7000
                                });

                            }});
                    }

                    else {
                        swal("Cancelled", "Nothing happed  :)", "error");
                    }
                });




        });



    </script>

@stop

@include('layout.footer');













