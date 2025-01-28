<?php

namespace App\Http\Controllers;

use App\Queue;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Charts\NewChart;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {

        if((Auth::user()->role) == "Admin")
        {
            return view('dashboard');
        }
        elseif((Auth::user()->role) == "Receptionist"){
            return view('issue_token');

        }
        else {
            return view('queue');
        }
    }


    public function weekChart(){
        if(Carbon::now()->isMonday()){
            $mon_completed = DB::table('queues')->whereDate('created_at',Carbon::today())->where('status','Completed')->count();
            $mon_onprocessing =DB::table('queues')->whereDate('created_at',Carbon::today())->where('status','On Processing')->count();
            $mon_canceled = DB::table('queues')->whereDate('created_at',Carbon::today())->where('status','Canceled')->count();
            $mon_notprocessed = DB::table('queues')->whereDate('created_at',Carbon::today())->where('status','Not Processed')->count();

            $tue_completed = 0;
            $wed_completed = 0;
            $thu_completed = 0;
            $fri_completed = 0;

            $tue_onprocessing = 0;
            $wed_onprocessing = 0;
            $thu_onprocessing = 0;
            $fri_onprocessing = 0;

            $tue_canceled = 0;
            $wed_canceled = 0;
            $thu_canceled = 0;
            $fri_canceled = 0;

            $tue_notprocessed = 0;
            $wed_notprocessed = 0;
            $thu_notprocessed = 0;
            $fri_notprocessed = 0;
        }

        if(Carbon::now()->isTuesday()){
            $mon_completed = DB::table('queues')->whereDate('created_at',Carbon::today()->subDay(1))->where('status','Completed')->count();
            $tue_completed = DB::table('queues')->whereDate('created_at',Carbon::today())->where('status','Completed')->count();

            $mon_onprocessing =DB::table('queues')->whereDate('created_at',Carbon::today()->subDay(1))->where('status','On Processing')->count();
            $tue_onprocessing =DB::table('queues')->whereDate('created_at',Carbon::today())->where('status','On Processing')->count();

            $mon_canceled = DB::table('queues')->whereDate('created_at',Carbon::today()->subDay(1))->where('status','Canceled')->count();
            $tue_canceled = DB::table('queues')->whereDate('created_at',Carbon::today())->where('status','Canceled')->count();

            $mon_notprocessed = DB::table('queues')->whereDate('created_at',Carbon::today()->subDay(1))->where('status','Not Processed')->count();
            $tue_notprocessed = DB::table('queues')->whereDate('created_at',Carbon::today())->where('status','Not Processed')->count();

            $wed_completed = 0;
            $thu_completed = 0;
            $fri_completed = 0;

            $wed_onprocessing = 0;
            $thu_onprocessing = 0;
            $fri_onprocessing = 0;

            $wed_canceled = 0;
            $thu_canceled = 0;
            $fri_canceled = 0;

            $wed_notprocessed = 0;
            $thu_notprocessed = 0;
            $fri_notprocessed = 0;
        }

        if(Carbon::now()->isWednesday()){
            $mon_completed = DB::table('queues')->whereDate('created_at',Carbon::today()->subDay(2))->where('status','Completed')->count();
            $tue_completed = DB::table('queues')->whereDate('created_at',Carbon::today()->subDay(1))->where('status','Completed')->count();
            $wed_completed = DB::table('queues')->whereDate('created_at',Carbon::today())->where('status','Completed')->count();

            $mon_onprocessing =DB::table('queues')->whereDate('created_at',Carbon::today()->subDay(2))->where('status','On Processing')->count();
            $tue_onprocessing =DB::table('queues')->whereDate('created_at',Carbon::today()->subDay(1))->where('status','On Processing')->count();
            $wed_onprocessing =DB::table('queues')->whereDate('created_at',Carbon::today())->where('status','On Processing')->count();

            $mon_canceled = DB::table('queues')->whereDate('created_at',Carbon::today()->subDay(2))->where('status','Canceled')->count();
            $tue_canceled = DB::table('queues')->whereDate('created_at',Carbon::today()->subDay(1))->where('status','Canceled')->count();
            $wed_canceled = DB::table('queues')->whereDate('created_at',Carbon::today())->where('status','Canceled')->count();

            $mon_notprocessed = DB::table('queues')->whereDate('created_at',Carbon::today()->subDay(2))->where('status','Not Processed')->count();
            $tue_notprocessed = DB::table('queues')->whereDate('created_at',Carbon::today()->subDay(1))->where('status','Not Processed')->count();
            $wed_notprocessed = DB::table('queues')->whereDate('created_at',Carbon::today())->where('status','Not Processed')->count();

            $thu_completed = 0;
            $fri_completed = 0;

            $thu_onprocessing = 0;
            $fri_onprocessing = 0;

            $thu_canceled = 0;
            $fri_canceled = 0;

            $thu_notprocessed = 0;
            $fri_notprocessed = 0;
        }

        if(Carbon::now()->isThursday()){
            $mon_completed = DB::table('queues')->whereDate('created_at',Carbon::today()->subDay(3))->where('status','Completed')->count();
            $tue_completed = DB::table('queues')->whereDate('created_at',Carbon::today()->subDay(2))->where('status','Completed')->count();
            $wed_completed = DB::table('queues')->whereDate('created_at',Carbon::today()->subDay(1))->where('status','Completed')->count();
            $thu_completed = DB::table('queues')->whereDate('created_at',Carbon::today())->where('status','Completed')->count();

            $mon_onprocessing =DB::table('queues')->whereDate('created_at',Carbon::today()->subDay(3))->where('status','On Processing')->count();
            $tue_onprocessing =DB::table('queues')->whereDate('created_at',Carbon::today()->subDay(2))->where('status','On Processing')->count();
            $wed_onprocessing =DB::table('queues')->whereDate('created_at',Carbon::today()->subDay(1))->where('status','On Processing')->count();
            $thu_onprocessing =DB::table('queues')->whereDate('created_at',Carbon::today())->where('status','On Processing')->count();

            $mon_canceled = DB::table('queues')->whereDate('created_at',Carbon::today()->subDay(3))->where('status','Canceled')->count();
            $tue_canceled = DB::table('queues')->whereDate('created_at',Carbon::today()->subDay(2))->where('status','Canceled')->count();
            $wed_canceled = DB::table('queues')->whereDate('created_at',Carbon::today()->subDay(1))->where('status','Canceled')->count();
            $thu_canceled = DB::table('queues')->whereDate('created_at',Carbon::today())->where('status','Canceled')->count();

            $mon_notprocessed = DB::table('queues')->whereDate('created_at',Carbon::today()->subDay(3))->where('status','Not Processed')->count();
            $tue_notprocessed = DB::table('queues')->whereDate('created_at',Carbon::today()->subDay(2))->where('status','Not Processed')->count();
            $wed_notprocessed = DB::table('queues')->whereDate('created_at',Carbon::today()->subDay(1))->where('status','Not Processed')->count();
            $thu_notprocessed = DB::table('queues')->whereDate('created_at',Carbon::today())->where('status','Not Processed')->count();

            $fri_completed = 0;

            $fri_onprocessing = 0;

            $fri_canceled = 0;

            $fri_notprocessed = 0;
        }

        if(Carbon::now()->isFriday()){
            $mon_completed = DB::table('queues')->whereDate('created_at',Carbon::today()->subDay(4))->where('status','Completed')->count();
            $tue_completed = DB::table('queues')->whereDate('created_at',Carbon::today()->subDay(3))->where('status','Completed')->count();
            $wed_completed = DB::table('queues')->whereDate('created_at',Carbon::today()->subDay(2))->where('status','Completed')->count();
            $thu_completed = DB::table('queues')->whereDate('created_at',Carbon::today()->subDay(1))->where('status','Completed')->count();
            $fri_completed = DB::table('queues')->whereDate('created_at',Carbon::today())->where('status','Completed')->count();

            $mon_onprocessing =DB::table('queues')->whereDate('created_at',Carbon::today()->subDay(4))->where('status','On Processing')->count();
            $tue_onprocessing =DB::table('queues')->whereDate('created_at',Carbon::today()->subDay(3))->where('status','On Processing')->count();
            $wed_onprocessing =DB::table('queues')->whereDate('created_at',Carbon::today()->subDay(2))->where('status','On Processing')->count();
            $thu_onprocessing =DB::table('queues')->whereDate('created_at',Carbon::today()->subDay(1))->where('status','On Processing')->count();
            $fri_onprocessing =DB::table('queues')->whereDate('created_at',Carbon::today())->where('status','On Processing')->count();

            $mon_canceled = DB::table('queues')->whereDate('created_at',Carbon::today()->subDay(4))->where('status','Canceled')->count();
            $tue_canceled = DB::table('queues')->whereDate('created_at',Carbon::today()->subDay(3))->where('status','Canceled')->count();
            $wed_canceled = DB::table('queues')->whereDate('created_at',Carbon::today()->subDay(2))->where('status','Canceled')->count();
            $thu_canceled = DB::table('queues')->whereDate('created_at',Carbon::today()->subDay(1))->where('status','Canceled')->count();
            $fri_canceled = DB::table('queues')->whereDate('created_at',Carbon::today())->where('status','Canceled')->count();

            $mon_notprocessed = DB::table('queues')->whereDate('created_at',Carbon::today()->subDay(4))->where('status','Not Processed')->count();
            $tue_notprocessed = DB::table('queues')->whereDate('created_at',Carbon::today()->subDay(3))->where('status','Not Processed')->count();
            $wed_notprocessed = DB::table('queues')->whereDate('created_at',Carbon::today()->subDay(2))->where('status','Not Processed')->count();
            $thu_notprocessed = DB::table('queues')->whereDate('created_at',Carbon::today()->subDay(1))->where('status','Not Processed')->count();
            $fri_notprocessed = DB::table('queues')->whereDate('created_at',Carbon::today())->where('status','Not Processed')->count();
        }




        // Week Chart
        $weekchart = new NewChart();
        $weekchart->labels(['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'])
            ->dataset('Completed', 'bar', [$mon_completed,$tue_completed,$wed_completed,$thu_completed,$fri_completed])->backgroundColor('#00c9a7');
        $weekchart->dataset('On Processing', 'bar', [$mon_onprocessing,$tue_onprocessing,$wed_onprocessing,$thu_onprocessing,$fri_onprocessing])->backgroundColor('#36a2eb');
        $weekchart->dataset('Canceled', 'bar', [$mon_canceled,$tue_canceled,$wed_canceled,$thu_canceled,$fri_canceled])->backgroundColor('#ff6384');
        $weekchart->dataset('Not Processed', 'bar', [$mon_notprocessed,$tue_notprocessed,$wed_notprocessed,$thu_notprocessed,$fri_notprocessed])->backgroundColor('#aa6666');


        // Month Chart
        $month_completed = DB::table('queues')->whereMonth('created_at',Carbon::now()->month)->where('status','Completed')->count();
        $month_onprocessing = DB::table('queues')->whereMonth('created_at',Carbon::now()->month)->where('status','On Processing')->count();
        $month_canceled = DB::table('queues')->whereMonth('created_at',Carbon::now()->month)->where('status','Canceled')->count();
        $month_notprocessed = DB::table('queues')->whereMonth('created_at',Carbon::now()->month)->where('status','Not Processed')->count();
        $monthchart = new NewChart();
        $monthchart->labels(['Completed','On Processing','Canceled','Not Processed'])->displayAxes(false)
            ->dataset('Completed', 'doughnut', [$month_completed,$month_onprocessing,$month_canceled,$month_notprocessed])->backgroundColor(['#00c9a7','#36a2eb','#ff6384','#aa6666']);

        if((Auth::user()->role) == "Admin")
        {
            return view('dashboard',['weekchart' => $weekchart,'monthchart'=>$monthchart]);
        }
        elseif((Auth::user()->role) == "Receptionist"){
            return view('issue_token');

        }
        else {
            return view('queue');
        }
    }

    public function countQueue(){
        $completed = DB::table('queues')->whereDate('created_at',Carbon::today())->where('status','Completed')->count();
        $onprocessing = DB::table('queues')->whereDate('created_at',Carbon::today())->where('status','On Processing')->count();
        $canceled = DB::table('queues')->whereDate('created_at',Carbon::today())->where('status','Canceled')->count();
        $notprocessed = DB::table('queues')->whereDate('created_at',Carbon::today())->where('status','Not Processed')->count();
        $total = DB::table('queues')->whereDate('created_at',Carbon::today())->count();
        return response()->json(['completed'=>$completed,'onprocessing'=>$onprocessing,'canceled'=>$canceled,'notprocessed'=>$notprocessed,'total'=>$total]);
    }

}
