<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index(Request $request) {
        return view('hello.index', ['msg'=>'フォームを入力：']);
    }

    public function post(Request $request)
    {
        $validate_rule = [
            'name' => 'required',//入力必須
            'mail' => 'email',//mail形式
            'age' => 'numeric|between:0, 150'//数値であり、0~150の範囲
        ];
        $this->validate($request, $validate_rule);//validateメソッドは、自動で処理をし、
        //不正確な場合は残りの処理(以下のreturn)を実行せずにフォームページを表示するレスポンスが生成される。
        return view('hello.index', ['msg'=>'正しく入力されました!']);
    }
}