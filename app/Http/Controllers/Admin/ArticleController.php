<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Article;

class ArticleController extends Controller
{
    //
    public function index()
    {
    	return view('admin/article/index')->withArticles(Article::all());
    }

    public function create()
    {
    	return view('admin/article/create');
    }

    public function store(Request $request)
    {
    	$this->validate($request,[
    		'title' => 'required|unique:articles|max:255',
    		'body' => 'required',
    		]);
    	$article = new Article;
    	$article->title = $request->get('title');
    	$article->body = $request->get('body');
    	$article->user_id = $request->user()->id;//?????获取当前Auth系统中注册的用户，并将其id赋予article的user_id属性

    	if ($article->save()){
    		return redirect('admin/article');
    	}else {
    		return redirect()->back()->withInput()->withErrors('保存失败！');
    	}

    }
}
