<?php

namespace App\Http\Controllers;

use App\People;
use App\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\Datatables\Datatables;

class PublicController extends Controller
{
    public function addPublicIndex(){
        return view('public.add_public');

    }

    public function updatePublicIndex(){
        return view('public.update_public');

    }

    public function viewPublicIndex(){
        return view('public.view_public_details');

    }

    public function addPublicData(Request $request){
        $people = new People;

        $people->nic = $request->nic;
        $people->gs_division = $request->gs_division;
        $people->first_name = $request->first_name;
        $people->last_name = $request->last_name;
        $people->address = $request->address;
        $people->phone = $request->phone;
        $people->dob = $request->dob;

        $people->save();
        return response()->json('Data Saved Successfully !!');
    }



    public function addPublicKey(Request $request){

        $people_key=Settings::where('id', '1')->get();
        return response()->json(['people_key'=>$people_key]);
    }

    public function updatePublicKey(Request $request){

        $people_key_up = Settings::find(1);

        $people_key_up->people_id = $request->people_key_update;

        $people_key_up->save();
        return response()->json('Updated!!!');
    }

    public function updatePublicTable(){
        $quta = People::select();
        return Datatables::of($quta)
            ->addColumn('action', function ($quta) {
                return '<a onclick= update('.$quta->nic.') class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
            })
            ->make(true);

    }

    public function updateData(Request $request)
    {
        $people=People::where('nic', $request->nic)->get();
        return response()->json(['data'=>$people]);
    }

    public function updatePublic(Request $request){
        DB::table('people')->where('nic',$request->nic)
    ->update(['first_name'=>$request->first_name,'last_name'=>$request->last_name,'address'=>$request->address,'gs_division'=>$request->gs_division,'phone'=>$request->phone,'dob'=> $request->dob]);

//        $public->first_name = $request->first_name;
//        $public->last_name = $request->last_name;
//        $public->address = $request->address;
//        $public->gs_division = $request->gs_division;
//        $public->phone = $request->phone;
//        $public->dob = $request->dob;
//
//        $public->save();
        return response()->json('Updated!!!');
    }
}
