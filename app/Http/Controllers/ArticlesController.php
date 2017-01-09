<?php

namespace App\Http\Controllers;

use App\Article;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;

class ArticlesController extends Controller
{
    //主页
    public function index(){
//        $article = Article::all();
//        $article = Article::latest()->where('published_at','<=',Carbon::now())->get();
        $article = Article::latest()->published()->get();
        $userinfo = \Auth::user();
        return view('articles.index',compact('article','userinfo'));
    }

    //展示数据
    public function show($id){
        $article = Article::findOrFail($id);
        return view('articles.show',compact('article'));
    }

    //测试
    public function tt($id){
        $article = Article::findOrFail($id);
        echo $article->created_at->diffForHumans();
        dd($article->created_at->year);
    }

    //添加数据
    public function create(){
        return view('articles.create');
    }

    //表单提交 (验证字段：Requests\CreateArticleRequest)
    public function store(Requests\CreateArticleRequest $request){
        //获取某项值
//        $title = $request->get('title');
//        dd($title);
        //数据入库
        $input = $request->all();
//        $input['publisheda_at'] = Carbon::now();
        Article::create($input);
        return redirect('/articles');
    }

    //编辑数据页面
    public function edit($id){
        $article = Article::findOrFail($id);
        return view('/articles.edit',compact('article'));
    }

    //编辑页面接口
    public function update(Requests\CreateArticleRequest $request,$id){
        $article = Article::findOrFail($id);
        $article->update($request->all());
        return redirect('/articles');
    }
}
