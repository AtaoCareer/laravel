<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/test','TestController@index');

// Route::get('test',function(){
// 	return "test";
// });
// 
Route::any('show','TestController@show');


Route::auth();

//Route::get('/home', 'HomeController@index');
Route::get('/', 'HomeController@index');

Route::get('test', 'TestController@index');
//访问这个页面必须先登录
//若已经登录，则将http://homestead.app/admin指向App\Http\Controllers\Admin\HomeController的index方法。
//需要登录由middleware定义
// /admin由prefix定义
// Admin由namespace定义
// HomeController是实际的类名
Route::group(['middleware'=>'auth', 'namespace'=>'Admin', 'prefix'=>'admin'],function(){
	Route::get('/', 'HomeController@index');
	//Route::get('article', 'ArticleController@index');
	Route::resource('article','ArticleController');
	
});

Route::get('cookie', 'TestController@cook');
Route::get('cook1', 'TestController@cook1');


Route::get('testajax', function(){
	return view('ajaxs.test');
});

Route::get('getA','TestController@getA');

Route::get('getB', function (){
   return view('ajaxs.cainiao'); 
});

/*
测试vue
 */
Route::get('testVue', 'VueController@index');
