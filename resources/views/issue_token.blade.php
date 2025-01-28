@section('title', 'Issue Token')
@include('layout.header');

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Issue Token
            <small>To Public</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Issue token</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

        <div class="row">
            <div class="col-md-7">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Enter NIC/Name/Serial No</h3>
                    </div>

                    <div class="box-body">
                        <meta name="csrf-token" content="{{ csrf_token() }}">

                        <div class="input-group input-group">
                            <div class="input-group-btn">
                                <button id="action_btn" type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">By NIC <span class="fa fa-caret-down"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="#" onclick="action_key('nic')">By NIC</a></li>
                                    <li><a href="#" onclick="action_key('name')">By Name</a></li>
                                </ul>
                            </div>
                            <!-- /btn-group -->
                            <div class="input-group">
                                <select name="user_id" id="users" class="form-control select2" style="width: 100%;">
                                    <option>Enter NIC No</option>
                                </select>
                                <span id="vo" class="input-group-addon">V</span>
                            </div>
                        </div>


                        <br>

                        <b>Branch</b>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-bookmark-o"></i></span>
                            <select name="branch" id="branch" class="form-control">
                                <option>Select Branch</option>
                            </select>
                        </div>
                        <br>


                        <b>Service</b>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-bookmark-o"></i></span>
                            <select name="service" id="service" class="form-control">
                                <option>Select Service</option>
                            </select>
                        </div>
                        <br>


                        <button id="issue_token" type="button" class="btn btn-block btn-success btn-flat">Issue Token</button>

                    </div>
                    </div>



                </div>




            <div class="col-md-5">
                <div class="nav-tabs-custom">
                    <!-- Tabs within a box -->
                    <ul class="nav nav-tabs pull-right">
                        <li class="active"><a href="#accounts" data-toggle="tab">Public Details</a></li>
                        <li><a href="#social" data-toggle="tab">Operation</a></li>
                        <li class="pull-left header"><i class="fa fa-inbox"></i></li>
                    </ul>
                    <div class="tab-content no-padding">
                        <div class="chart tab-pane active" id="accounts" style="position: relative; height: 250px; ">
                            <div class="box-body">
                            <b>NIC</b>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-bookmark-o"></i></span>
                                <input id="nic" type="text" class="form-control" placeholder="NIC" disabled>
                            </div>
                            <br>

                            <b>First Name</b>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-bookmark-o"></i></span>
                                <input id="first_name" type="text" class="form-control" placeholder="First Name" disabled>
                            </div>
                            <br>

                            <b>Last Name</b>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-bookmark-o"></i></span>
                                <input id="last_name" type="text" class="form-control" placeholder="Last Name" disabled>
                            </div>
                            <br>
                            </div>
                        </div>
                        <div class="chart tab-pane" id="social" style="position: relative; height: 250px;">
                            <div class="box-body"><br>
                                <button id="add_public" type="button" class="btn btn-block btn-info btn-flat ">Add Public</button>

                            </div>
                        </div>

                    </div>
                </div>

            </div>

            {{--<div class="col-md-5">--}}
                {{--<div class="box box-warning" id="pri">--}}
                    {{--<div class="box-header with-border">--}}
                        {{--<h3 class="box-title">Public Details</h3>--}}
                    {{--</div>--}}

                    {{--<div class="box-body">--}}

                        {{--<b>NIC</b>--}}
                        {{--<div class="input-group">--}}
                            {{--<span class="input-group-addon"><i class="fa fa-bookmark-o"></i></span>--}}
                            {{--<input id="nic" type="text" class="form-control" placeholder="NIC" disabled>--}}
                        {{--</div>--}}
                        {{--<br>--}}

                        {{--<b>First Name</b>--}}
                        {{--<div class="input-group">--}}
                            {{--<span class="input-group-addon"><i class="fa fa-bookmark-o"></i></span>--}}
                            {{--<input id="first_name" type="text" class="form-control" placeholder="First Name" disabled>--}}
                        {{--</div>--}}
                        {{--<br>--}}

                        {{--<b>Last Name</b>--}}
                        {{--<div class="input-group">--}}
                            {{--<span class="input-group-addon"><i class="fa fa-bookmark-o"></i></span>--}}
                            {{--<input id="last_name" type="text" class="form-control" placeholder="Last Name" disabled>--}}
                        {{--</div>--}}
                        {{--<br>--}}

                        {{--<b>Address</b>--}}
                        {{--<div class="input-group">--}}
                            {{--<span class="input-group-addon"><i class="fa fa-bookmark-o"></i></span>--}}
                            {{--<input id="address" type="text" class="form-control" placeholder="Address">--}}
                        {{--</div>--}}
                        {{--<br>--}}

                        {{--<b>Date of Birth</b>--}}
                        {{--<div class="input-group">--}}
                            {{--<span class="input-group-addon"><i class="fa fa-bookmark-o"></i></span>--}}
                            {{--<input id="dob" type="text" class="form-control" placeholder="DOB">--}}
                        {{--</div>--}}
                        {{--<br>--}}

                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>


        <div class="row">
            <div class="col-md-12">

        <div class="box box-danger" id="pri">
            <div class="box-header with-border">
                <h3 class="box-title">Today Issued Tokens</h3>
            </div>

            <div class="box-body">
                <table class="table table-striped hover" id="table1">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>PID</th>
                        <th>First Name</th>
                        <th>Branch</th>
                        <th>Service</th>
                        <th>Issued At</th>
                        <th>Status</th>
                        <th>Visit</th>
                        <th>Next Visit</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
            </div>
        </div>


    <div id="token" class="row" hidden>
        <div>
                <div style="float: left;border-right: dashed 1.5px #3a3427;padding-right: 8px;margin-right: 5px">
                <span>--------------------------------------------------</span>   <br>
                Branch  : <b><span class="branch_name_token"></span></b>  <br>
                Service : <b><span class="service_name_token"></span> </b> <br>
                Officer : <b><span class="officer"></span></b><br>
                Visit : <b><span class="visit_token">1st Visit</span></b><br>
                Date & Time :<span class="dateandtime"></span>
            </div>

            <div style=" text-align: left; padding-left:5px">
                -<br>
                Branch : <b><span class="branch_name_token"></span></b> <br>
                Service : <b><span class="service_name_token"></span> </b> <br>
                Officer : <b><span class="officer"></span></b><br>
                Visit : <b><span class="visit_token">1st Visit</span></b> <br>
                Date & Time : <span class="dateandtime"></span>

            </div>

        </div>

       <table>

           <tr>

                    <td style="border-right: 1.5px dashed #333;padding-right: 5px">
                        --------------------------------------------------<br>
                        <table style="border: solid; margin-left: 10px; border-width:2px ; padding: 10px;">
                            <tr>
                                <td>Serial No &nbsp;</td>
                                <td>: <span class="serial_no"></span> </td>
                            </tr>

                            <tr>
                                <td>NIC &nbsp;</td>
                                <td> : <span class="nic_token"></span>V</td>
                            </tr>

                            <tr>
                                <td>First Name &nbsp;</td>
                                <td style="word-wrap: break-word"> : <span class="first_name_token"></span> </td>
                            </tr>

                            <tr>
                                <td>Last Name&nbsp;</td>
                                <td> : <span class="last_name_token"></span> </td>
                            </tr>

                        </table>
                        --------------------------------------------------<br>
                        <input type="checkbox"> Completed&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox"> Canceled<br>
                        Next Visit Date : ..............................<br>

                    </td>


                    <td style="padding-left: 5px">
                        =================================================<br>
                        <table>
                            <tr>
                                <td>
                                    <input type="checkbox"> Completed<br>
                                </td>

                                <td>
                                    <b>Serial No : <span class="serial_no"></span></b>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <input type="checkbox"> On Processing<br>
                                </td>

                                <td>Next Visit Date : ..............................</td>
                            </tr>

                            <tr>
                                <td>
                                    <input type="checkbox"> Canceled<br>
                                </td>
                            </tr>

                            <tr>
                                <td>----------------- Office Use  </td>
                                <td> ----------------- </td>
                            </tr>


                            <tr>
                                <td style="text-align: right">Received Date & Time :&nbsp;  </td>
                                <td>  .......................................</td>
                            </tr>

                            <tr>
                                <td style="text-align: right">Signature & Stamp :&nbsp;</td>
                                <td>.......................................</td>
                            </tr>
                        </table>
                        =================================================<br>
                    </td>
                </tr>
            </table>
    </div>

        <!-- /.TO BE MODIFIY -->
        <div id="token-ads" class="row" hidden >
            <div style="width: 100%;">
                <div style="float: left;">
                    Branch  : <b><span class="branch_name_token"></span></b>  <br>
                    Service : <b><span class="service_name_token"></span> </b> <br>
                    Officer : <b><span class="officer"></span></b><br>
                    Visit : <b><span class="visit_token">1st Visit</span></b><br>
                    Date & Time :
                    <span class="dateandtime"></span>
                </div>

                <div style=" text-align: left;margin-left: 40%">
                    First Visit Date : <span class="first_visit_date"></span><br>
                    Next Visit Date(2nd) : <span class="next_visit_date_2nd"></span> <br>
                    Reason for Next Visit(2nd) : <span class="reason_for_next_visit_2nd"></span> <br>
                    Visited Date(2nd) : <span class="visited_date_2nd"></span><br>
                    Next Visit Date(3rd) : <span class="next_visit_date_3rd"></span> <br>
                    Reason for Next Visit(3rd) : <span class="reason_for_next_visit_3rd"></span> <br>
                    Visited Date(3rd) : <span class="dateandtime"></span>

                </div>

            </div>

            <table>

                <tr>

                    <td>
                        ---------------------------------------------------<br>
                        <table style="border: solid; margin-left: 10px; border-width:2px ; padding: 10px;">
                            <tr>
                                <td>Serial No &nbsp;</td>
                                <td>: <span class="serial_no"></span> </td>
                            </tr>

                            <tr>
                                <td>NIC &nbsp;</td>
                                <td> : <span class="nic_token"></span>V</td>
                            </tr>

                            <tr>
                                <td>First Name &nbsp;</td>
                                <td style="word-wrap: break-word"> : <span class="first_name_token"></span> </td>
                            </tr>

                            <tr>
                                <td>Last Name&nbsp;</td>
                                <td> : <span class="last_name_token"></span> </td>
                            </tr>

                        </table>
                        --------------------------------------------------<br>

                    </td>


                    <td>
                        =================================================<br>
                        <table>
                            <tr>
                                <td style="text-align: right">
                                    First Officer :
                                </td>

                                <td>
                                    <b><span id="first_officer_ads"></span></b>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align: right">
                                    Second Officer :
                                </td>

                                <td>
                                    <b><span id="second_officer_ads"></span></b>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                </td>
                            </tr>

                            <tr>
                                <td>------------------------  Office Use  </td>
                                <td>  ------------------------</td>
                            </tr>


                            <tr>
                                <td style="text-align: right">Received Date & Time :&nbsp;  </td>
                                <td>  .......................................</td>
                            </tr>

                            <tr>
                                <td style="text-align: right">Signature & Stamp :&nbsp;</td>
                                <td>.......................................</td>
                            </tr>
                        </table>
                        =================================================<br>
                    </td>
                </tr>
            </table>
        </div>

    </section>
</div>



<!-- Modal -->
<div class="modal modalq fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-dialogq">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Reprint Token</h4>
            </div>
            <div class="modal-body">
                <meta name="csrf-token" content="{{ csrf_token() }}">

                        <div class="row">
                            <div class="col-sm-2"></div>

                            <div class="col-sm-2">
                                <button type="button" id="visit_one" class="btn btn-block btn-success btn-flat">1st Visit</button>
                            </div>

                            <div class="col-sm-1"></div>

                            <div class="col-sm-2">
                                <button type="button" id="visit_two" class="btn btn-block btn-success btn-flat">2nd Visit</button>
                            </div>

                            <div class="col-sm-1"></div>


                            <div class="col-sm-2">
                                <button type="button" id="visit_three" class="btn btn-block btn-success btn-flat">3rd Visit</button>
                            </div>
                            <div class="col-sm-2"></div>

                        </div>



                <input type="hidden" id="id_reprint">
                <input type="hidden" id="visit_reprint">
                <input type="hidden" id="first_officer_reprint">
                <input type="hidden" id="second_officer_reprint">
                <input type="hidden" id="third_officer_reprint">


            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>





<!-- Modal -->
<div class="modal modalq fade" id="add-public" role="dialog" >
    <div class="modal-dialog modal-dialogq">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add Public Details</h4>
            </div>
            <div class="modal-body">

                <div class="row">
                    <div class="col-md-12">
                        <div class="box box-danger">

                            <div class="box-body">
                                <meta name="csrf-token" content="{{ csrf_token() }}">

                                <div class="box-body">
                                    <input id="nic_status_model" value="nic" hidden>
                                    <b>NIC No / Serial No</b>
                                    <div class="input-group input-group">
                                        <div class="input-group-btn">
                                            <button id="action_btn_model" type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">With NIC
                                                <span class="fa fa-caret-down"></span></button>
                                            <ul class="dropdown-menu">
                                                <li><a href="#" onclick="action_key('nic')">With NIC </a></li>
                                                <li><a href="#" onclick="action_key('nonic')">Without NIC</a></li>
                                            </ul>
                                        </div>
                                        <!-- /btn-group -->
                                        <div class="input-group">
                                            <input id="nic_model" type="text" class="form-control" data-inputmask='"mask": "[999999999999]"' data-mask   placeholder="NIC">
                                            <span id="vo_model" class="input-group-addon">V</span>
                                        </div>
                                    </div>
                                    <br>


                                    <b>GN Division</b>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-bookmark-o"></i></span>
                                        <select class="form-control select2" id="gs_division_model" style="width: 100%;">
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
                                        <input id="first_name_model" type="text" class="form-control" placeholder="First Name">
                                    </div>
                                    <br>

                                    <b>Last Name</b>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-bookmark-o"></i></span>
                                        <input id="last_name_model" type="text" class="form-control" placeholder="Last Name">
                                    </div>
                                    <br>

                                    <b>Address</b>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-bookmark-o"></i></span>
                                        <input id="address_model" type="text" class="form-control" placeholder="Address">
                                    </div>
                                    <br>

                                    <b>Telephone Number</b>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-bookmark-o"></i></span>
                                        <input id="tp_number_model" type="text" class="form-control" data-inputmask='"mask": "(999)-9999999"' data-mask placeholder="Telephone Number">
                                    </div>
                                    <br>

                                    <b>Date of Birth</b>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-bookmark-o"></i></span>
                                        <input id="dob_model" type="date" class="form-control" placeholder="DOB">
                                    </div>
                                    <br>


                                </div>
                            </div>
                        </div>


                    </div>
                </div>


            </div>
            <div class="modal-footer">
                <button id="add_public_model"  class="btn btn-success btn-flat">Add Public</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>






<!-- /.content-wrapper -->
@section('script')
    <script>

        $( '#visit_one' ).click(function() {
            $('.officer').text($('#first_officer_reprint').val());
            swal({
                    title: "Are you sure to print first visit token again?",
                    text: "Token will be print again as first visit",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonClass: "btn-success",
                    confirmButtonText: "Yes, Print!",
                    cancelButtonText: "No, cancel!",
                    closeOnConfirm: false,
                    closeOnCancel: false
                },
                function (isConfirm) {
                    if (isConfirm) {
                        $('.dateandtime').text('<?php
                            echo date("Y/m/d");
                            echo " , ";
                            ?>');
                        timeNow();

                        printElem('token');

                        swal({
                            title: "Printed!",
                            text: "First visit token printed again.",
                            type: "success",
                            timer: 3000
                        });

                        $('#myModal').modal('hide');

                    }
                    else {
                        swal("Cancelled", "Nothing happed to token :)", "error");
                    }
                })

        });



        $( '#visit_two' ).click(function() {

            $('.officer').text($('#second_officer_reprint').val());
            $('.visit_token').html('2nd Visit')

            if($('#visit_reprint').val() == "2nd Visit"){
                swal({
                        title: "Are you sure to print second visit token again?",
                        text: "Token will be print again as second visit",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonClass: "btn-success",
                        confirmButtonText: "Yes, Print!",
                        cancelButtonText: "No, cancel!",
                        closeOnConfirm: false,
                        closeOnCancel: false
                    },
                    function (isConfirm) {
                        if (isConfirm) {
                            $('.dateandtime').text('<?php
                                echo date("Y/m/d");
                                echo " , ";
                                ?>');
                            timeNow();

                                    var table = $("#table1").DataTable();
                                    table.ajax.reload();
                                    window.onkeydown = window.onfocus = null; // This line is the solution

                                    swal({
                                        title: "Printed!",
                                        text: "Second visit token printed again.",
                                        type: "success",
                                        timer: 3000
                                    });

                                    $('#myModal').modal('hide');

                                    printElem('token');

                        }
                        else {
                            swal("Cancelled", "Nothing happed to token :)", "error");
                        }
                    })
            }
            else if($('#visit_reprint').val() == "1st Visit"){

                swal({
                        title: "Are you sure to print second visit token?",
                        text: "Token will issue as second visit",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonClass: "btn-success",
                        confirmButtonText: "Yes, Print!",
                        cancelButtonText: "No, cancel!",
                        closeOnConfirm: false,
                        closeOnCancel: false
                    },
                    function (isConfirm) {
                        if (isConfirm) {
                            $('.dateandtime').text('<?php
                                echo date("Y/m/d");
                                echo " , ";
                                ?>');
                            timeNow();

                            jQuery.ajax({
                                url: "{{ url('/issue_token_visit_update') }}",
                                method: 'post',
                                data: {
                                    id: $('#id_reprint').val(),
                                    status: '2nd Visit',
                                    status_no: '2',
                                    visit_date: 'visit_date_2nd',
                                },
                                success: function (data) {
                                    console.log(data);
                                    var table = $("#table1").DataTable();
                                    table.ajax.reload();
                                    window.onkeydown = window.onfocus = null; // This line is the solution

                                    swal({
                                        title: "Printed!",
                                        text: "Second visit token printed.",
                                        type: "success",
                                        timer: 3000
                                    });

                                    $('#myModal').modal('hide');

                                    printElem('token');

                                }
                            });
                        }
                        else {
                            swal("Cancelled", "Nothing happed to token :)", "error");
                        }
                    })
            }




        });


        $( '#visit_three' ).click(function() {
            $('.officer').text($('#third_officer_reprint').val());
            $('.visit_token').html('3rd Visit');


            if($('#visit_reprint').val() == "2nd Visit"){
                swal({
                        title: "Are you sure to print third visit token ?",
                        text: "Token will print as third visit token",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonClass: "btn-success",
                        confirmButtonText: "Yes, Print!",
                        cancelButtonText: "No, cancel!",
                        closeOnConfirm: false,
                        closeOnCancel: false
                    },
                    function (isConfirm) {
                        if (isConfirm) {
                            $('.dateandtime').text('<?php
                                echo date("Y/m/d");
                                echo " , ";
                                ?>');
                            timeNow();
                            jQuery.ajax({
                                url: "{{ url('/issue_token_visit_update') }}",
                                method: 'post',
                                data: {
                                    id: $('#id_reprint').val(),
                                    status: '3rd Visit',
                                    status_no: '3',
                                    visit_date: 'visit_date_3rd',

                                },
                                success: function (data) {
                                    console.log(data);
                                    var table = $("#table1").DataTable();
                                    table.ajax.reload();
                                    window.onkeydown = window.onfocus = null; // This line is the solution


                                    $('#myModal').modal('hide');

                                    printElem('token-ads');

/////// Completed ask to third visit
                                    swal({
                                            title: "Are you going to mark token as completed?",
                                            text: "Token will be mark as completd or you can mark later in Queue section",
                                            type: "warning",
                                            showCancelButton: true,
                                            confirmButtonClass: "btn-success",
                                            confirmButtonText: "Yes, Completed!",
                                            cancelButtonText: "No, cancel!",
                                            closeOnConfirm: false,
                                            closeOnCancel: false
                                        },
                                        function (isConfirm) {
                                            if (isConfirm) {
                                                completed($('#id_reprint').val());
                                                swal({
                                                    title: "Marked As Completed!",
                                                    text: "Token completed. Thank You!!!.",
                                                    type: "success",
                                                    timer: 3000
                                                });
                                            }
                                            else{
                                                swal("Cancelled", "Nothing happed to token :)", "error");

                                            }
                                        })



                                }
                            });
                        }
                        else {
                            swal("Cancelled", "Nothing happed to token :)", "error");
                        }
                    })
            }
            else if($('#visit_reprint').val() == "3rd Visit"){
                swal({
                        title: "Are you sure to print third visit token again?",
                        text: "Token will be print again as second visit",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonClass: "btn-success",
                        confirmButtonText: "Yes, Print!",
                        cancelButtonText: "No, cancel!",
                        closeOnConfirm: false,
                        closeOnCancel: false
                    },
                    function (isConfirm) {
                        if (isConfirm) {
                            $('.dateandtime').text('<?php
                                echo date("Y/m/d");
                                echo " , ";
                                ?>');
                            timeNow();

                                    var table = $("#table1").DataTable();
                                    table.ajax.reload();
                                    window.onkeydown = window.onfocus = null; // This line is the solution


                                    $('#myModal').modal('hide');

                                    printElem('token-ads');

/////// Completed ask to third visit
                                    swal({
                                            title: "Are you going to mark token as completed?",
                                            text: "Token will be mark as completd or you can mark later in Queue section",
                                            type: "warning",
                                            showCancelButton: true,
                                            confirmButtonClass: "btn-success",
                                            confirmButtonText: "Yes, Completed!",
                                            cancelButtonText: "No, cancel!",
                                            closeOnConfirm: false,
                                            closeOnCancel: false
                                        },
                                        function (isConfirm) {
                                            if (isConfirm) {
                                                completed($('#id_reprint').val());
                                                swal({
                                                    title: "Marked As Completed!",
                                                    text: "Token completed. Thank You!!!.",
                                                    type: "success",
                                                    timer: 3000
                                                });
                                            }
                                            else{
                                                swal("Cancelled", "Nothing happed to token :)", "error");
                                            }
                                        })





                        }
                        else {
                            swal("Cancelled", "Nothing happed to token :)", "error");
                        }
                    })
            }



        });


////////////////////////////////////////////////////////////////////////////////////////////

        function rePrint(id,s_id) {
            $('#myModal').modal('toggle');

            $('.serial_no').text(id);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            jQuery.ajax({
                url: "{{ url('/issue_token_visit') }}",
                method: 'post',
                data: {
                    id: id,
                    s_id:s_id
                },
                success: function (data) {
                    console.log(data);

                    $('.branch_name_token').text(data.queue[0].branch_name);
                    $('.service_name_token').text(data.queue[0].service_name)


                    $('#id_reprint').val(id);
                    $('#visit_reprint').val(data.queue[0].visit);
                    $('#first_officer_reprint').val(data.visit[0].first_officer);
                    $('#second_officer_reprint').val(data.visit[0].second_officer);
                    $('#third_officer_reprint').val(data.visit[0].third_officer)

                    $('#first_officer_ads').text($('#first_officer_reprint').val())
                    $('#second_officer_ads').text($('#second_officer_reprint').val())


                    $('.first_visit_date').text(data.queue[0].visit_date_1st);
                    $('.next_visit_date_2nd').text(data.queue[0].next_visit_date_2nd);
                    $('.reason_for_next_visit_2nd').text(data.queue[0].reason_2nd);
                    $('.visited_date_2nd').text(data.queue[0].visit_date_2nd);
                    $('.next_visit_date_3rd').text(data.queue[0].next_visit_date_3rd);
                    $('.reason_for_next_visit_3rd').text(data.queue[0].reason_3rd);
                    $('.visited_date_3rd').text(data.queue[0].visit_date_3rd);


                    if(data.queue[0].visit == "1st Visit"){
                        $('#visit_three').prop("disabled",true);
                        $('#visit_one').prop("disabled",false);
                        $('#visit_two').prop("disabled",false);
                    }
                    else if(data.queue[0].visit == "2nd Visit"){
                        $('#visit_one').prop("disabled",true);
                        $('#visit_two').prop("disabled",false);
                        $('#visit_three').prop("disabled",false);
                    }
                    else if(data.queue[0].visit == "3rd Visit"){
                        $('#visit_one').prop("disabled",true);
                        $('#visit_two').prop("disabled",true);
                        $('#visit_three').prop("disabled",false);
                    }

                }});
        }

///////////////////////////////////////////////////////////////////////////////////////////////////////






        function timeNow() {
            var d = new Date(),
                h = (d.getHours()<10?'0':'') + d.getHours(),
                m = (d.getMinutes()<10?'0':'') + d.getMinutes();
            $('.dateandtime').append(h + ':' + m);
        }

        function printcon(el) {
            var restorepage = document.body.innerHTML;
            var printcontent = document.getElementById(el).innerHTML;
            document.body.innerHTML = printcontent;
            window.print();
            document.body.innerHTML = restorepage;

        }

        function printElem(divId) {
            var content = document.getElementById(divId).innerHTML;
            var mywindow = window.open('', 'Print', 'height=600,width=800');

            mywindow.document.write('<html><head><title>Divisional Secreareiat Manmunaipattu</title>');
            mywindow.document.write('</head><body ><b><u>Token issued to</u></b> <br>');
            mywindow.document.write(content);
            mywindow.document.write('</body></html>');

            mywindow.document.close();
            mywindow.focus();
            mywindow.print();
            mywindow.close();
            return true;
        }




        jQuery(document).ready(function(){



            $.fn.modal.Constructor.prototype.enforceFocus = function () {};
//            $('.select2').select2();
            $('#gs_division_model').select2();


            $('[data-mask]').inputmask();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')                    }
                });

            jQuery.ajax({
                    url: "{{ url('/issue_token_data') }}",
                    method: 'post',
                    data: {
                    },
                    success: function(people){
                        for(var i=0; i < people.data.length; i++){
                            $('#users').append('<option value="' + people.data[i].nic  + '">' + people.data[i].nic + '</option>');
                        }
                        //$('#users').select2();
                        $('#users').select2({
                            language: {
                                noResults: function() {
                                    return '<div><a href="#" onclick="return add_public1()"><b>Click Here to Add Public</b></a></div>';

                                }
                            },
                            escapeMarkup: function (markup) {
                                return markup;
                            }
                        });
                    }});

            jQuery.ajax({
                url: "{{ url('/issue_token_data_branch') }}",
                method: 'post',
                data: {
                },
                success: function(people){
                    for(var i=0; i < people.data.length; i++){
                        $('#branch').append('<option value =  ' +people.data[i].id + '>' + people.data[i].name + '</option>');
                    }
                    $('#branch').select2();
                }});



            $('#table1').DataTable({

            dom: "<'row'<'col-sm-12'Bftr>>" +
            "<'row'<'col-sm-4'i><'col-sm-8'p>>",
                buttons: [
                ],
                processing: true,
                serverSide: true,
                ajax: '{{ url('/queue_table_issued/') }}',
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'p_id', name: 'p_id' },
                    { data: 'first_name', name: 'first_name' },
                    { data: 'branch_name', name: 'branch_name' },
                    { data: 'service_name', name: 'service_name' },
                    { data: 'visit_date_1st', name: 'visit_date_1st' },
                    { data: 'status', name: 'status',
                        render : function(data, type, row) {
                            if(data == 'Not Processed'){
                                return '<span class="label label-default">'+data+'</span>'
                            }

                            if(data == 'On Processing'){
                                return '<span class="label label-info">'+data+'</span>'
                            }

                        } },
                    {data: 'visit', name: 'visit'},
                    { data: 'next_visit', name: 'next_visit' },
                    { data: 'action', name: 'action' },
                ]
            });


            var table = $("#table1").DataTable();
            table.search("########").draw();
            table.ajax.reload();
            $('#users').focus();

        });
    </script>

    <script>

        $('#service').on('select2:select', function (e) {
            $('.service_name_token').text($('#service option:selected').text());

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            jQuery.ajax({
                url: "{{ url('/issue_token_officer') }}",
                method: 'post',
                data: {
                    id: $('#service').val()
                },
                success: function (people) {
                    $('.officer').text(people.data[0].first_officer);
                }

            });

        });

        $('#users').on('select2:select', function (e) {
            var data = e.params.data;
            console.log(data.id);
            if($('#action_btn').text() == 'By NIC '){


                var table = $("#table1").DataTable();
                table.search(data.id).draw();
                table.ajax.reload();


                if(data.id == 'Enter NIC No'){

                    $('#nic').val('');
                    $('#first_name').val('');
                    $('#last_name').val('');
                    $('#address').val('');
                    $('#dob').val('');

                }
                else {
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    jQuery.ajax({
                        url: "{{ url('/issue_token_data_send') }}",
                        method: 'post',
                        data: {
                            id: data.id
                        },
                        success: function (people) {
                            console.log(people.data_two[0].first_name);

                            $('#nic').val(people.data_two[0].nic);
                            $('#first_name').val(people.data_two[0].first_name);
                            $('#last_name').val(people.data_two[0].last_name);
                            $('#address').val(people.data_two[0].address);
                            $('#dob').val(people.data_two[0].dob);

                            $('.nic_token').text(people.data_two[0].nic);
                            $('.first_name_token').text(people.data_two[0].first_name);
                            $('.last_name_token').text(people.data_two[0].last_name);
                        }

                    });
                }
            }
            else if($('#action_btn').text() == 'By Name '){
                jQuery.ajax({
                    url: "{{ url('/issue_token_data_send') }}",
                    method: 'post',
                    data: {
                        id: data.id
                    },
                    success: function (people) {
                        console.log(people.data_two[0].first_name);

                        $('#nic').val(people.data_two[0].nic);
                        $('#first_name').val(people.data_two[0].first_name);
                        $('#last_name').val(people.data_two[0].last_name);
                        $('#address').val(people.data_two[0].address);
                        $('#dob').val(people.data_two[0].dob);

                        $('.nic_token').text(people.data_two[0].nic);
                        $('.first_name_token').text(people.data_two[0].first_name);
                        $('.last_name_token').text(people.data_two[0].last_name);

                    }

                });
            }

        });



        $('#branch').on('select2:select', function (e) {
            var data = e.params.data;
            console.log(data.id);
            $('.branch_name_token').text($('#branch option:selected').text());

            $('#service').empty();


            $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                jQuery.ajax({
                    url: "{{ url('/issue_token_data_send_branch') }}",
                    method: 'post',
                    data: {
                        id: data.id
                    },
                    success: function (people) {
                        $('#service').append('<option >Select Service</option>');
                        for(var i=0; i < people.data.length; i++){
                                    $('#service').append('<option value =  ' +people.data[i].id + '>' + people.data[i].s_name + '</option>');
                                }
                                $('#service').select2();

                                $('.service_name_token').text($('#service option:selected').text());

                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });

                        jQuery.ajax({
                            url: "{{ url('/issue_token_officer') }}",
                            method: 'post',
                            data: {
                                id: $('#service').val()
                            },
                            success: function (people) {
                                $('.officer').text(people.data[0].first_officer);


                            }

                        });

                    }

                });

        });


        function action_key($key) {
            if($key=='nic'){
                $('#action_btn').html('By NIC <span class="fa fa-caret-down"></span>');
                $('#users').empty();
                $('#users').html('<option>Enter NIC No</option>\n');
                $('#vo').text('V');
                $('#nic').val('');
                $('#first_name').val('');
                $('#last_name').val('');
                $('#address').val('');
                $('#dob').val('');


                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')                    }
                });

                jQuery.ajax({
                    url: "{{ url('/issue_token_data') }}",
                    method: 'post',
                    data: {
                    },
                    success: function(people){
                        for(var i=0; i < people.data.length; i++){
                            $('#users').append('<option>' + people.data[i].nic + ' </option>');
                        }
                        $('#users').select2();
                    }});

            }
            else if($key=='name'){
                $('#action_btn').html('By Name <span class="fa fa-caret-down"></span>');
                $('#users').empty();
                $('#users').html('<option>Enter Name</option>\n');
                $('#vo').text('');
                $('#nic').val('');
                $('#first_name').val('');
                $('#last_name').val('');
                $('#address').val('');
                $('#dob').val('');

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')                    }
                });

                jQuery.ajax({
                    url: "{{ url('/issue_token_data') }}",
                    method: 'post',
                    data: {
                    },
                    success: function(people){
                        for(var i=0; i < people.data.length; i++){
                            $('#users').append('<option value=" ' +people.data[i].nic+ ' ">' + people.data[i].first_name +  ' ' + people.data[i].last_name + ' </option>');
                        }
                        $('#users').select2();
                    }});
            }
        }


        $('#issue_token').click(function(){
        if($('#branch option:selected').text() == 'Select Branch' && $('#service option:selected').text() == 'Select Service' && $('#users option:selected').text() == 'Enter NIC No') {
                swal({
                    title: "Error",
                    text: "Enter NIC No, Select Branch And Service to issue token!",
                    type: "error",
                    timer: 3000
                });
            }
            else if($('#branch option:selected').text() == 'Select Branch' && $('#service option:selected').text() == 'Select Service') {
                swal({
                    title: "Error",
                    text: "Select Branch And Service to issue token!",
                    type: "error",
                    timer: 3000
                });
            }
            else if ($('#branch option:selected').text() == 'Select Branch') {
                swal({
                    title: "Error",
                    text: "Select Branch to issue token!",
                    type: "error",
                    timer: 3000
                });
            }
            else if ($('#service option:selected').text() == 'Select Service') {
                swal({
                    title: "Error",
                    text: "Select Service to issue token!",
                    type: "error",
                    timer: 3000
                });
            }
            else if ($('#users option:selected').text() == 'Enter NIC No') {
                swal({
                    title: "Error",
                    text: "Select Service to issue token!",
                    type: "error",
                    timer: 3000
                });
            }
else {
                swal({
                        title: "Are you sure to issue token?",
                        text: "You will not be able to delete issued token!",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonClass: "btn-success",
                        confirmButtonText: "Yes, Issue!",
                        cancelButtonText: "No, cancel!",
                        closeOnConfirm: false,
                        closeOnCancel: false
                    },
                    function (isConfirm) {
                        if (isConfirm) {


                            $('.dateandtime').text('<?php
                                echo date("Y/m/d");
                                echo " , ";
                                ?>');
                            timeNow();

                            if ($('#action_btn').text() == 'By Name ') {
                                jQuery.ajax({
                                    url: "{{ url('/issue_token') }}",
                                    method: 'post',
                                    data: {
                                        p_id: $('#nic').val(),
                                        first_name: $('#first_name').val(),
                                        b_id: $('#branch').val(),
                                        branch_name: $('#branch option:selected').text(),
                                        s_id: $('#service').val(),
                                        service_name: $('#service option:selected').text(),
                                    },
                                    success: function (result) {
                                        window.onkeydown = window.onfocus = null; // This line is the solution
                                        $('#users').focus();
                                        $('.serial_no').text(result.data);

                                        swal({
                                            title: "Token Issued By Name!",
                                            text: "Token issued successfully!",
                                            type: "success",
                                            timer: 7000
                                        });

                                        $('#users').prop('selectedIndex', 0).change();
                                        $('#branch').prop('selectedIndex', 0).change();
                                        $('#service').prop('selectedIndex', 0).change();

                                        var table = $("#table1").DataTable();
                                        table.search("########").draw();
                                        table.ajax.reload();
                                        printElem('token');

                                        $.ajaxSetup({
                                            headers: {
                                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                            }
                                        });

                                        jQuery.ajax({
                                            url: "{{ url('/update_public_key') }}",
                                            method: 'post',
                                            data: {
                                                people_key_update: people_key_update,
                                            },
                                            success: function (data) {
                                                console.log(data);

                                            }
                                        });


                                    }
                                });


                            }
                            else if ($('#action_btn').text() == 'By NIC ') {
                                jQuery.ajax({
                                    url: "{{ url('/issue_token') }}",
                                    method: 'post',
                                    data: {
                                        p_id: $('#users').val(),
                                        first_name: $('#first_name').val(),
                                        b_id: $('#branch').val(),
                                        branch_name: $('#branch option:selected').text(),
                                        s_id: $('#service').val(),
                                        service_name: $('#service option:selected').text(),
                                    },
                                    success: function (result) {
                                        console.log(result);
                                        $('.serial_no').text(result.data);
                                        window.onkeydown = window.onfocus = null; // This line is the solution
                                        $('#users').focus();
                                        swal({
                                            title: "Token Issued !",
                                            text: "Token issued successfully!",
                                            type: "success",
                                            timer: 7000
                                        });

                                        $('#users').prop('selectedIndex', 0).change();
                                        $('#branch').prop('selectedIndex', 0).change();
                                        $('#service').prop('selectedIndex', 0).change();

                                        var table = $("#table1").DataTable();
                                        table.search("########").draw();
                                        table.ajax.reload();

                                        printElem('token');

                                        $.ajaxSetup({
                                            headers: {
                                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                            }
                                        });

                                        jQuery.ajax({
                                            url: "{{ url('/update_public_key') }}",
                                            method: 'post',
                                            data: {
                                                people_key_update: people_key_update,
                                            },
                                            success: function (data) {
                                                console.log(data);
                                            }
                                        });


                                    }
                                });
                            }

                            var table = $("#table1").DataTable();
                            table.ajax.reload();



                        } else {
                            swal("Cancelled", "Nothing happed to token :)", "error");
                        }

                    });
            }




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


        function completed(el) {
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
                    var table = $("#table1").DataTable();
                    table.ajax.reload();
                    console.log(data);
                }
            });

        }

        function onProcessing() {
            alert('on');
        }

        function cancel(el) {
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
                    var table = $("#table1").DataTable();
                    table.ajax.reload();
                    console.log(data);
                }
            });
        }

function add_public1() {

    $('#nic_model').val($('.select2-search__field').val());
    $("#users").select2("close");
    $('#nic_status_model').val("nic");
    $('#nic_model').removeAttr("disabled");
    $('#action_btn_model').html('With NIC <span class="fa fa-caret-down"></span>');
    $('#vo_model').text('V');
    $('#add-public').modal('toggle');
    $('#nic_model').focus();

}

        $('#add_public').click(function(){

            $('#nic_status_model').val("nic");
            $('#nic_model').removeAttr("disabled");
            $('#nic_model').val('');
            $('#nic_model').focus();

            $('#action_btn_model').html('With NIC <span class="fa fa-caret-down"></span>');
            $('#vo_model').text('V');
            $('#add-public').modal('toggle');

        });

        $('#add_public_model').click(function(){
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
                                nic: $('#nic_model').val(),
                                gs_division: $('#gs_division_model').val(),
                                first_name: $('#first_name_model').val(),
                                last_name: $('#last_name_model').val(),
                                address: $('#address_model').val(),
                                phone: $('#tp_number_model').val(),
                                dob: $('#dob_model').val()
                            },
                            success: function(result){
                                var people_key_update = parseInt($('#nic_model').val()) + 1;

                                $('#gs_division_model').val('');
                                $('#first_name_model').val('');
                                $('#last_name_model').val('');
                                $('#address_model').val('');
                                $('#tp_number_model').val('');
                                $('#dob_model').val('');
                                sta = 'ok';
                                window.onkeydown = window.onfocus = null; // This line is the solution
                                $('#nic_model').focus();
                                $('#gs_division_model').prop('selectedIndex', 0).change();

                                swal({
                                    title: "Public Added !",
                                    text: "Public added to database  successfully!",
                                    type: "success",
                                    timer: 7000
                                });

                                $('#nic_model').focus();
                                $.ajaxSetup({
                                    headers: {
                                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                    }
                                });

                                if($('#nic_status_model').val() == "nonic"){
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

                                jQuery.ajax({
                                    url: "{{ url('/issue_token_data') }}",
                                    method: 'post',
                                    data: {
                                    },
                                    success: function(people){
                                        for(var i=0; i < people.data.length; i++){
                                            $('#users').append('<option value="' + people.data[i].nic  + '">' + people.data[i].nic + '</option>');
                                        }
                                        $('#users').select2();
                                        $('#users').val($('#nic_model').val()).change();

                                        jQuery.ajax({
                                            url: "{{ url('/issue_token_data_send') }}",
                                            method: 'post',
                                            data: {
                                                id: $('#nic_model').val()
                                            },
                                            success: function (people) {
                                                console.log(people.data_two[0].first_name);

                                                $('#nic').val(people.data_two[0].nic);
                                                $('#first_name').val(people.data_two[0].first_name);
                                                $('#last_name').val(people.data_two[0].last_name);
                                                $('#address').val(people.data_two[0].address);
                                                $('#dob').val(people.data_two[0].dob);

                                                $('.nic_token').text(people.data_two[0].nic);
                                                $('.first_name_token').text(people.data_two[0].first_name);
                                                $('.last_name_token').text(people.data_two[0].last_name);
                                                $('#add-public').modal('toggle');

                                            }

                                        });
                                    }});


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


        function action_key($key) {
            if ($key == 'nic') {
                $('#nic_status_model').val("nic");
                $('#nic_model').removeAttr("disabled");
                $('#nic_model').val('');
                $('#nic_model').focus();
                $('#action_btn_model').html('With NIC <span class="fa fa-caret-down"></span>');
                $('#vo_model').text('V');
            }
            else if($key == 'nonic'){
                $('#nic_status_model').val("nonic");
                $('#action_btn_model').html('Without NIC <span class="fa fa-caret-down"></span>');
                $('#nic_model').attr("disabled", "disabled");
                $('#vo_model').text('');
                $('#gs_division_model').focus();


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

                        $('#nic_model').val(people.people_key[0].people_id);
//                        $('#last_name').val(people.data_two[0].last_name);
//                        $('#address').val(people.data_two[0].address);
//                        $('#dob').val(people.data_two[0].dob);

                    }

                });


            }

        }

    </script>


@stop

@include('layout.footer');
