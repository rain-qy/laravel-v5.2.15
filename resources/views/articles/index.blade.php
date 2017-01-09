@extends('public')
@section('content')
    <h1>文章列表@if($userinfo)：{{ $userinfo->name }}@endif</h1>
    <div><a href="{{ url('articles/create') }}">发表文章</a></div>
    @foreach($article as $arv)
        {{--<h2><a href="/articles/{{$arv->id}}" >{{ $arv->title }}</a></h2>--}}
{{--        <h2><a href="{{ action('ArticlesController@show',[$arv->id]) }}" >{{ $arv->title }}</a></h2>--}}
        <h2>
            <a href="{{ url('articles',$arv->id) }}" >{{ $arv->title }}</a>
            <a href="{{ url('articles/'.$arv->id.'/edit') }}" >编辑</a>
        </h2>
        <article>
            <div class="body">{{ $arv->content }}</div>
        </article>
    @endforeach
@stop