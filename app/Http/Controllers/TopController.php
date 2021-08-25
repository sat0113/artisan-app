<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopController extends Controller
{
    /**
     * @return View
     */
    public function top(){
        return view('top');
    }
    /**
     * @return View
     */
    public function inquiry(){
        return view('inquiry');
    }
    /**
     * 
     */
    public function listen(Request $request){
        //バリデーションを実行（結果に問題があれば処理を中断してエラーを返す）
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'title' => 'required',
            'message'  => 'required',
        ]);

        //フォームから受け取ったすべてのinputの値を取得
        $inputs = $request->all();

        //入力内容確認ページのviewに変数を渡して表示
        return view('listen', [
            'inputs' => $inputs,
        ]);

        // 入力データを受け取る
        // $param = $request->all();
        // 管理者を登録
//         $param = ([
//             'name' => $request['name'],
//             'email' => $request['email'],
//             'password' => Hash::make($request['password']),

    
//         Session::flash('登録されました。');
//         DB::table('managers') -> insert($param);
//         return redirect(route('Login.show')); 
    }
    public function send(Request $request){
        //バリデーションを実行（結果に問題があれば処理を中断してエラーを返す）
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'title' => 'required',
            'body'  => 'required'
        ]);

        //フォームから受け取ったactionの値を取得
        $action = $request->input('action');
        
        //フォームから受け取ったactionを除いたinputの値を取得
        $inputs = $request->except('action');

        //actionの値で分岐
        if($action !== 'submit'){
            return redirect()
                ->route('inquiry')
                ->withInput($inputs);

        } else {
            //入力されたメールアドレスにメールを送信
            // \Mail::to($inputs['email'])->send(new ContactSendmail($inputs));

            //再送信を防ぐためにトークンを再発行
            // $request->session()->regenerateToken();

            //送信完了ページのviewを表示
            return view('send');
            
        }
    }
}