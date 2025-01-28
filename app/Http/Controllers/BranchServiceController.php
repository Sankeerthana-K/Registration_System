<?php

namespace App\Http\Controllers;

use App\Branch;
use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\Datatables\Datatables;

class BranchServiceController extends Controller
{
    public function index()
    {
        return view('branch.add_branch_service');
    }

    public function index1()
    {
        return view('branch.update_branch_service');
    }

    public function index2()
    {
        return view('branch.view_branch_service');
    }

    public function addBranchTable(){

        $quta = Branch::select();
        return Datatables::of($quta)
            ->make  (true);
    }

    public function addServiceTable(){

        $quta = Service::join('branches','services.s_id','=','branches.id')
            ->select(['services.id','branches.name','branches.head','services.s_name','services.first_officer','services.second_officer','services.third_officer']);
        return Datatables::of($quta)
            ->addColumn('action', function ($quta) {
                return '<a onclick= update('.$quta->id.') class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
            })
            ->make(true);
    }

    public function addBranch(Request $request){
        $branch = new Branch;

        $branch->name = $request->name;
        $branch->head = $request->head;
        $branch->save();
        return response()->json('Data Saved Successfully !!');

    }


    public function addService(Request $request){
        $branch = new Service;

        $branch->s_id = $request->s_id;
        $branch->s_name = $request->s_name;
        $branch->first_officer = $request->first_officer;
        $branch->second_officer = $request->second_officer;
        $branch->third_officer = $request->third_officer;
        $branch->save();
        return response()->json('Data Saved Successfully !!');

    }

    public function selectBranch(){
        $people=Branch::all();
        return response()->json(['data'=>$people]);
    }

    public function updateServiceData(Request $request){
        $service = Service::where('id',$request->id)->get();
        return response()->json(['data'=>$service]);
    }

    public function updateService(Request $request){
        DB::table('services')->where('id',$request->id)->update(['s_name'=>$request->service_name,'first_officer'=>$request->first_officer,'second_officer'=>$request->second_officer,
            'third_officer'=>$request->third_officer]);
        return response()->json('Updated!!!');

    }

}
