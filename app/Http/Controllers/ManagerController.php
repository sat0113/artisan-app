<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ManagerRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class ManagerController extends Controller
{
    /**
     * 新規登録画面を表示する
     * @return view
     */
    public function create() {
        return view('login/form');
    }
    /**
     * 新規登録をする
     * @return view
     */
    public function store(ManagerRequest $request) {
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
        DB::table('managers') -> insert($param);
        return redirect(route('Login.show'));
    }
    /**
     * 管理者ページ編集画面を表示する
     * @return view
     */
    // public function add() {

    //     return view('login/add');
    // }


    public function add($id) {
        $manager = Manager::find($id);

        if(is_null($manager)){
            \session::flash('err_msg','データがありません。');
            return redirect(route('home'));
        }
        return view('login/add',['manager' => $manager]);
    }

    // public function update(Request $request) {
    //     $this->validate($request, Manager::$rules);
    //     $manager = new Manager;
    //     $form = $request->all();
    //     unset($form['_token']);
    //     $manager->fill($form)->save();
    //     return redirect('login/update');
    // }
}
