<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

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
}
