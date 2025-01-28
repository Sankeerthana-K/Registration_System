@section('title', 'User Profile')
@include('layout.header');

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Profile
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
                        <h3 class="box-title">Change Profile Settings</h3>
                    </div>

                    <div class="box-body">
                        <div class="card-body">

                            <meta name="csrf-token" content="{{ csrf_token() }}">

                            <div class="box-body">

                                <b>E-Mail Address</b>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-bookmark-o"></i></span>
                                    <input id="e_mail" type="text" disabled class="form-control" placeholder="E-Mail Address" value="{{ Auth::user()->email }}">
                                </div>
                                <br>

                                <b>User Name</b>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-bookmark-o"></i></span>
                                    <input id="user_name" type="text" class="form-control" placeholder="User Name" value="{{ Auth::user()->name }}">
                                </div>
                                <br>

                                <b>Password</b>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-bookmark-o"></i></span>
                                    <input id="password" type="password" class="form-control" placeholder="Password">
                                </div>
                                <br>

                                <b>Password</b>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-bookmark-o"></i></span>
                                    <input id="password" type="password" class="form-control" placeholder="Password">
                                </div>
                                <br>


                                <b>First Name</b>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-bookmark-o"></i></span>
                                    <input id="first_name" type="text" class="form-control" placeholder="First Name" value="{{ Auth::user()->first_name }}">
                                </div>
                                <br>

                                <b>Last Name</b>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-bookmark-o"></i></span>
                                    <input id="last_name" type="text" class="form-control" placeholder="Last Name" value="{{ Auth::user()->last_name }}">
                                </div>
                                <br>






                                <button id="save_changes" type="button" class="btn btn-block btn-success btn-flat">Save Changes</button>


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

@stop

@include('layout.footer');













