<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Dedura;
use App\Models\User;
use App\Models\Genba;

class DeduraController extends Controller
{
    public function dedura() {
        return view('manager/dedura');
    }
    public function artisanbetu(Request $request) {
        //ペジネーション処理
        if(isset($_GET['y'])){
            $y = $_GET['y'];
        } else {
            $y = date('Y');
        }
        if(isset($_GET['m'])){
            $m = $_GET['m'];
        } else {
            $m = date('m');
        }
        $next_y = $y;
        $next_m = sprintf('%02d',(int)$m+1);
        if($next_m > 12){
          $next_y++;
          $next_m = '01';
        }
        $next = '/artisanbetu?y='.$next_y.'&m='.$next_m;
        $prev_y = $y;
        $prev_m = sprintf('%02d',(int)$m-1);
        if($prev_m < 1){
            $prev_y--;
            $prev_m = '12';
          }
        $prev = '/artisanbetu?y='.$prev_y.'&m='.$prev_m;

        $start = date($y.'-'.$m.'-01');
        $end = date($y.'-'.$m.'-t');
        $deduras = Dedura::where('date', '>=', $start)
                        ->where('date', '<=', $end)
                        ->get();
        $dates = [];
        $end_date = (int)date("t");
        $weeks = [
            '日', //0
            '月', //1
            '火', //2
            '水', //3
            '木', //4
            '金', //5
            '土', //6
        ];
        // $prev = date('Y-m', strtotime('-1 month', $end_date)); //前月の算出
        // $next = date('Y-m', strtotime('+1 month', )); //次月の算出
        // dd($prev);

        for($e=1; $e<=$end_date; $e++){
            $day = sprintf('%02d', $e);
            $month = $m;
            $dateStr = date($y.'-'.$m.'-'.$day);
            $dates[] = [
                'date' => $e,
                'month' => $month,
                'dateStr' => $dateStr,
                'weeks' => $weeks[date("w", strtotime($dateStr))],
                'key' => $y.'-'.$m.'-'.$day,
            ];
        }
        $users = User::all();
        $genbas = Genba::all()->pluck('name', 'id');

        $calendar = [];
        $spot = [];

        foreach($deduras as $dedura){
            $id = $dedura->id;
            $date = $dedura->date;
            $user_id = $dedura->user_id;
            $calendar[$date][$user_id] = $dedura;

            $genba_id = $dedura->genba_id;
            if (!isset($spot[$user_id][$genba_id])) {
                $spot[$user_id][$genba_id] = 0;
            }
            $spot[$user_id][$genba_id]++;
        }

        return view('manager/artisanbetu',[
            'deduras' => $deduras,
            'users' => $users,
            'genbas' => $genbas,
            'calendar' => $calendar,
            'spot' => $spot,
            'dates' => $dates,
            'next' => $next,
            'prev' => $prev,
            'y' => $y,
            'm' => $m,
        ]);

    }

    // /**
	//  * 次の月
	//  */
	// public function getNextMonth(){
	// 	return $this->carbon->copy()->addMonthsNoOverflow()->format('Y-m');
	// }
	// /**
	//  * 前の月
	//  */
	// public function getPreviousMonth(){
	// 	return $this->carbon->copy()->subMonthsNoOverflow()->format('Y-m');
	// }

    // public function genbabetu(Requist $request) {
    //     $items = DB::table('deduras')->get();
    //     return view('manager/genbabetu',['items' => $items]);

    // }
}
