@extends('public')
@section('content')
    <h1>编辑文章</h1>
    {!! Form::model($article,['method'=>'PATCH','url'=>'/articles/'.$article->id]) !!}
    <div class="form-group">
        {!! Form::label('title','标题：') !!}
        {!! Form::text('title',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('content','正文：') !!}
        {!! Form::textarea('content',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('published_at','发表时间：') !!}
        {!! Form::input('date','published_at',date('Y-m-d'),['class'=>'form-control']) !!}
        {{--            {!! Form::input('datetime','published_at',date('Y-m-d H:i:s'),['class'=>'form-control']) !!}--}}
    </div>
    {!! Form::submit('更新文章',['class'=>'btn btn-primary form-control']) !!}
    {!! Form::close() !!}
    @include('errors.field')
@stop