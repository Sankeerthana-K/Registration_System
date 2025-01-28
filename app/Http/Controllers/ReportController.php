<?php

namespace App\Http\Controllers;

use App\Queue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\Datatables\Datatables;

class ReportController extends Controller
{
    public function index(){
        return view('report');
    }

    public function reportAccounts(){
        $quta = DB::table('queues')->where('b_id',5)->get();
        return DataTables::of($quta)->make(true);
    }

    public function reportSocial(){
        $quta = DB::table('queues')->where('b_id',2)->get();
        return DataTables::of($quta)->make(true);
    }

    public function reportRegister(){
        $quta = DB::table('queues')->where('b_id',7)->get();
        return DataTables::of($quta)->make(true);
    }

    public function reportWomenAndChild(){
        $quta = DB::table('queues')->where('b_id',6)->get();
        return DataTables::of($quta)->make(true);
    }

    public function reportAdmin(){
        $quta = DB::table('queues')->where('b_id',1)->get();
        return DataTables::of($quta)->make(true);
    }

    public function reportPlanning(){
        $quta = DB::table('queues')->where('b_id',3)->get();
        return DataTables::of($quta)->make(true);
    }

    public function reportLand(){
        $quta = DB::table('queues')->where('b_id',4)->get();
        return DataTables::of($quta)->make(true);
    }

    public function reportSamoorthi(){
        $quta = DB::table('queues')->where('b_id',8)->get();
        return DataTables::of($quta)->make(true);
    }
}
