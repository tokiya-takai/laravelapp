<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index() {
        $data = [
            ['name'=>'山田', 'mail'=>'yamada@com'],
            ['name'=>'田中', 'mail'=>'tanaka@com']
        ];
        return view('hello.index', ['data'=>$data]);
    }
}