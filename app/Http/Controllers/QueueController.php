<?php

namespace App\Http\Controllers;

use App\Queue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\Datatables\Datatables;
use Carbon\Carbon;

class QueueController extends Controller
{
    function index(){
        return view('queue');

    }

    public function queueTable(){
        $quta = DB::table('queues')->where( function ( $q ) {
            $q->where( function ( $r ) {
                $r->where('status','On Processing');
                $r->orWhere('status','Not Processed');
            });
        });        return Datatables::of($quta)
            ->addColumn('action', function ($quta) {
                return  '<div class="btn-group">
                  <button type="button" onclick= "queueAction('.$quta->id.','.$quta->visit_no.')" class="btn btn-danger btn-flat btn-sm">Action</button>
                  <button type="button" class="btn btn-info btn-flat btn-sm dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="" onclick= "queueCompleted('.$quta->id.'); return false;" >Completed</a></li>
                    <li><a href="" onclick= "queueOnprocessing('.$quta->id.','.$quta->visit_no.'); return false;" >On Processing</a></li>
                    <li><a href="" onclick= "queueCancel('.$quta->id.'); return false;" >Cancel</a></li>

                  </ul>
                </div>';



                    //'<a onclick= update('.$quta->id.') class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
            })
            ->make  (true);
    }

    public function queueTableIssued(){
        $quta = DB::table('queues')->where( function ( $q ) {
            $q->where( function ( $r ) {
           $r->where('status','On Processing');
           $r->orWhere('status','Not Processed');
            });
        });
        return Datatables::of($quta)
            ->addColumn('action', function ($quta) {
                return '<div class="btn-group">
                  <button type="button" class="btn btn-danger btn-flat btn-sm" onclick= "rePrint('.$quta->id.','.$quta->s_id.'); return false;">Reprint</button>
                  <button type="button" class="btn btn-info btn-flat btn-sm dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#" onclick= "completed('.$quta->id.'); return false;">Completed</a></li>
                    <li><a href="#" onclick= "onProcessing('.$quta->id.','.$quta->visit.'); return false;">On Processing</a></li>
                    <li><a href="#" onclick= "cancel('.$quta->id.'); return false;">Cancel</a></li>
                  </ul>
                </div>';

            })
            ->make  (true);
    }

    public function queueStatusUpdate(Request $request){

        $queue_status = Queue::find($request->id);

        $queue_status->status = $request->status;
	if($request->status == "Completed"){
		$queue_status->completed = Carbon::now()->timezone('Asia/Colombo');
	}
	else{
		$queue_status->updated_at = null;
	}

        $queue_status->save();
        return response()->json('Updated!!!');
    }


    public function queueAction(Request $request){

        $queue_status1 = Queue::find($request->id);

        $queue_status1->status = 'On Processing';
        $queue_status1->reason_2nd = $request->reason_2nd;
        $queue_status1->next_visit_date_2nd = $request->next_visit_date_2nd;
        $queue_status1->next_visit = $request->next_visit_date_2nd;
	$queue_status1->updated_at = null;
        $queue_status1->save();
        return response()->json('Updated!!!');
    }

    public function queueAction2(Request $request){

        $queue_status1 = Queue::find($request->id);

        $queue_status1->status = 'On Processing';
        $queue_status1->reason_3rd = $request->reason_3rd;
        $queue_status1->next_visit_date_3rd = $request->next_visit_date_3rd;
        $queue_status1->next_visit = $request->next_visit_date_3rd;
	$queue_status1->updated_at = null;
        $queue_status1->save();
        return response()->json('Updated!!!');
    }
}


