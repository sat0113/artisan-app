<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\Genba;



class GenbaController extends Controller
{
    public function genbacreate(){
        return view('manager/genbacreate');
    }
    public function genbastore(Request $request){
        $request->session()->put($request->all());
        $genba_name = $request['name'];
        $genba_address = $request['address'];
        // 工期（開始）日のチェック
        $start_y = $request->start_y;
        $start_m = $request->start_m;
        $start_d = $request->start_d;
        $startDate = $start_y.'年'.$start_m.'月'.$start_d.'日';
        $startDate_result = checkdate($start_m,$start_d,$start_y);//Requestに移す
        if($startDate_result == false){
            return view('manager/genbacreate');
        }
        // 工期（終了）日のチェック
        $end_y = $request->end_y;
        $end_m = $request->end_m;
        $end_d = $request->end_d;
        $endDate = $end_y.'年'.$end_m.'月'.$end_d.'日';
        $endDate_result = checkdate($end_m,$end_d,$end_y);//Requestに移す
        if($endDate_result == false){
            return view('manager/genbacreate');
        }
        return view('manager/genbastore',[
            'genba_name' => $genba_name,
            'genba_address' => $genba_address,
            'startDate' => $startDate,
            'endDate' => $endDate,
        ]);
    }

    public function genbaregister(){
        $data = session()->all();
        $startDate_register = $data['start_y'].'-'.$data['start_m'].'-'.$data['start_d'];
        $endDate_register = $data['end_y'].'-'.$data['end_m'].'-'.$data['end_d'];
        $param = ([
            'name' => $data['name'],
            'address' => $data['address'],
            'startDate' => $startDate_register,
            'endDate' => $endDate_register,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Session::flash('登録されました。');
        DB::table('genbas')->insert($param);
        return redirect()->route('genbalist');
    }
    public function genbalist(){
        $genbas = Genba::all();
        return view('manager/genbalist',[
            'genbas' => $genbas
        ]);
    }
}

