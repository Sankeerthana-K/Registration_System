<?php

namespace App\Http\Controllers;

use App\Branch;
use App\Queue;
use App\Service;
use Carbon\Carbon;
use Illuminate\Http\Response;

use App\People;
use Illuminate\Http\Request;

class IssueTokenController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        return view('issue_token');
    }

    public function getData()
    {
        $people=People::all();
        return response()->json(['data'=>$people]);
    }

    public function getDataBranch()
    {
        $people=Branch::all();
        return response()->json(['data'=>$people]);
    }

    public function sendData(Request $request)
    {
        $people=People::where('nic', $request->id)->get();
        return response()->json(['data_two'=>$people]);
    }

    public function sendDataBranch(Request $request)
    {
        $people=Service::where('s_id', $request->id)->get();
        return response()->json(['data'=>$people]);
    }

    public function issueToken(Request $request){
        $qu = new Queue;
        $qu->p_id = $request->p_id;
        $qu->b_id = $request->b_id;
        $qu->s_id = $request->s_id;
        $qu->first_name = $request->first_name;
        $qu->branch_name = $request->branch_name;
        $qu->service_name = $request->service_name;
        $qu->status = 'Not Processed';
        $qu->visit = '1st Visit';
        $qu->visit_no = '1';
        $qu->visit_date_1st= Carbon::now()->timezone('Asia/Colombo');
        $qu->created_at = Carbon::now()->timezone('Asia/Colombo');
	$qu->updated_at= null;
        $qu->save();
        return response()->json(['data'=> $qu->id]);
    }

    public function officerName(Request $request)
    {
        $people=Service::where('id', $request->id)->get();
        return response()->json(['data'=>$people]);
    }

    public function visit(Request $request)
    {
        $queue = Queue::where('id', $request->id)->get();
        $visit = Service::where('id',$request->s_id)->get();
        return response()->json(['queue'=>$queue,'visit'=>$visit]);
    }

    public function visitUpdate(Request $request)
    {
        $queue_status = Queue::find($request->id);
        $queue_status->visit = $request->status;
        $queue_status->visit_no = $request->status_no;
        $queue_status->updated_at= null;

        if($request->visit_date == "visit_date_2nd"){
            $queue_status->visit_date_2nd= Carbon::now()->timezone('Asia/Colombo');
        }
        elseif ($request->visit_date == "visit_date_3rd"){
            $queue_status->visit_date_3rd= Carbon::now()->timezone('Asia/Colombo');

        }

        $queue_status->save();
        return response()->json('Updated!!!');
    }

}

