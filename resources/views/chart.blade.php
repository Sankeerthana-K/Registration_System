@section('title', 'Charts')
@include('layout.header');

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Chart
            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Chart</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

        <div class="row">
            <div class="col-md-12">
                <div class="nav-tabs-custom">
                    <!-- Tabs within a box -->
                    <ul class="nav nav-tabs pull-right">
                        <li class="active"><a href="#accountsw" data-toggle="tab">Accounts</a></li>
                        <li><a href="#socialw" data-toggle="tab">Social</a></li>
                        <li><a href="#registerw" data-toggle="tab">Register</a></li>
                        <li><a href="#womenandchildw" data-toggle="tab">Women & Child</a></li>
                        <li><a href="#adminw" data-toggle="tab">Admin</a></li>
                        <li><a href="#planningw" data-toggle="tab">Planning</a></li>
                        <li><a href="#landw" data-toggle="tab">Land</a></li>
                        <li><a href="#samoorthiw" data-toggle="tab">Samoorthi</a></li>
                        <li class="pull-left header"><i class="fa fa-inbox"></i> Weekly Chart</li>
                    </ul>
                    <div class="tab-content no-padding">
                        <div class="chart tab-pane active" id="accountsw" style="position: relative; height: 450px; ">{!! $branch5w->container() !!}</div>
                        <div class="chart tab-pane" id="socialw" style="position: relative; height: 450px;">{!! $branch2w->container() !!}</div>
                        <div class="chart tab-pane" id="registerw" style="position: relative; height: 450px;">{!! $branch7w->container() !!}</div>
                        <div class="chart tab-pane" id="womenandchildw" style="position: relative; height: 450px;">{!! $branch6w->container() !!}</div>
                        <div class="chart tab-pane" id="adminw" style="position: relative; height: 450px;">{!! $branch1w->container() !!}</div>
                        <div class="chart tab-pane" id="planningw" style="position: relative; height: 450px;">{!! $branch3w->container() !!}</div>
                        <div class="chart tab-pane" id="landw" style="position: relative; height: 450px;">{!! $branch4w->container() !!}</div>
                        <div class="chart tab-pane" id="samoorthiw" style="position: relative; height: 450px;">{!! $branch8w->container() !!}</div>
                    </div>
                </div>

            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <div class="nav-tabs-custom">
                    <!-- Tabs within a box -->
                    <ul class="nav nav-tabs pull-right">
                        <li class="{{ Session::get('tabState1') }}"><a href="#accounts" data-toggle="tab">Accounts</a></li>
                        <li class="{{ Session::get('tabState2') }}"><a href="#social" data-toggle="tab">Social</a></li>
                        <li class="{{ Session::get('tabState3') }}"><a href="#register" data-toggle="tab">Register</a></li>
                        <li class="{{ Session::get('tabState4') }}"><a href="#womenandchild" data-toggle="tab">Women & Child</a></li>
                        <li class="{{ Session::get('tabState5') }}"><a href="#admin" data-toggle="tab">Admin</a></li>
                        <li class="{{ Session::get('tabState6') }}"><a href="#planning" data-toggle="tab">Planning</a></li>
                        <li class="{{ Session::get('tabState7') }}"><a href="#land" data-toggle="tab">Land</a></li>
                        <li class="{{ Session::get('tabState8') }}"><a href="#samoorthi" data-toggle="tab">Samoorthi</a></li>
                        <li class="pull-left header"><i class="fa fa-inbox"></i> Monthly Chart</li>
                    </ul>
                    <div class="tab-content no-padding">
                        <div class="chart tab-pane {{ Session::get('tabState1') }}" id="accounts" style="position: relative; height: 500px; ">
                            <div style="position: relative; height: 400px; " >
                                {!! $branch5->container() !!}
                            </div>
                            <div style="float: right;height: 63px">
                                <label>---   Select Month to Display Chart  ---</label>
                                <form action="/chart">
                                    <select name="month" id="month" class=" form-control">
                                        <option value="1">January</option>
                                        <option value="2">February</option>
                                        <option value="3">March</option>
                                        <option value="4">April</option>
                                        <option value="5">May</option>
                                        <option value="6">June</option>
                                        <option value="7">July</option>
                                        <option value="8">August</option>
                                        <option value="9">September</option>
                                        <option value="10">October</option>
                                        <option value="11">November</option>
                                        <option value="12">December</option>
                                    </select>
                                    <input type="text" value="5"  name="branch" hidden>
                                    <center> <button  onclick="saveTab(1)"   class="btn btn-success" style="text-align: center;margin-top: 2px">Submit</button></center>
                                </form>
                            </div>

                            <div style="float: left;height: 63px">
                                <h2>
                                    {{ $month }}
                                    Issued token Chart of Accounts Branch
                                </h2>                            </div>
                        </div>
                        <div class="chart tab-pane {{ Session::get('tabState2') }}" id="social" style="position: relative; height: 500px;">
                            <div style="position: relative; height: 400px; " >
                                {!! $branch2->container() !!}
                            </div>
                            <div style="float: right;height: 63px">
                                <label>---   Select Month to Display Chart  ---</label>
                                <form action="/chart1">
                                    <select name="month" id="month" class=" form-control">
                                        <option value="1">January</option>
                                        <option value="2">February</option>
                                        <option value="3">March</option>
                                        <option value="4">April</option>
                                        <option value="5">May</option>
                                        <option value="6">June</option>
                                        <option value="7">July</option>
                                        <option value="8">August</option>
                                        <option value="9">September</option>
                                        <option value="10">October</option>
                                        <option value="11">November</option>
                                        <option value="12">December</option>
                                    </select>
                                    <input type="text" value="2"  name="branch" hidden>
                                    <center> <button onclick="saveTab(2)"  class="btn btn-success" style="text-align: center;margin-top: 2px">Submit</button></center>
                                </form>
                            </div>

                            <div style="float: left;height: 63px">
                                <h2>
                                    {{ $month }}
                                    Issued token Chart of Social Branch
                                </h2>                            </div>
                        </div>
                        <div class="chart tab-pane {{ Session::get('tabState3') }}" id="register" style="position: relative; height: 500px;">
                            <div style="position: relative; height: 400px; " >
                                {!! $branch7->container() !!}
                            </div>
                            <div style="float: right;height: 63px">
                                <label>---   Select Month to Display Chart  ---</label>
                                <form action="/chart">
                                    <select name="month" id="month" class=" form-control">
                                        <option value="1">January</option>
                                        <option value="2">February</option>
                                        <option value="3">March</option>
                                        <option value="4">April</option>
                                        <option value="5">May</option>
                                        <option value="6">June</option>
                                        <option value="7">July</option>
                                        <option value="8">August</option>
                                        <option value="9">September</option>
                                        <option value="10">October</option>
                                        <option value="11">November</option>
                                        <option value="12">December</option>
                                    </select>
                                    <input type="text" value="7"  name="branch" hidden>
                                    <center> <button onclick="saveTab(3)"  class="btn btn-success" style="text-align: center;margin-top: 2px">Submit</button></center>
                                </form>
                            </div>

                            <div style="float: left;height: 63px">
                                <h2>
                                    {{ $month }}
                                    Issued token Chart of Registar Branch
                                </h2>                            </div>
                        </div>
                        <div class="chart tab-pane {{ Session::get('tabState4') }}" id="womenandchild" style="position: relative; height: 500px;">
                            <div style="position: relative; height: 400px; " >
                                {!! $branch6->container() !!}
                            </div>
                            <div style="float: right;height: 63px">
                                <label>---   Select Month to Display Chart  ---</label>
                                <form action="/chart">
                                    <select name="month" id="month" class=" form-control">
                                        <option value="1">January</option>
                                        <option value="2">February</option>
                                        <option value="3">March</option>
                                        <option value="4">April</option>
                                        <option value="5">May</option>
                                        <option value="6">June</option>
                                        <option value="7">July</option>
                                        <option value="8">August</option>
                                        <option value="9">September</option>
                                        <option value="10">October</option>
                                        <option value="11">November</option>
                                        <option value="12">December</option>
                                    </select>
                                    <input type="text" value="6"  name="branch" hidden>
                                    <center> <button onclick="saveTab(4)" class="btn btn-success" style="text-align: center;margin-top: 2px">Submit</button></center>
                                </form>
                            </div>

                            <div style="float: left;height: 63px">
                                <h2>
                                    {{ $month }}
                                    Issued token Chart of Women And Child Branch
                                </h2>                            </div>
                        </div>
                        <div class="chart tab-pane {{ Session::get('tabState5') }}" id="admin" style="position: relative; height: 500px;">
                            <div style="position: relative; height: 400px; " >
                                {!! $branch1->container() !!}
                            </div>
                            <div style="float: right;height: 63px">
                                <label>---   Select Month to Display Chart  ---</label>
                                <form action="/chart">
                                    <select name="month" id="month" class=" form-control">
                                        <option value="1">January</option>
                                        <option value="2">February</option>
                                        <option value="3">March</option>
                                        <option value="4">April</option>
                                        <option value="5">May</option>
                                        <option value="6">June</option>
                                        <option value="7">July</option>
                                        <option value="8">August</option>
                                        <option value="9">September</option>
                                        <option value="10">October</option>
                                        <option value="11">November</option>
                                        <option value="12">December</option>
                                    </select>
                                    <input type="text" value="1"  name="branch" hidden>
                                    <center> <button onclick="saveTab(5)" class="btn btn-success" style="text-align: center;margin-top: 2px">Submit</button></center>
                                </form>
                            </div>

                            <div style="float: left;height: 63px">
                                <h2>
                                    {{ $month }}
                                    Issued token Chart of Admin Branch
                                </h2>                            </div>
                        </div>
                        <div class="chart tab-pane {{ Session::get('tabState6') }}" id="planning" style="position: relative; height: 500px;">
                            <div style="position: relative; height: 400px; " >
                                {!! $branch3->container() !!}
                            </div>
                            <div style="float: right;height: 63px">
                                <label>---   Select Month to Display Chart  ---</label>
                                <form action="/chart">
                                    <select name="month" id="month" class=" form-control">
                                        <option value="1">January</option>
                                        <option value="2">February</option>
                                        <option value="3">March</option>
                                        <option value="4">April</option>
                                        <option value="5">May</option>
                                        <option value="6">June</option>
                                        <option value="7">July</option>
                                        <option value="8">August</option>
                                        <option value="9">September</option>
                                        <option value="10">October</option>
                                        <option value="11">November</option>
                                        <option value="12">December</option>
                                    </select>
                                    <input type="text" value="3"  name="branch" hidden>
                                    <center> <button onclick="saveTab(6)" class="btn btn-success" style="text-align: center;margin-top: 2px">Submit</button></center>
                                </form>
                            </div>

                            <div style="float: left;height: 63px">
                                <h2>
                                    {{ $month }}
                                    Issued token Chart of Planning Branch
                                </h2>                            </div>
                        </div>
                        <div class="chart tab-pane {{ Session::get('tabState7') }}" id="land" style="position: relative; height: 500px;">
                            <div style="position: relative; height: 400px; " >
                                {!! $branch4->container() !!}
                            </div>
                            <div style="float: right;height: 63px">
                                <label>---   Select Month to Display Chart  ---</label>
                                <form action="/chart">
                                    <select name="month" id="month" class=" form-control">
                                        <option value="1">January</option>
                                        <option value="2">February</option>
                                        <option value="3">March</option>
                                        <option value="4">April</option>
                                        <option value="5">May</option>
                                        <option value="6">June</option>
                                        <option value="7">July</option>
                                        <option value="8">August</option>
                                        <option value="9">September</option>
                                        <option value="10">October</option>
                                        <option value="11">November</option>
                                        <option value="12">December</option>
                                    </select>
                                    <input type="text" value="4"  name="branch" hidden>
                                    <center> <button  onclick="saveTab(7)" class="btn btn-success" style="text-align: center;margin-top: 2px">Submit</button></center>
                                </form>
                            </div>

                            <div style="float: left;height: 63px">
                                <h2>
                                    {{ $month }}
                                    Issued token Chart of Land Branch
                                </h2>                            </div>
                        </div>
                        <div class="chart tab-pane {{ Session::get('tabState8') }}" id="samoorthi" style="position: relative; height: 500px;">
                            <div style="position: relative; height: 400px; " >
                                {!! $branch8->container() !!}
                            </div>
                            <div style="float: right;height: 63px">
                                <label>---   Select Month to Display Chart  ---</label>
                                <form action="/chart">
                                    <select name="month" id="month" class=" form-control">
                                        <option value="1">January</option>
                                        <option value="2">February</option>
                                        <option value="3">March</option>
                                        <option value="4">April</option>
                                        <option value="5">May</option>
                                        <option value="6">June</option>
                                        <option value="7">July</option>
                                        <option value="8">August</option>
                                        <option value="9">September</option>
                                        <option value="10">October</option>
                                        <option value="11">November</option>
                                        <option value="12">December</option>
                                    </select>
                                    <input type="text" value="8"  name="branch" hidden>
                                    <center> <button onclick="saveTab(8)" class="btn btn-success" style="text-align: center;margin-top: 2px">Submit</button></center>
                                </form>
                            </div>

                            <div style="float: left;height: 63px">
                                <h2>
                                    {{ $month }}
                                    Issued token Chart of Samoorthi Branch
                                </h2>                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <div class="nav-tabs-custom">
                    <!-- Tabs within a box -->
                    <ul class="nav nav-tabs pull-right">
                        <li class="active"><a href="#accountsy" data-toggle="tab">Accounts</a></li>
                        <li><a href="#socialy" data-toggle="tab">Social</a></li>
                        <li><a href="#registery" data-toggle="tab">Register</a></li>
                        <li><a href="#womenandchildy" data-toggle="tab">Women & Child</a></li>
                        <li><a href="#adminy" data-toggle="tab">Admin</a></li>
                        <li><a href="#planningy" data-toggle="tab">Planning</a></li>
                        <li><a href="#landy" data-toggle="tab">Land</a></li>
                        <li><a href="#samoorthiy" data-toggle="tab">Samoorthi</a></li>
                        <li class="pull-left header"><i class="fa fa-inbox"></i> Yearly Chart</li>
                    </ul>
                    <div class="tab-content no-padding">
                        <div class="chart tab-pane active" id="accounts" style="position: relative; height: 450px; ">
                            {!! $monthchartaccounts->container() !!}
                        </div>
                        <div class="chart tab-pane" id="socialy" style="position: relative; height: 450px;">{!! $monthchartsocial->container() !!}</div>
                        <div class="chart tab-pane" id="registery" style="position: relative; height: 450px;">{!! $monthchartregister->container() !!}</div>
                        <div class="chart tab-pane" id="womenandchildy" style="position: relative; height: 450px;">{!! $monthchartwomenandchild->container() !!}</div>
                        <div class="chart tab-pane" id="adminy" style="position: relative; height: 450px;">{!! $monthchartadmin->container() !!}</div>
                        <div class="chart tab-pane" id="planningy" style="position: relative; height: 450px;">{!! $monthchartplanning->container() !!}</div>
                        <div class="chart tab-pane" id="landy" style="position: relative; height: 450px;">{!! $monthchartland->container() !!}</div>
                        <div class="chart tab-pane" id="samoorthiy" style="position: relative; height: 450px;">{!! $monthchartsamoorthi->container() !!}</div>
                    </div>
                </div>

            </div>
        </div>



        <div class="row">
            <div class="col-md-12">
                <div class="nav-tabs-custom">
                    <!-- Tabs within a box -->
                    <ul class="nav nav-tabs pull-right">
                        <li class="active"><a href="#accounts" data-toggle="tab">Accounts</a></li>
                        <li><a href="#social" data-toggle="tab">Social</a></li>
                        <li><a href="#register" data-toggle="tab">Register</a></li>
                        <li><a href="#womenandchild" data-toggle="tab">Women & Child</a></li>
                        <li><a href="#admin" data-toggle="tab">Admin</a></li>
                        <li><a href="#planning" data-toggle="tab">Planning</a></li>
                        <li><a href="#land" data-toggle="tab">Land</a></li>
                        <li><a href="#samoorthi" data-toggle="tab">Samoorthi</a></li>
                        <li class="pull-left header"><i class="fa fa-inbox"></i> Monthly Chart</li>
                    </ul>
                    <div class="tab-content no-padding">
                        <div class="chart tab-pane active" id="accounts" style="position: relative; height: 450px; ">

                        </div>
                        <div class="chart tab-pane" id="social" style="position: relative; height: 450px;"></div>
                        <div class="chart tab-pane" id="register" style="position: relative; height: 450px;"></div>
                        <div class="chart tab-pane" id="womenandchild" style="position: relative; height: 450px;"></div>
                        <div class="chart tab-pane" id="admin" style="position: relative; height: 450px;"></div>
                        <div class="chart tab-pane" id="planning" style="position: relative; height: 450px;"></div>
                        <div class="chart tab-pane" id="land" style="position: relative; height: 450px;"></div>
                        <div class="chart tab-pane" id="samoorthi" style="position: relative; height: 450px;"></div>
                    </div>
                </div>

            </div>
        </div>


    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@section('script')
    {!! $branch1->script() !!}
    {!! $branch2->script() !!}
    {!! $branch3->script() !!}
    {!! $branch4->script() !!}
    {!! $branch5->script() !!}
    {!! $branch6->script() !!}
    {!! $branch7->script() !!}
    {!! $branch8->script() !!}
    {!! $branch1w->script() !!}
    {!! $branch2w->script() !!}
    {!! $branch3w->script() !!}
    {!! $branch4w->script() !!}
    {!! $branch5w->script() !!}
    {!! $branch6w->script() !!}
    {!! $branch7w->script() !!}
    {!! $branch8w->script() !!}
    {!! $monthchartaccounts->script() !!}
    {!! $monthchartregister->script() !!}
    {!! $monthchartplanning->script() !!}
    {!! $monthchartadmin->script() !!}
    {!! $monthchartland->script() !!}
    {!! $monthchartsamoorthi->script() !!}
    {!! $monthchartsocial->script() !!}
    {!! $monthchartwomenandchild->script() !!}



    <script>



        function saveTab(branch) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "POST",
                url: "{{ url('savestatetab') }}",
                data:{branch1:branch},
            });
        }
    </script>
@stop




@include('layout.footer');