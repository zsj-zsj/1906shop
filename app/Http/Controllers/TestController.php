<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\DB;

use MongoDB\Client as Mongo;

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

    public function mongodb(){  
        $host='192.168.118.190';
        $db='1906_mongodb';
        $table='users';
        $mongo= new Mongo("mongodb://{$host}:27017");
        
        $collection = $mongo->$db->$table;
        $result = $collection->find()->toArray();

        echo "<pre>";print_r($result);echo "</pre>";
    }

    public function mongodbins(){
        $host='192.168.118.190';
        $db='1906_mongodb';
        $table='users';
        $mongo= new Mongo("mongodb://{$host}:27017");
        
        $collection = $mongo->$db->$table;
        $data=[
            'name'=>'aaa',
            'age'=>'78'
        ];
        $result = $collection->insertOne($data);
        print_r($result->getInsertedId());
    }

    public function mongodbdel(){
        $host='192.168.118.190';
        $db='1906_mongodb';
        $table='users';
        $mongo= new Mongo("mongodb://{$host}:27017");
        $collection = $mongo->$db->$table;

        $data=[
            'name'=>'aaa',
            'age'=>'78'
        ];
        $result = $collection->deleteOne($data);
        print_r($result->getDeletedCount());
    }

    public function mongodbupd(){
        $host='192.168.118.190';
        $db='1906_mongodb';
        $table='users';
        $mongo= new Mongo("mongodb://{$host}:27017");
        $collection = $mongo->$db->$table;

        $result = $collection->updateOne(
            ['name'=>'aaa'],   //相当于where条件
            ['$set'=>['age'=>'99999']] //修改的数据
        );
        print_r($result);
    }
}
