<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class HelloMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        //Controllerのアクションのレスポンス
        $response = $next($request);
        //レスポンスからcontentメソッドでcontent部分を取得
        $content = $response->content();
        //<middleware>(改行を除く全ての文字)</middleware>の正規表現
        $pattern = '/<middleware>(.*)<\/middleware>/i';
        $replace = '<a href="http://$1">$1</a>';
        //content内からpatternとマッチした部分をreplaceに置換
        $content = preg_replace($pattern, $replace, $content);
        $response->setContent($content);
        return $response;
    }
}
