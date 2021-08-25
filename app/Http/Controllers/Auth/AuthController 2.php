<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

// 1.Authの確認。実装
// 2.ログイン後のページの作成
// 3.ミドルウェアの設定

class AuthController extends Controller
{
    /////////////////////////////////// 管理者 ///////////////////////////////////
    /**
     * @return View
     */
    public function showLogin(){
        return view('login.login_form');
    }
    /**
     *@param App\Http\Requests\LoginFormRequest $request
    */ 
    public function login(LoginFormRequest $request){
        $credentials = $request->only('email','password');

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();

            return redirect()->route('home')->with('login_success','ログインが成功しました！');
        }
        // ShowLoginのlogin_formでlogin_errorの内容ををsessionで返せる
        return back()->withErrors([
            'login_error' => 'メールアドレスかパスワードが間違っています。',
        ]);
    }

    /**
     * ユーザーをアプリケーションからログアウトさせる
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('Login.show')->with('logout','ログアウトしました！');
    }

    /////////////////////////////////// 職人 ///////////////////////////////////
    /**
     * @return View
     */
    public function showLogin2(){
        return view('login.login_form2');
    }
    /**
     *@param App\Http\Requests\LoginFormRequest $request
    */ 
    public function login2(LoginFormRequest $request){
        $credentials = $request->only('email','password');

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();

            return redirect()->route('home2')->with('login_success','ログインが成功しました！');
        }
        // ShowLoginのlogin_formでlogin_errorの内容ををsessionで返せる
        return back()->withErrors([
            'login_error' => 'メールアドレスかパスワードが間違っています。',
        ]);
    }

    /**
     * ユーザーをアプリケーションからログアウトさせる
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function logout2(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('Login.show')->with('logout','ログアウトしました！');
    }
}