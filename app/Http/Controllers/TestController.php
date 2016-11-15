<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Contracts\TestContract;

use App\Http\Requests;

use App\Worker;//命名空间的问题 一定得写上用了东西的地址

use App\Jbsq;
use function GuzzleHttp\json_decode;
use Illuminate\Support\Facades\Schema;
use TestClass;

class TestController extends Controller
{
    //
    public $test;

    public function __construct(TestContract $test)
    {
        $this->test = $test;
    }

    public function index()
    {
        // $this->test->callMe('TestController');
        TestClass::doSth();
    }

    public function index1()
    {
    	return view('test.index');
    }

    public function show(Request $request)
    {

    	$number = $request->get('title');
    	//echo $number;
    	// $result = Worker::where('yuangongbianhao',$number)->first();
    	//echo $result->nickname;
    	return view('test.show')->withWorker(Worker::where('yuangongbianhao',$number)->first());

    }
    
    public function test()
    {
//         $tests = Jbsq::where('pingjiaren', "张超01")->count();
//         //foreach ($tests as $test)
//         //{
//             echo $tests;
//         //}
        //基本插入
//         $test = new Jbsq;
//         $test->username = "2B";
//         $test->save();
        //基本更新
//         $test = Jbsq::where('username', '2B')->first();
//         $test->username = '3B';
//         $test->save();
        //就是一句话创建一条记录
            //$test = Jbsq::create(['yinhangka' => 111111]);
        //删除模型
            $test = Jbsq::where('username', '安全审计员')->delete();
        //直接通过主键来删除模型
        //在数据表中创建一个字段
//         Schema::table('workers', function ($table){
//             $table->softDeletes();
//         });
            
        
    }

    public function cook()
    {
        $name = 'huangtao';
        setcookie('username', $name, time()+60*60*24*30);
        //return redirect()->action('TestController@cook1');
        return redirect('cook1');
    }

    public function cook1()
    {
        $text = $_COOKIE['username'];
        echo "$text";
    }
    
    public function getA()
    {
        echo "<p id='pp' onclick='jinggao()'>测试</p>";
    }
}
