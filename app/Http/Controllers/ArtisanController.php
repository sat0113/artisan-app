<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ArtisanRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class ArtisanController extends Controller
{
    /**
     * 新規登録画面を表示する
     * @return view
     */
    public function create2() {
        return view('login/form2');
    }
    /**
     * 新規登録をする
     * @return view
     */
    public function store2(ArtisanRequest $request) {
        // 入力データを受け取る
        // $param = $request->all();
        // 管理者を登録
        $param = ([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'created_at' => now(),
            'updated_at' => now(),

        ]);
        Session::flash('登録されました。');
        DB::table('users') -> insert($param);
        return redirect(route('Login.show2'));
    }
}
