<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Charts\NewChart;
use Illuminate\Support\Facades\Session;

class ChartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        Session::put('tabState1', 'active');

        return view('chart');
    }

//    public function charts(){
//
//        // DB Accounts
//        for ($r=1;$r<=12;$r++){
//             $complete1[$r] = DB::table('queues')->whereYear('created_at',Carbon::now())->whereMonth('created_at','=',$r)->where('b_id','5')->where('status','Completed')->count();
//        }
//
//        for ($r=1;$r<=12;$r++){
//            $cancel[$r] = DB::table('queues')->whereYear('created_at',Carbon::now())->whereMonth('created_at','=',$r)->where('b_id','5')->where('status','Canceled')->count();
//        }
//
//        for ($r=1;$r<=12;$r++){
//            $onprocessing[$r] = DB::table('queues')->whereYear('created_at',Carbon::now())->whereMonth('created_at','=',$r)->where('b_id','5')->where('status','On Processing')->count();
//        }
//
//        for ($r=1;$r<=12;$r++){
//            $notprocessed[$r] = DB::table('queues')->whereYear('created_at',Carbon::now())->whereMonth('created_at','=',$r)->where('b_id','5')->where('status','Not Processed')->count();
//        }
//
//        //Accounts
//        $monthchartaccounts = new NewChart();
//        $monthchartaccounts->labels(['Jan', 'Feb', 'Mar', 'Apr', 'May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'])->dataset('Completed', 'bar', [$complete1[1],$complete1[2],$complete1[3],$complete1[4],$complete1[5],$complete1[6],$complete1[7],$complete1[8],$complete1[9],$complete1[10],$complete1[11],$complete1[12]])->backgroundColor('#00c9a7');
//        $monthchartaccounts->dataset('Inprogress', 'bar', [$onprocessing[1],$onprocessing[2],$onprocessing[3],$onprocessing[4],$onprocessing[5],$onprocessing[6],$onprocessing[7],$onprocessing[8],$onprocessing[9],$onprocessing[10],$onprocessing[11],$onprocessing[12]])->backgroundColor('#36a2eb');
//        $monthchartaccounts->dataset('Canceld', 'bar', [$cancel[1],$cancel[2],$cancel[3],$cancel[4],$cancel[5],$cancel[6],$cancel[7],$cancel[8],$cancel[9],$cancel[10],$cancel[11],$cancel[12]])->backgroundColor('#ff6384');
//        $monthchartaccounts->dataset('Not Processed', 'bar', [$notprocessed[1],$notprocessed[2],$notprocessed[3],$notprocessed[4],$notprocessed[5],$notprocessed[6],$notprocessed[7],$notprocessed[8],$notprocessed[9],$notprocessed[10],$notprocessed[11],$notprocessed[12]])->backgroundColor('#aa6666');
//
//
//        // DB Social
//        for ($r=1;$r<=12;$r++){
//            $complete1[$r] = DB::table('queues')->whereYear('created_at',Carbon::now())->whereMonth('created_at','=',$r)->where('b_id','2')->where('status','Completed')->count();
//        }
//
//        for ($r=1;$r<=12;$r++){
//            $cancel[$r] = DB::table('queues')->whereYear('created_at',Carbon::now())->whereMonth('created_at','=',$r)->where('b_id','2')->where('status','Canceled')->count();
//        }
//
//        for ($r=1;$r<=12;$r++){
//            $onprocessing[$r] = DB::table('queues')->whereYear('created_at',Carbon::now())->whereMonth('created_at','=',$r)->where('b_id','2')->where('status','On Processing')->count();
//        }
//
//        for ($r=1;$r<=12;$r++){
//            $notprocessed[$r] = DB::table('queues')->whereYear('created_at',Carbon::now())->whereMonth('created_at','=',$r)->where('b_id','2')->where('status','Not Processed')->count();
//        }
//
//        //Social
//        $monthchartsocial = new NewChart();
//        $monthchartsocial->labels(['Jan', 'Feb', 'Mar', 'Apr', 'May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'])->dataset('Completed', 'bar', [$complete1[1],$complete1[2],$complete1[3],$complete1[4],$complete1[5],$complete1[6],$complete1[7],$complete1[8],$complete1[9],$complete1[10],$complete1[11],$complete1[12]])->backgroundColor('#00c9a7');
//        $monthchartsocial->dataset('Inprogress', 'bar', [$onprocessing[1],$onprocessing[2],$onprocessing[3],$onprocessing[4],$onprocessing[5],$onprocessing[6],$onprocessing[7],$onprocessing[8],$onprocessing[9],$onprocessing[10],$onprocessing[11],$onprocessing[12]])->backgroundColor('#36a2eb');
//        $monthchartsocial->dataset('Canceld', 'bar', [$cancel[1],$cancel[2],$cancel[3],$cancel[4],$cancel[5],$cancel[6],$cancel[7],$cancel[8],$cancel[9],$cancel[10],$cancel[11],$cancel[12]])->backgroundColor('#ff6384');
//        $monthchartsocial->dataset('Not Processed', 'bar', [$notprocessed[1],$notprocessed[2],$notprocessed[3],$notprocessed[4],$notprocessed[5],$notprocessed[6],$notprocessed[7],$notprocessed[8],$notprocessed[9],$notprocessed[10],$notprocessed[11],$notprocessed[12]])->backgroundColor('#aa6666');
//
//
////        $complete = DB::table('queues')->whereMonth('created_at','=',9)->where('b_id','4')->where('status','Completed')->count();
////        $cancel = DB::table('queues')->where('b_id','4')->where('status','Canceled')->count();
////        $inprocess = DB::table('queues')->where('b_id','4')->where('status','On Processing')->count();
////        $notprocessed = DB::table('queues')->where('b_id','4')->where('status','Not Processed')->count();
//
//        // DB Register
//        for ($r=1;$r<=12;$r++){
//            $complete1[$r] = DB::table('queues')->whereYear('created_at',Carbon::now())->whereMonth('created_at','=',$r)->where('b_id','7')->where('status','Completed')->count();
//        }
//
//        for ($r=1;$r<=12;$r++){
//            $cancel[$r] = DB::table('queues')->whereYear('created_at',Carbon::now())->whereMonth('created_at','=',$r)->where('b_id','7')->where('status','Canceled')->count();
//        }
//
//        for ($r=1;$r<=12;$r++){
//            $onprocessing[$r] = DB::table('queues')->whereYear('created_at',Carbon::now())->whereMonth('created_at','=',$r)->where('b_id','7')->where('status','On Processing')->count();
//        }
//
//        for ($r=1;$r<=12;$r++){
//            $notprocessed[$r] = DB::table('queues')->whereYear('created_at',Carbon::now())->whereMonth('created_at','=',$r)->where('b_id','7')->where('status','Not Processed')->count();
//        }
//
//        //Register
//        $monthchartregister = new NewChart();
//        $monthchartregister->labels(['Jan', 'Feb', 'Mar', 'Apr', 'May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'])->dataset('Completed', 'bar', [$complete1[1],$complete1[2],$complete1[3],$complete1[4],$complete1[5],$complete1[6],$complete1[7],$complete1[8],$complete1[9],$complete1[10],$complete1[11],$complete1[12]])->backgroundColor('#00c9a7');
//        $monthchartregister->dataset('Inprogress', 'bar', [$onprocessing[1],$onprocessing[2],$onprocessing[3],$onprocessing[4],$onprocessing[5],$onprocessing[6],$onprocessing[7],$onprocessing[8],$onprocessing[9],$onprocessing[10],$onprocessing[11],$onprocessing[12]])->backgroundColor('#36a2eb');
//        $monthchartregister->dataset('Canceld', 'bar', [$cancel[1],$cancel[2],$cancel[3],$cancel[4],$cancel[5],$cancel[6],$cancel[7],$cancel[8],$cancel[9],$cancel[10],$cancel[11],$cancel[12]])->backgroundColor('#ff6384');
//        $monthchartregister->dataset('Not Processed', 'bar', [$notprocessed[1],$notprocessed[2],$notprocessed[3],$notprocessed[4],$notprocessed[5],$notprocessed[6],$notprocessed[7],$notprocessed[8],$notprocessed[9],$notprocessed[10],$notprocessed[11],$notprocessed[12]])->backgroundColor('#aa6666');
//
//
//        // DB Women and Child
//        for ($r=1;$r<=12;$r++){
//            $complete1[$r] = DB::table('queues')->whereYear('created_at',Carbon::now())->whereMonth('created_at','=',$r)->where('b_id','6')->where('status','Completed')->count();
//        }
//
//        for ($r=1;$r<=12;$r++){
//            $cancel[$r] = DB::table('queues')->whereYear('created_at',Carbon::now())->whereMonth('created_at','=',$r)->where('b_id','6')->where('status','Canceled')->count();
//        }
//
//        for ($r=1;$r<=12;$r++){
//            $onprocessing[$r] = DB::table('queues')->whereYear('created_at',Carbon::now())->whereMonth('created_at','=',$r)->where('b_id','6')->where('status','On Processing')->count();
//        }
//
//        for ($r=1;$r<=12;$r++){
//            $notprocessed[$r] = DB::table('queues')->whereYear('created_at',Carbon::now())->whereMonth('created_at','=',$r)->where('b_id','6')->where('status','Not Processed')->count();
//        }
//        //Women and child
//        $monthchartwomenandchild = new NewChart();
//        $monthchartwomenandchild->labels(['Jan', 'Feb', 'Mar', 'Apr', 'May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'])->dataset('Completed', 'bar', [$complete1[1],$complete1[2],$complete1[3],$complete1[4],$complete1[5],$complete1[6],$complete1[7],$complete1[8],$complete1[9],$complete1[10],$complete1[11],$complete1[12]])->backgroundColor('#00c9a7');
//        $monthchartwomenandchild->dataset('Inprogress', 'bar', [$onprocessing[1],$onprocessing[2],$onprocessing[3],$onprocessing[4],$onprocessing[5],$onprocessing[6],$onprocessing[7],$onprocessing[8],$onprocessing[9],$onprocessing[10],$onprocessing[11],$onprocessing[12]])->backgroundColor('#36a2eb');
//        $monthchartwomenandchild->dataset('Canceld', 'bar', [$cancel[1],$cancel[2],$cancel[3],$cancel[4],$cancel[5],$cancel[6],$cancel[7],$cancel[8],$cancel[9],$cancel[10],$cancel[11],$cancel[12]])->backgroundColor('#ff6384');
//        $monthchartwomenandchild->dataset('Not Processed', 'bar', [$notprocessed[1],$notprocessed[2],$notprocessed[3],$notprocessed[4],$notprocessed[5],$notprocessed[6],$notprocessed[7],$notprocessed[8],$notprocessed[9],$notprocessed[10],$notprocessed[11],$notprocessed[12]])->backgroundColor('#aa6666');
//
//
//        // DB Admin
//        for ($r=1;$r<=12;$r++){
//            $complete1[$r] = DB::table('queues')->whereYear('created_at',Carbon::now())->whereMonth('created_at','=',$r)->where('b_id','1')->where('status','Completed')->count();
//        }
//
//        for ($r=1;$r<=12;$r++){
//            $cancel[$r] = DB::table('queues')->whereYear('created_at',Carbon::now())->whereMonth('created_at','=',$r)->where('b_id','1')->where('status','Canceled')->count();
//        }
//
//        for ($r=1;$r<=12;$r++){
//            $onprocessing[$r] = DB::table('queues')->whereYear('created_at',Carbon::now())->whereMonth('created_at','=',$r)->where('b_id','1')->where('status','On Processing')->count();
//        }
//
//        for ($r=1;$r<=12;$r++){
//            $notprocessed[$r] = DB::table('queues')->whereYear('created_at',Carbon::now())->whereMonth('created_at','=',$r)->where('b_id','1')->where('status','Not Processed')->count();
//        }
//        //Admin
//        $monthchartadmin = new NewChart();
//        $monthchartadmin->labels(['Jan', 'Feb', 'Mar', 'Apr', 'May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'])->dataset('Completed', 'bar', [$complete1[1],$complete1[2],$complete1[3],$complete1[4],$complete1[5],$complete1[6],$complete1[7],$complete1[8],$complete1[9],$complete1[10],$complete1[11],$complete1[12]])->backgroundColor('#00c9a7');
//        $monthchartadmin->dataset('Inprogress', 'bar', [$onprocessing[1],$onprocessing[2],$onprocessing[3],$onprocessing[4],$onprocessing[5],$onprocessing[6],$onprocessing[7],$onprocessing[8],$onprocessing[9],$onprocessing[10],$onprocessing[11],$onprocessing[12]])->backgroundColor('#36a2eb');
//        $monthchartadmin->dataset('Canceld', 'bar', [$cancel[1],$cancel[2],$cancel[3],$cancel[4],$cancel[5],$cancel[6],$cancel[7],$cancel[8],$cancel[9],$cancel[10],$cancel[11],$cancel[12]])->backgroundColor('#ff6384');
//        $monthchartadmin->dataset('Not Processed', 'bar', [$notprocessed[1],$notprocessed[2],$notprocessed[3],$notprocessed[4],$notprocessed[5],$notprocessed[6],$notprocessed[7],$notprocessed[8],$notprocessed[9],$notprocessed[10],$notprocessed[11],$notprocessed[12]])->backgroundColor('#aa6666');
//
//        // DB Planning
//        for ($r=1;$r<=12;$r++){
//            $complete1[$r] = DB::table('queues')->whereYear('created_at',Carbon::now())->whereMonth('created_at','=',$r)->where('b_id','3')->where('status','Completed')->count();
//        }
//
//        for ($r=1;$r<=12;$r++){
//            $cancel[$r] = DB::table('queues')->whereYear('created_at',Carbon::now())->whereMonth('created_at','=',$r)->where('b_id','3')->where('status','Canceled')->count();
//        }
//
//        for ($r=1;$r<=12;$r++){
//            $onprocessing[$r] = DB::table('queues')->whereYear('created_at',Carbon::now())->whereMonth('created_at','=',$r)->where('b_id','3')->where('status','On Processing')->count();
//        }
//
//        for ($r=1;$r<=12;$r++){
//            $notprocessed[$r] = DB::table('queues')->whereYear('created_at',Carbon::now())->whereMonth('created_at','=',$r)->where('b_id','3')->where('status','Not Processed')->count();
//        }
//        //Planning
//        $monthchartplanning = new NewChart();
//        $monthchartplanning->labels(['Jan', 'Feb', 'Mar', 'Apr', 'May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'])->dataset('Completed', 'bar', [$complete1[1],$complete1[2],$complete1[3],$complete1[4],$complete1[5],$complete1[6],$complete1[7],$complete1[8],$complete1[9],$complete1[10],$complete1[11],$complete1[12]])->backgroundColor('#00c9a7');
//        $monthchartplanning->dataset('Inprogress', 'bar', [$onprocessing[1],$onprocessing[2],$onprocessing[3],$onprocessing[4],$onprocessing[5],$onprocessing[6],$onprocessing[7],$onprocessing[8],$onprocessing[9],$onprocessing[10],$onprocessing[11],$onprocessing[12]])->backgroundColor('#36a2eb');
//        $monthchartplanning->dataset('Canceld', 'bar', [$cancel[1],$cancel[2],$cancel[3],$cancel[4],$cancel[5],$cancel[6],$cancel[7],$cancel[8],$cancel[9],$cancel[10],$cancel[11],$cancel[12]])->backgroundColor('#ff6384');
//        $monthchartplanning->dataset('Not Processed', 'bar', [$notprocessed[1],$notprocessed[2],$notprocessed[3],$notprocessed[4],$notprocessed[5],$notprocessed[6],$notprocessed[7],$notprocessed[8],$notprocessed[9],$notprocessed[10],$notprocessed[11],$notprocessed[12]])->backgroundColor('#aa6666');
//
//        // DB Land
//        for ($r=1;$r<=12;$r++){
//            $complete1[$r] = DB::table('queues')->whereYear('created_at',Carbon::now())->whereMonth('created_at','=',$r)->where('b_id','4')->where('status','Completed')->count();
//        }
//
//        for ($r=1;$r<=12;$r++){
//            $cancel[$r] = DB::table('queues')->whereYear('created_at',Carbon::now())->whereMonth('created_at','=',$r)->where('b_id','4')->where('status','Canceled')->count();
//        }
//
//        for ($r=1;$r<=12;$r++){
//            $onprocessing[$r] = DB::table('queues')->whereYear('created_at',Carbon::now())->whereMonth('created_at','=',$r)->where('b_id','4')->where('status','On Processing')->count();
//        }
//
//        for ($r=1;$r<=12;$r++){
//            $notprocessed[$r] = DB::table('queues')->whereYear('created_at',Carbon::now())->whereMonth('created_at','=',$r)->where('b_id','4')->where('status','Not Processed')->count();
//        }
//        //Land
//        $monthchartland = new NewChart();
//        $monthchartland->labels(['Jan', 'Feb', 'Mar', 'Apr', 'May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'])->dataset('Completed', 'bar', [$complete1[1],$complete1[2],$complete1[3],$complete1[4],$complete1[5],$complete1[6],$complete1[7],$complete1[8],$complete1[9],$complete1[10],$complete1[11],$complete1[12]])->backgroundColor('#00c9a7');
//        $monthchartland->dataset('Inprogress', 'bar', [$onprocessing[1],$onprocessing[2],$onprocessing[3],$onprocessing[4],$onprocessing[5],$onprocessing[6],$onprocessing[7],$onprocessing[8],$onprocessing[9],$onprocessing[10],$onprocessing[11],$onprocessing[12]])->backgroundColor('#36a2eb');
//        $monthchartland->dataset('Canceld', 'bar', [$cancel[1],$cancel[2],$cancel[3],$cancel[4],$cancel[5],$cancel[6],$cancel[7],$cancel[8],$cancel[9],$cancel[10],$cancel[11],$cancel[12]])->backgroundColor('#ff6384');
//        $monthchartland->dataset('Not Processed', 'bar', [$notprocessed[1],$notprocessed[2],$notprocessed[3],$notprocessed[4],$notprocessed[5],$notprocessed[6],$notprocessed[7],$notprocessed[8],$notprocessed[9],$notprocessed[10],$notprocessed[11],$notprocessed[12]])->backgroundColor('#aa6666');
//
//        // DB Samoorthi
//        for ($r=1;$r<=12;$r++){
//            $complete1[$r] = DB::table('queues')->whereYear('created_at',Carbon::now())->whereMonth('created_at','=',$r)->where('b_id','8')->where('status','Completed')->count();
//        }
//
//        for ($r=1;$r<=12;$r++){
//            $cancel[$r] = DB::table('queues')->whereYear('created_at',Carbon::now())->whereMonth('created_at','=',$r)->where('b_id','8')->where('status','Canceled')->count();
//        }
//
//        for ($r=1;$r<=12;$r++){
//            $onprocessing[$r] = DB::table('queues')->whereYear('created_at',Carbon::now())->whereMonth('created_at','=',$r)->where('b_id','8')->where('status','On Processing')->count();
//        }
//
//        for ($r=1;$r<=12;$r++){
//            $notprocessed[$r] = DB::table('queues')->whereYear('created_at',Carbon::now())->whereMonth('created_at','=',$r)->where('b_id','8')->where('status','Not Processed')->count();
//        }
//        //Samoorthi
//        $monthchartsamoorthi = new NewChart();
//        $monthchartsamoorthi->labels(['Jan', 'Feb', 'Mar', 'Apr', 'May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'])->dataset('Completed', 'bar', [$complete1[1],$complete1[2],$complete1[3],$complete1[4],$complete1[5],$complete1[6],$complete1[7],$complete1[8],$complete1[9],$complete1[10],$complete1[11],$complete1[12]])->backgroundColor('#00c9a7');
//        $monthchartsamoorthi->dataset('Inprogress', 'bar', [$onprocessing[1],$onprocessing[2],$onprocessing[3],$onprocessing[4],$onprocessing[5],$onprocessing[6],$onprocessing[7],$onprocessing[8],$onprocessing[9],$onprocessing[10],$onprocessing[11],$onprocessing[12]])->backgroundColor('#36a2eb');
//        $monthchartsamoorthi->dataset('Canceld', 'bar', [$cancel[1],$cancel[2],$cancel[3],$cancel[4],$cancel[5],$cancel[6],$cancel[7],$cancel[8],$cancel[9],$cancel[10],$cancel[11],$cancel[12]])->backgroundColor('#ff6384');
//        $monthchartsamoorthi->dataset('Not Processed', 'bar', [$notprocessed[1],$notprocessed[2],$notprocessed[3],$notprocessed[4],$notprocessed[5],$notprocessed[6],$notprocessed[7],$notprocessed[8],$notprocessed[9],$notprocessed[10],$notprocessed[11],$notprocessed[12]])->backgroundColor('#aa6666');
//
//
//        return view('chart',['monthchartaccounts'=>$monthchartaccounts,'monthchartsocial'=>$monthchartsocial,'monthchartregister'=>$monthchartregister,
//            'monthchartwomenandchild'=>$monthchartwomenandchild, 'monthchartadmin'=>$monthchartadmin,'monthchartplanning'=>$monthchartplanning,
//            'monthchartland'=>$monthchartland,'monthchartsamoorthi'=>$monthchartsamoorthi]);
//    }



    public function monthchart(Request $request){
        if($request->branch){

            for($branch = 1; $branch<=8;$branch++) {
                for ($date = 1; $date <= 31; $date++) {
                    $completedbranch[$branch][$date] = DB::table('queues')->whereMonth('created_at',$request->month)->whereDay('created_at', '=', $date)->where('b_id', '=', $branch)->where('status', 'Completed')->count();

                    $onprocessingbranch[$branch][$date] = DB::table('queues')->whereMonth('created_at',$request->month)->whereDay('created_at', '=', $date)->where('b_id', '=',$branch)->where('status', 'On Processing')->count();

                    $notprocessedbranch[$branch][$date] = DB::table('queues')->whereMonth('created_at', $request->month)->whereDay('created_at', '=', $date)->where('b_id', '=',$branch)->where('status', 'Not Processed')->count();

                    $canceledbranch[$branch][$date] = DB::table('queues')->whereMonth('created_at', $request->month)->whereDay('created_at', '=', $date)->where('b_id', '=',$branch)->where('status', 'Canceled')->count();
                }


                $branches[$branch] = new NewChart();
                $branches[$branch]->labels(['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31'])
                    ->dataset('Completed','bar',[$completedbranch[$branch][1],$completedbranch[$branch][2],$completedbranch[$branch][3],$completedbranch[$branch][4],$completedbranch[$branch][5],$completedbranch[$branch][6],$completedbranch[$branch][7],$completedbranch[$branch][8],$completedbranch[$branch][9],$completedbranch[$branch][10],$completedbranch[$branch][11],$completedbranch[$branch][12],$completedbranch[$branch][13],$completedbranch[$branch][14],$completedbranch[$branch][15],$completedbranch[$branch][16],$completedbranch[$branch][17],$completedbranch[$branch][18],$completedbranch[$branch][19],$completedbranch[$branch][20],$completedbranch[$branch][21],$completedbranch[$branch][22],$completedbranch[$branch][23],$completedbranch[$branch][24],$completedbranch[$branch][25],$completedbranch[$branch][26],$completedbranch[$branch][27],$completedbranch[$branch][28],$completedbranch[$branch][29],$completedbranch[$branch][30],$completedbranch[$branch][31]])->backgroundColor('#00c9a7');

                $branches[$branch]->dataset('Inprogress', 'bar', [$onprocessingbranch[$branch][1],$onprocessingbranch[$branch][2],$onprocessingbranch[$branch][3],$onprocessingbranch[$branch][4],$onprocessingbranch[$branch][5],$onprocessingbranch[$branch][6],$onprocessingbranch[$branch][7],$onprocessingbranch[$branch][8],$onprocessingbranch[$branch][9],$onprocessingbranch[$branch][10],$onprocessingbranch[$branch][11],$onprocessingbranch[$branch][12],$onprocessingbranch[$branch][13],$onprocessingbranch[$branch][14],$onprocessingbranch[$branch][15],$onprocessingbranch[$branch][16],$onprocessingbranch[$branch][17],$onprocessingbranch[$branch][18],$onprocessingbranch[$branch][19],$onprocessingbranch[$branch][20],$onprocessingbranch[$branch][21],$onprocessingbranch[$branch][22],$onprocessingbranch[$branch][23],$onprocessingbranch[$branch][24],$onprocessingbranch[$branch][25],$onprocessingbranch[$branch][26],$onprocessingbranch[$branch][27],$onprocessingbranch[$branch][28],$onprocessingbranch[$branch][29],$onprocessingbranch[$branch][30],$onprocessingbranch[$branch][31]])->backgroundColor('#36a2eb');

                $branches[$branch]->dataset('Not Processed', 'bar', [$notprocessedbranch[$branch][1],$notprocessedbranch[$branch][2],$notprocessedbranch[$branch][3],$notprocessedbranch[$branch][4],$notprocessedbranch[$branch][5],$notprocessedbranch[$branch][6],$notprocessedbranch[$branch][7],$notprocessedbranch[$branch][8],$notprocessedbranch[$branch][9],$notprocessedbranch[$branch][10],$notprocessedbranch[$branch][11],$notprocessedbranch[$branch][12],$notprocessedbranch[$branch][13],$notprocessedbranch[$branch][14],$notprocessedbranch[$branch][15],$notprocessedbranch[$branch][16],$notprocessedbranch[$branch][17],$notprocessedbranch[$branch][18],$notprocessedbranch[$branch][19],$notprocessedbranch[$branch][20],$notprocessedbranch[$branch][21],$notprocessedbranch[$branch][22],$notprocessedbranch[$branch][23],$notprocessedbranch[$branch][24],$notprocessedbranch[$branch][25],$notprocessedbranch[$branch][26],$notprocessedbranch[$branch][27],$notprocessedbranch[$branch][28],$notprocessedbranch[$branch][29],$notprocessedbranch[$branch][30],$notprocessedbranch[$branch][31]])->backgroundColor('#aa6666');

                $branches[$branch]->dataset('Canceld', 'bar', [$canceledbranch[$branch][1],$canceledbranch[$branch][2],$canceledbranch[$branch][3],$canceledbranch[$branch][4],$canceledbranch[$branch][5],$canceledbranch[$branch][6],$canceledbranch[$branch][7],$canceledbranch[$branch][8],$canceledbranch[$branch][9],$canceledbranch[$branch][10],$canceledbranch[$branch][11],$canceledbranch[$branch][12],$canceledbranch[$branch][13],$canceledbranch[$branch][14],$canceledbranch[$branch][15],$canceledbranch[$branch][16],$canceledbranch[$branch][17],$canceledbranch[$branch][18],$canceledbranch[$branch][19],$canceledbranch[$branch][20],$canceledbranch[$branch][21],$canceledbranch[$branch][22],$canceledbranch[$branch][23],$canceledbranch[$branch][24],$canceledbranch[$branch][25],$canceledbranch[$branch][26],$canceledbranch[$branch][27],$canceledbranch[$branch][28],$canceledbranch[$branch][29],$canceledbranch[$branch][30],$canceledbranch[$branch][31]])->backgroundColor('#ff6384');

            }

            $month = $request->month;
        }
        else{
            for($branch = 1; $branch<=8;$branch++) {
                for ($date = 1; $date <= 31; $date++) {
                    $completedbranch[$branch][$date] = DB::table('queues')->whereMonth('created_at', Carbon::now()->month)->whereDay('created_at', '=', $date)->where('b_id', '=', $branch)->where('status', 'Completed')->count();

                    $onprocessingbranch[$branch][$date] = DB::table('queues')->whereMonth('created_at', Carbon::now()->month)->whereDay('created_at', '=', $date)->where('b_id', '=',$branch)->where('status', 'On Processing')->count();

                    $notprocessedbranch[$branch][$date] = DB::table('queues')->whereMonth('created_at', Carbon::now()->month)->whereDay('created_at', '=', $date)->where('b_id', '=',$branch)->where('status', 'Not Processed')->count();

                    $canceledbranch[$branch][$date] = DB::table('queues')->whereMonth('created_at', Carbon::now()->month)->whereDay('created_at', '=', $date)->where('b_id', '=',$branch)->where('status', 'Canceled')->count();
                }


                $branches[$branch] = new NewChart();
                $branches[$branch]->labels(['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31'])
                    ->dataset('Completed','bar',[$completedbranch[$branch][1],$completedbranch[$branch][2],$completedbranch[$branch][3],$completedbranch[$branch][4],$completedbranch[$branch][5],$completedbranch[$branch][6],$completedbranch[$branch][7],$completedbranch[$branch][8],$completedbranch[$branch][9],$completedbranch[$branch][10],$completedbranch[$branch][11],$completedbranch[$branch][12],$completedbranch[$branch][13],$completedbranch[$branch][14],$completedbranch[$branch][15],$completedbranch[$branch][16],$completedbranch[$branch][17],$completedbranch[$branch][18],$completedbranch[$branch][19],$completedbranch[$branch][20],$completedbranch[$branch][21],$completedbranch[$branch][22],$completedbranch[$branch][23],$completedbranch[$branch][24],$completedbranch[$branch][25],$completedbranch[$branch][26],$completedbranch[$branch][27],$completedbranch[$branch][28],$completedbranch[$branch][29],$completedbranch[$branch][30],$completedbranch[$branch][31]])->backgroundColor('#00c9a7');

                $branches[$branch]->dataset('Inprogress', 'bar', [$onprocessingbranch[$branch][1],$onprocessingbranch[$branch][2],$onprocessingbranch[$branch][3],$onprocessingbranch[$branch][4],$onprocessingbranch[$branch][5],$onprocessingbranch[$branch][6],$onprocessingbranch[$branch][7],$onprocessingbranch[$branch][8],$onprocessingbranch[$branch][9],$onprocessingbranch[$branch][10],$onprocessingbranch[$branch][11],$onprocessingbranch[$branch][12],$onprocessingbranch[$branch][13],$onprocessingbranch[$branch][14],$onprocessingbranch[$branch][15],$onprocessingbranch[$branch][16],$onprocessingbranch[$branch][17],$onprocessingbranch[$branch][18],$onprocessingbranch[$branch][19],$onprocessingbranch[$branch][20],$onprocessingbranch[$branch][21],$onprocessingbranch[$branch][22],$onprocessingbranch[$branch][23],$onprocessingbranch[$branch][24],$onprocessingbranch[$branch][25],$onprocessingbranch[$branch][26],$onprocessingbranch[$branch][27],$onprocessingbranch[$branch][28],$onprocessingbranch[$branch][29],$onprocessingbranch[$branch][30],$onprocessingbranch[$branch][31]])->backgroundColor('#36a2eb');

                $branches[$branch]->dataset('Not Processed', 'bar', [$notprocessedbranch[$branch][1],$notprocessedbranch[$branch][2],$notprocessedbranch[$branch][3],$notprocessedbranch[$branch][4],$notprocessedbranch[$branch][5],$notprocessedbranch[$branch][6],$notprocessedbranch[$branch][7],$notprocessedbranch[$branch][8],$notprocessedbranch[$branch][9],$notprocessedbranch[$branch][10],$notprocessedbranch[$branch][11],$notprocessedbranch[$branch][12],$notprocessedbranch[$branch][13],$notprocessedbranch[$branch][14],$notprocessedbranch[$branch][15],$notprocessedbranch[$branch][16],$notprocessedbranch[$branch][17],$notprocessedbranch[$branch][18],$notprocessedbranch[$branch][19],$notprocessedbranch[$branch][20],$notprocessedbranch[$branch][21],$notprocessedbranch[$branch][22],$notprocessedbranch[$branch][23],$notprocessedbranch[$branch][24],$notprocessedbranch[$branch][25],$notprocessedbranch[$branch][26],$notprocessedbranch[$branch][27],$notprocessedbranch[$branch][28],$notprocessedbranch[$branch][29],$notprocessedbranch[$branch][30],$notprocessedbranch[$branch][31]])->backgroundColor('#aa6666');

                $branches[$branch]->dataset('Canceld', 'bar', [$canceledbranch[$branch][1],$canceledbranch[$branch][2],$canceledbranch[$branch][3],$canceledbranch[$branch][4],$canceledbranch[$branch][5],$canceledbranch[$branch][6],$canceledbranch[$branch][7],$canceledbranch[$branch][8],$canceledbranch[$branch][9],$canceledbranch[$branch][10],$canceledbranch[$branch][11],$canceledbranch[$branch][12],$canceledbranch[$branch][13],$canceledbranch[$branch][14],$canceledbranch[$branch][15],$canceledbranch[$branch][16],$canceledbranch[$branch][17],$canceledbranch[$branch][18],$canceledbranch[$branch][19],$canceledbranch[$branch][20],$canceledbranch[$branch][21],$canceledbranch[$branch][22],$canceledbranch[$branch][23],$canceledbranch[$branch][24],$canceledbranch[$branch][25],$canceledbranch[$branch][26],$canceledbranch[$branch][27],$canceledbranch[$branch][28],$canceledbranch[$branch][29],$canceledbranch[$branch][30],$canceledbranch[$branch][31]])->backgroundColor('#ff6384');

            }
            $month = Carbon::now()->month;

        }



        switch ($month){
            case 1:
                $month = 'January';
                break;
            case 2:
                $month = 'February';
                break;
            case 3:
                $month = 'March';
                break;
            case 4:
                $month = 'April';
                break;
            case 5:
                $month = 'May';
                break;
            case 6:
                $month = 'June';
                break;
            case 7:
                $month = 'July';
                break;
            case 8:
                $month = 'August';
                break;
            case 9:
                $month = 'September';
                break;
            case 10:
                $month = 'October';
                break;
            case 11:
                $month = 'November';
                break;
            case 12:
                $month = 'December';
                break;
        }


        ////////////////Week chatrt
        ///

        for($branch = 1; $branch<=8;$branch++) {
            for ($day = 1; $day <= 5 ;$day++) {
            $completedbranchw[$branch][$day] = 0;
            $notprocessedbranchw[$branch][$day] = 0;
            $onprocessingbranchw[$branch][$day] = 0;
            $canceledbranchw[$branch][$day] = 0;
        }}

        if(Carbon::today()->isMonday()){
            for($branch = 1; $branch<=8;$branch++) {
                for ($day = 1; $day <= 1 ;$day++) {

                    $completedbranchw[$branch][$day] = DB::table('queues')->whereDate('created_at','=',Carbon::today())->where('b_id','=',$branch)->where('status','=','Completed')->count();

                    $notprocessedbranchw[$branch][$day] = DB::table('queues')->whereDate('created_at',Carbon::today())->where('b_id', '=', $branch)->where('status', 'Not Processed')->count();

                    $onprocessingbranchw[$branch][$day] = DB::table('queues')->whereDate('created_at',Carbon::today())->where('b_id', '=', $branch)->where('status', 'On Processing')->count();

                    $canceledbranchw[$branch][$day] = DB::table('queues')->whereDate('created_at',Carbon::today())->where('b_id', '=', $branch)->where('status', 'Canceled')->count();

                }
            }
        }
        elseif (Carbon::today()->isTuesday()){
            for($branch = 1; $branch<=8;$branch++) {
                for ($day = 1; $day <= 2 ;$day++) {

                    $completedbranchw[$branch][$day] = DB::table('queues')->whereDate('created_at','=',Carbon::today()->subDay(2-$day))->where('b_id','=',$branch)->where('status','=','Completed')->count();

                    $notprocessedbranchw[$branch][$day] = DB::table('queues')->whereDate('created_at',Carbon::today()->subDay(2-$day))->where('b_id', '=', $branch)->where('status', 'Not Processed')->count();

                    $onprocessingbranchw[$branch][$day] = DB::table('queues')->whereDate('created_at',Carbon::today()->subDay(2-$day))->where('b_id', '=', $branch)->where('status', 'On Processing')->count();

                    $canceledbranchw[$branch][$day] = DB::table('queues')->whereDate('created_at',Carbon::today()->subDay(2-$day))->where('b_id', '=', $branch)->where('status', 'Canceled')->count();

                }
            }
        }
        elseif (Carbon::today()->isWednesday()){
            for($branch = 1; $branch<=8;$branch++) {
                for ($day = 1; $day <= 3 ;$day++) {

                    $completedbranchw[$branch][$day] = DB::table('queues')->whereDate('created_at','=',Carbon::today()->subDay(3-$day))->where('b_id','=',$branch)->where('status','=','Completed')->count();

                    $notprocessedbranchw[$branch][$day] = DB::table('queues')->whereDate('created_at',Carbon::today()->subDay(3-$day))->where('b_id', '=', $branch)->where('status', 'Not Processed')->count();

                    $onprocessingbranchw[$branch][$day] = DB::table('queues')->whereDate('created_at',Carbon::today()->subDay(3-$day))->where('b_id', '=', $branch)->where('status', 'On Processing')->count();

                    $canceledbranchw[$branch][$day] = DB::table('queues')->whereDate('created_at',Carbon::today()->subDay(3-$day))->where('b_id', '=', $branch)->where('status', 'Canceled')->count();

                }

            }
        }
        elseif (Carbon::today()->isThursday()){
            for($branch = 1; $branch<=8;$branch++) {
                for ($day = 1; $day <= 4 ;$day++) {

                    $completedbranchw[$branch][$day] = DB::table('queues')->whereDate('created_at','=',Carbon::today()->subDay(4-$day))->where('b_id','=',$branch)->where('status','=','Completed')->count();

                    $notprocessedbranchw[$branch][$day] = DB::table('queues')->whereDate('created_at',Carbon::today()->subDay(4-$day))->where('b_id', '=', $branch)->where('status', 'Not Processed')->count();

                    $onprocessingbranchw[$branch][$day] = DB::table('queues')->whereDate('created_at',Carbon::today()->subDay(4-$day))->where('b_id', '=', $branch)->where('status', 'On Processing')->count();

                    $canceledbranchw[$branch][$day] = DB::table('queues')->whereDate('created_at',Carbon::today()->subDay(4-$day))->where('b_id', '=', $branch)->where('status', 'Canceled')->count();

                }
            }
        }
        elseif (Carbon::today()->isFriday()){
            for($branch = 1; $branch<=8;$branch++) {
                for ($day = 1; $day <= 5 ;$day++) {

                    $completedbranchw[$branch][$day] = DB::table('queues')->whereDate('created_at','=',Carbon::today()->subDay(5-$day))->where('b_id','=',$branch)->where('status','=','Completed')->count();

                    $notprocessedbranchw[$branch][$day] = DB::table('queues')->whereDate('created_at',Carbon::today()->subDay(5-$day))->where('b_id', '=', $branch)->where('status', 'Not Processed')->count();

                    $onprocessingbranchw[$branch][$day] = DB::table('queues')->whereDate('created_at',Carbon::today()->subDay(5-$day))->where('b_id', '=', $branch)->where('status', 'On Processing')->count();

                    $canceledbranchw[$branch][$day] = DB::table('queues')->whereDate('created_at',Carbon::today()->subDay(5-$day))->where('b_id', '=', $branch)->where('status', 'Canceled')->count();

                }
            }
        }
        elseif (Carbon::today()->isSaturday()){
            for($branch = 1; $branch<=8;$branch++) {
                for ($day = 1; $day <= 5 ;$day++) {

                    $completedbranchw[$branch][$day] = DB::table('queues')->whereDate('created_at','=',Carbon::today()->subDay(6-$day))->where('b_id','=',$branch)->where('status','=','Completed')->count();

                    $notprocessedbranchw[$branch][$day] = DB::table('queues')->whereDate('created_at',Carbon::today()->subDay(6-$day))->where('b_id', '=', $branch)->where('status', 'Not Processed')->count();

                    $onprocessingbranchw[$branch][$day] = DB::table('queues')->whereDate('created_at',Carbon::today()->subDay(6-$day))->where('b_id', '=', $branch)->where('status', 'On Processing')->count();

                    $canceledbranchw[$branch][$day] = DB::table('queues')->whereDate('created_at',Carbon::today()->subDay(6-$day))->where('b_id', '=', $branch)->where('status', 'Canceled')->count();

                }
            }
        }
        elseif (Carbon::today()->isSunday()){
            for($branch = 1; $branch<=8;$branch++) {
                for ($day = 1; $day <= 5 ;$day++) {

                    $completedbranchw[$branch][$day] = DB::table('queues')->whereDate('created_at','=',Carbon::today()->subDay(7-$day))->where('b_id','=',$branch)->where('status','=','Completed')->count();

                    $notprocessedbranchw[$branch][$day] = DB::table('queues')->whereDate('created_at',Carbon::today()->subDay(7-$day))->where('b_id', '=', $branch)->where('status', 'Not Processed')->count();

                    $onprocessingbranchw[$branch][$day] = DB::table('queues')->whereDate('created_at',Carbon::today()->subDay(7-$day))->where('b_id', '=', $branch)->where('status', 'On Processing')->count();

                    $canceledbranchw[$branch][$day] = DB::table('queues')->whereDate('created_at',Carbon::today()->subDay(7-$day))->where('b_id', '=', $branch)->where('status', 'Canceled')->count();

                }
            }
        }

        for($inc = 1; $inc <=8; $inc++){
            $branchweek[$inc] = new NewChart();
            $branchweek[$inc]->labels(['Monday','Tuesday','Wednesday','Thursday','Friday'])
                ->dataset('Completed','bar',[$completedbranchw[$inc][1],$completedbranchw[$inc][2],$completedbranchw[$inc][3],$completedbranchw[$inc][4],$completedbranchw[$inc][5]])->backgroundColor('#00c9a7');

            $branchweek[$inc]->dataset('Inprogress', 'bar',[$onprocessingbranchw[$inc][1],$onprocessingbranchw[$inc][2],$onprocessingbranchw[$inc][3],$onprocessingbranchw[$inc][4],$onprocessingbranchw[$inc][5],])->backgroundColor('#36a2eb');

            $branchweek[$inc]->dataset('Not Processed', 'bar', [$notprocessedbranchw[$inc][1],$notprocessedbranchw[$inc][2],$notprocessedbranchw[$inc][3],$notprocessedbranchw[$inc][4],$notprocessedbranchw[$inc][5],])->backgroundColor('#aa6666');

            $branchweek[$inc]->dataset('Canceld', 'bar', [$canceledbranchw[$inc][1],$canceledbranchw[$inc][2],$canceledbranchw[$inc][3],$canceledbranchw[$inc][4],$canceledbranchw[$inc][5],])->backgroundColor('#ff6384');

        }

//////////// MOnth Chart Jan,Feb,Mar

        // DB Accounts
        for ($r=1;$r<=12;$r++){
            $complete1[$r] = DB::table('queues')->whereYear('created_at',Carbon::now())->whereMonth('created_at','=',$r)->where('b_id','5')->where('status','Completed')->count();
        }

        for ($r=1;$r<=12;$r++){
            $cancel[$r] = DB::table('queues')->whereYear('created_at',Carbon::now())->whereMonth('created_at','=',$r)->where('b_id','5')->where('status','Canceled')->count();
        }

        for ($r=1;$r<=12;$r++){
            $onprocessing[$r] = DB::table('queues')->whereYear('created_at',Carbon::now())->whereMonth('created_at','=',$r)->where('b_id','5')->where('status','On Processing')->count();
        }

        for ($r=1;$r<=12;$r++){
            $notprocessed[$r] = DB::table('queues')->whereYear('created_at',Carbon::now())->whereMonth('created_at','=',$r)->where('b_id','5')->where('status','Not Processed')->count();
        }

        //Accounts
        $monthchartaccounts = new NewChart();
        $monthchartaccounts->labels(['Jan', 'Feb', 'Mar', 'Apr', 'May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'])->dataset('Completed', 'bar', [$complete1[1],$complete1[2],$complete1[3],$complete1[4],$complete1[5],$complete1[6],$complete1[7],$complete1[8],$complete1[9],$complete1[10],$complete1[11],$complete1[12]])->backgroundColor('#00c9a7');
        $monthchartaccounts->dataset('Inprogress', 'bar', [$onprocessing[1],$onprocessing[2],$onprocessing[3],$onprocessing[4],$onprocessing[5],$onprocessing[6],$onprocessing[7],$onprocessing[8],$onprocessing[9],$onprocessing[10],$onprocessing[11],$onprocessing[12]])->backgroundColor('#36a2eb');
        $monthchartaccounts->dataset('Canceld', 'bar', [$cancel[1],$cancel[2],$cancel[3],$cancel[4],$cancel[5],$cancel[6],$cancel[7],$cancel[8],$cancel[9],$cancel[10],$cancel[11],$cancel[12]])->backgroundColor('#ff6384');
        $monthchartaccounts->dataset('Not Processed', 'bar', [$notprocessed[1],$notprocessed[2],$notprocessed[3],$notprocessed[4],$notprocessed[5],$notprocessed[6],$notprocessed[7],$notprocessed[8],$notprocessed[9],$notprocessed[10],$notprocessed[11],$notprocessed[12]])->backgroundColor('#aa6666');


        // DB Social
        for ($r=1;$r<=12;$r++){
            $complete1[$r] = DB::table('queues')->whereYear('created_at',Carbon::now())->whereMonth('created_at','=',$r)->where('b_id','2')->where('status','Completed')->count();
        }

        for ($r=1;$r<=12;$r++){
            $cancel[$r] = DB::table('queues')->whereYear('created_at',Carbon::now())->whereMonth('created_at','=',$r)->where('b_id','2')->where('status','Canceled')->count();
        }

        for ($r=1;$r<=12;$r++){
            $onprocessing[$r] = DB::table('queues')->whereYear('created_at',Carbon::now())->whereMonth('created_at','=',$r)->where('b_id','2')->where('status','On Processing')->count();
        }

        for ($r=1;$r<=12;$r++){
            $notprocessed[$r] = DB::table('queues')->whereYear('created_at',Carbon::now())->whereMonth('created_at','=',$r)->where('b_id','2')->where('status','Not Processed')->count();
        }

        //Social
        $monthchartsocial = new NewChart();
        $monthchartsocial->labels(['Jan', 'Feb', 'Mar', 'Apr', 'May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'])->dataset('Completed', 'bar', [$complete1[1],$complete1[2],$complete1[3],$complete1[4],$complete1[5],$complete1[6],$complete1[7],$complete1[8],$complete1[9],$complete1[10],$complete1[11],$complete1[12]])->backgroundColor('#00c9a7');
        $monthchartsocial->dataset('Inprogress', 'bar', [$onprocessing[1],$onprocessing[2],$onprocessing[3],$onprocessing[4],$onprocessing[5],$onprocessing[6],$onprocessing[7],$onprocessing[8],$onprocessing[9],$onprocessing[10],$onprocessing[11],$onprocessing[12]])->backgroundColor('#36a2eb');
        $monthchartsocial->dataset('Canceld', 'bar', [$cancel[1],$cancel[2],$cancel[3],$cancel[4],$cancel[5],$cancel[6],$cancel[7],$cancel[8],$cancel[9],$cancel[10],$cancel[11],$cancel[12]])->backgroundColor('#ff6384');
        $monthchartsocial->dataset('Not Processed', 'bar', [$notprocessed[1],$notprocessed[2],$notprocessed[3],$notprocessed[4],$notprocessed[5],$notprocessed[6],$notprocessed[7],$notprocessed[8],$notprocessed[9],$notprocessed[10],$notprocessed[11],$notprocessed[12]])->backgroundColor('#aa6666');


//        $complete = DB::table('queues')->whereMonth('created_at','=',9)->where('b_id','4')->where('status','Completed')->count();
//        $cancel = DB::table('queues')->where('b_id','4')->where('status','Canceled')->count();
//        $inprocess = DB::table('queues')->where('b_id','4')->where('status','On Processing')->count();
//        $notprocessed = DB::table('queues')->where('b_id','4')->where('status','Not Processed')->count();

        // DB Register
        for ($r=1;$r<=12;$r++){
            $complete1[$r] = DB::table('queues')->whereYear('created_at',Carbon::now())->whereMonth('created_at','=',$r)->where('b_id','7')->where('status','Completed')->count();
        }

        for ($r=1;$r<=12;$r++){
            $cancel[$r] = DB::table('queues')->whereYear('created_at',Carbon::now())->whereMonth('created_at','=',$r)->where('b_id','7')->where('status','Canceled')->count();
        }

        for ($r=1;$r<=12;$r++){
            $onprocessing[$r] = DB::table('queues')->whereYear('created_at',Carbon::now())->whereMonth('created_at','=',$r)->where('b_id','7')->where('status','On Processing')->count();
        }

        for ($r=1;$r<=12;$r++){
            $notprocessed[$r] = DB::table('queues')->whereYear('created_at',Carbon::now())->whereMonth('created_at','=',$r)->where('b_id','7')->where('status','Not Processed')->count();
        }

        //Register
        $monthchartregister = new NewChart();
        $monthchartregister->labels(['Jan', 'Feb', 'Mar', 'Apr', 'May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'])->dataset('Completed', 'bar', [$complete1[1],$complete1[2],$complete1[3],$complete1[4],$complete1[5],$complete1[6],$complete1[7],$complete1[8],$complete1[9],$complete1[10],$complete1[11],$complete1[12]])->backgroundColor('#00c9a7');
        $monthchartregister->dataset('Inprogress', 'bar', [$onprocessing[1],$onprocessing[2],$onprocessing[3],$onprocessing[4],$onprocessing[5],$onprocessing[6],$onprocessing[7],$onprocessing[8],$onprocessing[9],$onprocessing[10],$onprocessing[11],$onprocessing[12]])->backgroundColor('#36a2eb');
        $monthchartregister->dataset('Canceld', 'bar', [$cancel[1],$cancel[2],$cancel[3],$cancel[4],$cancel[5],$cancel[6],$cancel[7],$cancel[8],$cancel[9],$cancel[10],$cancel[11],$cancel[12]])->backgroundColor('#ff6384');
        $monthchartregister->dataset('Not Processed', 'bar', [$notprocessed[1],$notprocessed[2],$notprocessed[3],$notprocessed[4],$notprocessed[5],$notprocessed[6],$notprocessed[7],$notprocessed[8],$notprocessed[9],$notprocessed[10],$notprocessed[11],$notprocessed[12]])->backgroundColor('#aa6666');


        // DB Women and Child
        for ($r=1;$r<=12;$r++){
            $complete1[$r] = DB::table('queues')->whereYear('created_at',Carbon::now())->whereMonth('created_at','=',$r)->where('b_id','6')->where('status','Completed')->count();
        }

        for ($r=1;$r<=12;$r++){
            $cancel[$r] = DB::table('queues')->whereYear('created_at',Carbon::now())->whereMonth('created_at','=',$r)->where('b_id','6')->where('status','Canceled')->count();
        }

        for ($r=1;$r<=12;$r++){
            $onprocessing[$r] = DB::table('queues')->whereYear('created_at',Carbon::now())->whereMonth('created_at','=',$r)->where('b_id','6')->where('status','On Processing')->count();
        }

        for ($r=1;$r<=12;$r++){
            $notprocessed[$r] = DB::table('queues')->whereYear('created_at',Carbon::now())->whereMonth('created_at','=',$r)->where('b_id','6')->where('status','Not Processed')->count();
        }
        //Women and child
        $monthchartwomenandchild = new NewChart();
        $monthchartwomenandchild->labels(['Jan', 'Feb', 'Mar', 'Apr', 'May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'])->dataset('Completed', 'bar', [$complete1[1],$complete1[2],$complete1[3],$complete1[4],$complete1[5],$complete1[6],$complete1[7],$complete1[8],$complete1[9],$complete1[10],$complete1[11],$complete1[12]])->backgroundColor('#00c9a7');
        $monthchartwomenandchild->dataset('Inprogress', 'bar', [$onprocessing[1],$onprocessing[2],$onprocessing[3],$onprocessing[4],$onprocessing[5],$onprocessing[6],$onprocessing[7],$onprocessing[8],$onprocessing[9],$onprocessing[10],$onprocessing[11],$onprocessing[12]])->backgroundColor('#36a2eb');
        $monthchartwomenandchild->dataset('Canceld', 'bar', [$cancel[1],$cancel[2],$cancel[3],$cancel[4],$cancel[5],$cancel[6],$cancel[7],$cancel[8],$cancel[9],$cancel[10],$cancel[11],$cancel[12]])->backgroundColor('#ff6384');
        $monthchartwomenandchild->dataset('Not Processed', 'bar', [$notprocessed[1],$notprocessed[2],$notprocessed[3],$notprocessed[4],$notprocessed[5],$notprocessed[6],$notprocessed[7],$notprocessed[8],$notprocessed[9],$notprocessed[10],$notprocessed[11],$notprocessed[12]])->backgroundColor('#aa6666');


        // DB Admin
        for ($r=1;$r<=12;$r++){
            $complete1[$r] = DB::table('queues')->whereYear('created_at',Carbon::now())->whereMonth('created_at','=',$r)->where('b_id','1')->where('status','Completed')->count();
        }

        for ($r=1;$r<=12;$r++){
            $cancel[$r] = DB::table('queues')->whereYear('created_at',Carbon::now())->whereMonth('created_at','=',$r)->where('b_id','1')->where('status','Canceled')->count();
        }

        for ($r=1;$r<=12;$r++){
            $onprocessing[$r] = DB::table('queues')->whereYear('created_at',Carbon::now())->whereMonth('created_at','=',$r)->where('b_id','1')->where('status','On Processing')->count();
        }

        for ($r=1;$r<=12;$r++){
            $notprocessed[$r] = DB::table('queues')->whereYear('created_at',Carbon::now())->whereMonth('created_at','=',$r)->where('b_id','1')->where('status','Not Processed')->count();
        }
        //Admin
        $monthchartadmin = new NewChart();
        $monthchartadmin->labels(['Jan', 'Feb', 'Mar', 'Apr', 'May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'])->dataset('Completed', 'bar', [$complete1[1],$complete1[2],$complete1[3],$complete1[4],$complete1[5],$complete1[6],$complete1[7],$complete1[8],$complete1[9],$complete1[10],$complete1[11],$complete1[12]])->backgroundColor('#00c9a7');
        $monthchartadmin->dataset('Inprogress', 'bar', [$onprocessing[1],$onprocessing[2],$onprocessing[3],$onprocessing[4],$onprocessing[5],$onprocessing[6],$onprocessing[7],$onprocessing[8],$onprocessing[9],$onprocessing[10],$onprocessing[11],$onprocessing[12]])->backgroundColor('#36a2eb');
        $monthchartadmin->dataset('Canceld', 'bar', [$cancel[1],$cancel[2],$cancel[3],$cancel[4],$cancel[5],$cancel[6],$cancel[7],$cancel[8],$cancel[9],$cancel[10],$cancel[11],$cancel[12]])->backgroundColor('#ff6384');
        $monthchartadmin->dataset('Not Processed', 'bar', [$notprocessed[1],$notprocessed[2],$notprocessed[3],$notprocessed[4],$notprocessed[5],$notprocessed[6],$notprocessed[7],$notprocessed[8],$notprocessed[9],$notprocessed[10],$notprocessed[11],$notprocessed[12]])->backgroundColor('#aa6666');

        // DB Planning
        for ($r=1;$r<=12;$r++){
            $complete1[$r] = DB::table('queues')->whereYear('created_at',Carbon::now())->whereMonth('created_at','=',$r)->where('b_id','3')->where('status','Completed')->count();
        }

        for ($r=1;$r<=12;$r++){
            $cancel[$r] = DB::table('queues')->whereYear('created_at',Carbon::now())->whereMonth('created_at','=',$r)->where('b_id','3')->where('status','Canceled')->count();
        }

        for ($r=1;$r<=12;$r++){
            $onprocessing[$r] = DB::table('queues')->whereYear('created_at',Carbon::now())->whereMonth('created_at','=',$r)->where('b_id','3')->where('status','On Processing')->count();
        }

        for ($r=1;$r<=12;$r++){
            $notprocessed[$r] = DB::table('queues')->whereYear('created_at',Carbon::now())->whereMonth('created_at','=',$r)->where('b_id','3')->where('status','Not Processed')->count();
        }
        //Planning
        $monthchartplanning = new NewChart();
        $monthchartplanning->labels(['Jan', 'Feb', 'Mar', 'Apr', 'May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'])->dataset('Completed', 'bar', [$complete1[1],$complete1[2],$complete1[3],$complete1[4],$complete1[5],$complete1[6],$complete1[7],$complete1[8],$complete1[9],$complete1[10],$complete1[11],$complete1[12]])->backgroundColor('#00c9a7');
        $monthchartplanning->dataset('Inprogress', 'bar', [$onprocessing[1],$onprocessing[2],$onprocessing[3],$onprocessing[4],$onprocessing[5],$onprocessing[6],$onprocessing[7],$onprocessing[8],$onprocessing[9],$onprocessing[10],$onprocessing[11],$onprocessing[12]])->backgroundColor('#36a2eb');
        $monthchartplanning->dataset('Canceld', 'bar', [$cancel[1],$cancel[2],$cancel[3],$cancel[4],$cancel[5],$cancel[6],$cancel[7],$cancel[8],$cancel[9],$cancel[10],$cancel[11],$cancel[12]])->backgroundColor('#ff6384');
        $monthchartplanning->dataset('Not Processed', 'bar', [$notprocessed[1],$notprocessed[2],$notprocessed[3],$notprocessed[4],$notprocessed[5],$notprocessed[6],$notprocessed[7],$notprocessed[8],$notprocessed[9],$notprocessed[10],$notprocessed[11],$notprocessed[12]])->backgroundColor('#aa6666');

        // DB Land
        for ($r=1;$r<=12;$r++){
            $complete1[$r] = DB::table('queues')->whereYear('created_at',Carbon::now())->whereMonth('created_at','=',$r)->where('b_id','4')->where('status','Completed')->count();
        }

        for ($r=1;$r<=12;$r++){
            $cancel[$r] = DB::table('queues')->whereYear('created_at',Carbon::now())->whereMonth('created_at','=',$r)->where('b_id','4')->where('status','Canceled')->count();
        }

        for ($r=1;$r<=12;$r++){
            $onprocessing[$r] = DB::table('queues')->whereYear('created_at',Carbon::now())->whereMonth('created_at','=',$r)->where('b_id','4')->where('status','On Processing')->count();
        }

        for ($r=1;$r<=12;$r++){
            $notprocessed[$r] = DB::table('queues')->whereYear('created_at',Carbon::now())->whereMonth('created_at','=',$r)->where('b_id','4')->where('status','Not Processed')->count();
        }
        //Land
        $monthchartland = new NewChart();
        $monthchartland->labels(['Jan', 'Feb', 'Mar', 'Apr', 'May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'])->dataset('Completed', 'bar', [$complete1[1],$complete1[2],$complete1[3],$complete1[4],$complete1[5],$complete1[6],$complete1[7],$complete1[8],$complete1[9],$complete1[10],$complete1[11],$complete1[12]])->backgroundColor('#00c9a7');
        $monthchartland->dataset('Inprogress', 'bar', [$onprocessing[1],$onprocessing[2],$onprocessing[3],$onprocessing[4],$onprocessing[5],$onprocessing[6],$onprocessing[7],$onprocessing[8],$onprocessing[9],$onprocessing[10],$onprocessing[11],$onprocessing[12]])->backgroundColor('#36a2eb');
        $monthchartland->dataset('Canceld', 'bar', [$cancel[1],$cancel[2],$cancel[3],$cancel[4],$cancel[5],$cancel[6],$cancel[7],$cancel[8],$cancel[9],$cancel[10],$cancel[11],$cancel[12]])->backgroundColor('#ff6384');
        $monthchartland->dataset('Not Processed', 'bar', [$notprocessed[1],$notprocessed[2],$notprocessed[3],$notprocessed[4],$notprocessed[5],$notprocessed[6],$notprocessed[7],$notprocessed[8],$notprocessed[9],$notprocessed[10],$notprocessed[11],$notprocessed[12]])->backgroundColor('#aa6666');

        // DB Samoorthi
        for ($r=1;$r<=12;$r++){
            $complete1[$r] = DB::table('queues')->whereYear('created_at',Carbon::now())->whereMonth('created_at','=',$r)->where('b_id','8')->where('status','Completed')->count();
        }

        for ($r=1;$r<=12;$r++){
            $cancel[$r] = DB::table('queues')->whereYear('created_at',Carbon::now())->whereMonth('created_at','=',$r)->where('b_id','8')->where('status','Canceled')->count();
        }

        for ($r=1;$r<=12;$r++){
            $onprocessing[$r] = DB::table('queues')->whereYear('created_at',Carbon::now())->whereMonth('created_at','=',$r)->where('b_id','8')->where('status','On Processing')->count();
        }

        for ($r=1;$r<=12;$r++){
            $notprocessed[$r] = DB::table('queues')->whereYear('created_at',Carbon::now())->whereMonth('created_at','=',$r)->where('b_id','8')->where('status','Not Processed')->count();
        }
        //Samoorthi
        $monthchartsamoorthi = new NewChart();
        $monthchartsamoorthi->labels(['Jan', 'Feb', 'Mar', 'Apr', 'May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'])->dataset('Completed', 'bar', [$complete1[1],$complete1[2],$complete1[3],$complete1[4],$complete1[5],$complete1[6],$complete1[7],$complete1[8],$complete1[9],$complete1[10],$complete1[11],$complete1[12]])->backgroundColor('#00c9a7');
        $monthchartsamoorthi->dataset('Inprogress', 'bar', [$onprocessing[1],$onprocessing[2],$onprocessing[3],$onprocessing[4],$onprocessing[5],$onprocessing[6],$onprocessing[7],$onprocessing[8],$onprocessing[9],$onprocessing[10],$onprocessing[11],$onprocessing[12]])->backgroundColor('#36a2eb');
        $monthchartsamoorthi->dataset('Canceld', 'bar', [$cancel[1],$cancel[2],$cancel[3],$cancel[4],$cancel[5],$cancel[6],$cancel[7],$cancel[8],$cancel[9],$cancel[10],$cancel[11],$cancel[12]])->backgroundColor('#ff6384');
        $monthchartsamoorthi->dataset('Not Processed', 'bar', [$notprocessed[1],$notprocessed[2],$notprocessed[3],$notprocessed[4],$notprocessed[5],$notprocessed[6],$notprocessed[7],$notprocessed[8],$notprocessed[9],$notprocessed[10],$notprocessed[11],$notprocessed[12]])->backgroundColor('#aa6666');




        return view('chart',['branch1'=> $branches[1],'branch2'=> $branches[2],'branch3'=> $branches[3],'branch4'=> $branches[4],'branch5'=> $branches[5],'branch6'=> $branches[6],'branch7'=> $branches[7],'branch8'=> $branches[8],'month'=>$month,'branch1w'=> $branchweek[1],'branch2w'=> $branchweek[2],'branch3w'=> $branchweek[3],'branch4w'=> $branchweek[4],'branch5w'=> $branchweek[5],'branch6w'=> $branchweek[6],'branch7w'=> $branchweek[7],'branch8w'=> $branchweek[8],'monthchartaccounts'=>$monthchartaccounts,'monthchartsocial'=>$monthchartsocial,'monthchartregister'=>$monthchartregister,
            'monthchartwomenandchild'=>$monthchartwomenandchild, 'monthchartadmin'=>$monthchartadmin,'monthchartplanning'=>$monthchartplanning,
            'monthchartland'=>$monthchartland,'monthchartsamoorthi'=>$monthchartsamoorthi]);
    }




    public function saveStateTab(Request $request){

        if($request->branch1 == 1){
            Session::put('tabState1', 'active');
            Session::put('tabState2', '');
            Session::put('tabState3', '');
            Session::put('tabState4', '');
            Session::put('tabState5', '');
            Session::put('tabState6', '');
            Session::put('tabState7', '');
//            Session::remove('tabState2');
//            Session::remove('tabState3');
//            Session::remove('tabState4');
//            Session::remove('tabState5');
//            Session::remove('tabState6');
//            Session::remove('tabState7');
//            Session::remove('tabState8');
        }
        else if($request->branch1 == 2){
            Session::put('tabState2', 'active');
            Session::remove('tabState1');
            Session::remove('tabState3');
            Session::remove('tabState4');
            Session::remove('tabState5');
            Session::remove('tabState6');
            Session::remove('tabState7');
            Session::remove('tabState8');
        }
        else if($request->branch1 == 3){
            Session::put('tabState3', 'active');
            Session::remove('tabState2');
            Session::remove('tabState1');
            Session::remove('tabState4');
            Session::remove('tabState5');
            Session::remove('tabState6');
            Session::remove('tabState7');
            Session::remove('tabState8');
        }
        if($request->branch1 == 4){
            Session::put('tabState4', 'active');
            Session::remove('tabState2');
            Session::remove('tabState3');
            Session::remove('tabState1');
            Session::remove('tabState5');
            Session::remove('tabState6');
            Session::remove('tabState7');
            Session::remove('tabState8');
        }
        if($request->branch1 == 5){
            Session::put('tabState5', 'active');
            Session::remove('tabState2');
            Session::remove('tabState3');
            Session::remove('tabState4');
            Session::remove('tabState1');
            Session::remove('tabState6');
            Session::remove('tabState7');
            Session::remove('tabState8');

        }
        if($request->branch1 == 6){
            Session::put('tabState6', 'active');
            Session::remove('tabState2');
            Session::remove('tabState3');
            Session::remove('tabState4');
            Session::remove('tabState5');
            Session::remove('tabState1');
            Session::remove('tabState7');
            Session::remove('tabState8');
        }
        if($request->branch1 == 7){
            Session::put('tabState7', 'active');
            Session::remove('tabState2');
            Session::remove('tabState3');
            Session::remove('tabState4');
            Session::remove('tabState5');
            Session::remove('tabState6');
            Session::remove('tabState1');
            Session::remove('tabState8');
        }
        if($request->branch1 == 8){
            Session::put('tabState8', 'active');
            Session::remove('tabState2');
            Session::remove('tabState3');
            Session::remove('tabState4');
            Session::remove('tabState5');
            Session::remove('tabState6');
            Session::remove('tabState7');
            Session::remove('tabState1');
        }

    }

}
