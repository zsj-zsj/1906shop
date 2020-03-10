<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function redis1(){
        $key='key';
        $val='hello world';
        $redis=Redis::set($key,$val);
        echo "set成功".$redis;
    }

    public function redis2(){
        $key='key';
        $redis=Redis::get($key);
        echo $redis;
    }

    public function mysql1(){
        $list=DB::table('reg')->first();
        print_r($list);
    }
}
