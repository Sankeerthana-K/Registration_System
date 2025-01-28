@section('title', 'Issue Token')
@include('layout.header');

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Settings
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
            <li class="active">Here</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

        <div class="row">
            <div class="col-md-7">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Issue Token Form</h3>
                    </div>

                    <div class="box-body">
                        <meta name="csrf-token" content="{{ csrf_token() }}">
                        <b>National Identiy Card No</b>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-bookmark-o"></i></span>
                            <select name="user_id" id="users" class="form-control">

                            </select>
                            <span class="input-group-addon">V</span>
                        </div>
                        <br>


                        <b>First Name</b>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-bookmark-o"></i></span>
                            <input id="first_name" type="text" class="form-control" placeholder="First Name">
                        </div>
                        <br>


                    </div>
                </div>
            </div>

            <div class="col-md-5">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">By Firm Name Registration Form</h3>
                    </div>

                    <div class="box-body">

                        //content


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

            jQuery.ajax({
                url: "{{ url('/issue_token_data') }}",
                method: 'post',
                data: {
                    name: jQuery('#name').val(),
                    type: jQuery('#type').val(),
                    price: jQuery('#price').val()
                },
                success: function(result){
                    console.log(result);
                }});

        });
    </script>
@stop

@include('layout.footer');













