<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\TopController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\ArtisanController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DeduraController;
use App\Http\Controllers\GenbaController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// トップ画面
Route::get('/',[TopController::class,'top'])->name('top');
// お問い合わせ
Route::get('inquiry',[TopController::class,'inquiry'])->name('inquiry');
// お問い合わせ内容確認
Route::post('listen',[TopController::class,'listen'])->name('listen');
// お問い合わせ内容送信
Route::post('send',[TopController::class,'send'])->name('send');

// //////////////////////////manager_side//////////////////////////////

Route::group(['middleware' => ['guest']], function () {
    // ログインフォーム表示
    Route::get('showLogin', [AuthController::class,'showLogin'])->name('Login.show');
    // ログイン処理
    Route::post('login',[AuthController::class,'login'])->name('login');
    // 新規登録画面を表示
    Route::get('create',[ManagerController::class,'create'])->name('create');
    // 新規登録
    Route::post('store',[ManagerController::class,'store'])->name('store');

});

Route::group(['middleware' => ['auth:managers']], function () {
    // 管理者編集ページ
    Route::get('login/add',[ManagerController::class,'add'])->name('add');
    // 管理者更新ページ
    Route::post('login/update',[ManagerController::class,'update'])->name('update');
    // ログアウト
    Route::post('logout',[AuthController::class,'logout'])->name('logout');
    // ホーム画面
    Route::get('home',[HomeController::class,'home'])->name('home');
    // 出面選択画面
    Route::get('dedura',[DeduraController::class,'dedura'])->name('dedura');
    // 職人別の出面
    Route::get('artisanbetu',[DeduraController::class,'artisanbetu'])->name('artisanbetu');
    // 現場別の出面
    Route::get('genbabetu',[DeduraController::class,'genbabetu'])->name('genbabetu');
    // 現場登録入力画面
    Route::get('genbacreate',[GenbaController::class,'genbacreate'])->name('genbacreate');
    // 現場登録確認画面
    Route::post('genbastore',[GenbaController::class,'genbastore'])->name('genbastore');
    // 現場登録及び一覧表示
    Route::post('genbalist',[GenbaController::class,'genbaregister'])->name('genbaregister');
    // 現場一覧表示
    Route::get('genbalist',[GenbaController::class,'genbalist'])->name('genbalist');
});

// //////////////////////////artisan_side//////////////////////////////

Route::group(['middleware' => ['guest']], function () {
    // ログインフォーム表示
    Route::get('showLogin2', [AuthController::class,'showLogin2'])->name('Login.show2');
    // ログイン処理
    Route::post('login2',[AuthController::class,'login2'])->name('login2');
    // 新規登録画面を表示
    Route::get('create2',[ArtisanController::class,'create2'])->name('create2');
    // 新規登録
    Route::post('store2',[ArtisanController::class,'store2'])->name('store2');

});

Route::group(['middleware' => ['auth']], function () {
    // ログアウト
    Route::post('logout2',[AuthController::class,'logout2'])->name('logout2');
    // ホーム画面
    Route::get('home2',[HomeController::class,'home2'])->name('home2');
    // 出面選択画面
    // Route::get('dedura',[DeduraController::class,'dedura'])->name('dedura');
    // 職人別の出面
    // Route::get('artisanbetu',[DeduraController::class,'artisanbetu'])->name('artisanbetu');
    // 現場別の出面
    // Route::get('genbabetu',[DeduraController::class,'genbabetu'])->name('genbabetu');

});
