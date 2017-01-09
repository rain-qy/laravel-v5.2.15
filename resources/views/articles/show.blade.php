@extends('public')
@section('content')
    <h2>{{ $article->title }}</h2>
    <article>
        <div class="body">{{ $article->content }}</div>
    </article>
    <div class="form-group">
        <label>发表于： </label>
        {{ $article->published_at }}
    </div>
    <div class="form-group">
        <label>创建于于： </label>
        {{ $article->created_at->diffForHumans() }}
    </div>
@stop