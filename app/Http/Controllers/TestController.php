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
        $list=DB::table('users')->get()->toArray();
        print_r($list);
    }

    public function mysql2(){
        $data=[
            'name'=>'345',
            'email'=>'asd@qq.com',
        ];
        $res=DB::table('users')->insert($data);
        print_r($res);
    }
}
