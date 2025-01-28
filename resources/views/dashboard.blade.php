@section('title', 'Dashboard')
@include('layout.header');

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
          Dashboard
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashbboard</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">



      <div class="row">

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-green">
            <span class="info-box-icon"><i class="fa fa-thumbs-o-up"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Completed</span>
              <span id="completed" class="info-box-number"></span>

              <div class="progress">
                <div id="completed-progress" class="progress-bar">x</div>
              </div>
              <span id="completed-percentage" class="progress-description">
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>


        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-aqua">
            <span class="info-box-icon"><i class="fa fa-bookmark-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">On Processing</span>
              <span id="onprocessing" class="info-box-number"></span>

              <div class="progress">
                <div id="onprocessing-progress" class="progress-bar"></div>
              </div>
              <span id="onprocessing-percentage" class="progress-description">
                    70% In Processing
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->


        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-red">
            <span class="info-box-icon"><i class="fa fa-comments-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Canceled</span>
              <span id="canceled" class="info-box-number"></span>

              <div class="progress">
                <div id="canceled-progress" class="progress-bar" ></div>
              </div>
              <span id="canceled-percentage" class="progress-description">
                    70% Canceled
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>


        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-yellow">
            <span class="info-box-icon"><i class="fa fa-calendar"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Not Processed</span>
              <span id="notprocessed" class="info-box-number"></span>

              <div class="progress">
                <div id="notprocessed-progress" class="progress-bar" ></div>
              </div>
              <span id="notprocessed-percentage" class="progress-description">
                    70% Not Processed
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- /.col -->
      </div>
      <!-- /.row -->




      <div class="row">
        <div class="col-md-7">
          <div class="box box-success" id="pri">
            <div class="box-header with-border">
              <h3 class="box-title">This Week Issued Tokens</h3>
            </div>

            <div class="box-body">
              {!! $weekchart->container() !!}
            </div>
      </div>
        </div>

        <div class="col-md-5">
          <div class="box box-success" id="pri">
            <div class="box-header with-border">
              <h3 class="box-title">This Month Issued Tokens</h3>
            </div>

            <div class="box-body">
              {!! $monthchart->container() !!}
            </div>
          </div>
        </div>

        </div>
       {!! $weekchart->script() !!}
       {!! $monthchart->script() !!}

    </section>
    <!-- /.content -->
  </div>
@section('script')

<script>

    jQuery(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        jQuery.ajax({
            url: "{{ url('/count_queue') }}",
            method: 'post',
            data: {
            },
            success: function (data) {
                $('#completed').html(data.completed);
                $('#onprocessing').html(data.onprocessing);
                $('#canceled').html(data.canceled);
                $('#notprocessed').html(data.notprocessed);

                var total = data.total;

                $('#completed-percentage').text(((data.completed/total)*100).toFixed(2) + '%');
                $('#completed-progress').width(((data.completed/total)*100).toFixed(2)+ '%');

                $('#onprocessing-percentage').text(((data.onprocessing/total)*100).toFixed(2) + '%');
                $('#onprocessing-progress').width(((data.onprocessing/total)*100).toFixed(2)+ '%');

                $('#canceled-percentage').text(((data.canceled/total)*100).toFixed(2) + '%');
                $('#canceled-progress').width(((data.canceled/total)*100).toFixed(2)+ '%');

                $('#notprocessed-percentage').text(((data.notprocessed/total)*100).toFixed(2) + '%');
                $('#notprocessed-progress').width(((data.notprocessed/total)*100).toFixed(2)+ '%');



                console.log(data);
            }
        });
    })




</script>

@stop

@include('layout.footer');