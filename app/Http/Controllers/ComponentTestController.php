<?php
//ターミナルでphp artisan make:controller ComponentTestControllerを打ってコントローラー作成
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComponentTestController extends Controller
{
    //resources/viewsの中にフォルダ（tests）を作成しファイル名を指定（component-test1）
    public function showComponent1()
    {
        $message = 'メッセージ'; //コントローラーからブレード側に値を渡す
        return view('tests.component-test1',
        compact('message'));//コントローラーからブレード側に値を渡す
    }

    public function showComponent2()
    {
        return view('tests.component-test2');
    }
}
