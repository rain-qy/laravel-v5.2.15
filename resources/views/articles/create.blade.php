@extends('public')
@section('content')
    <h1>撰写新文章</h1>
    {!! Form::open(['url'=>'/articles/store']) !!}
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
    {!! Form::submit('发表文章',['class'=>'btn btn-primary form-control']) !!}
    {!! Form::close() !!}
    @include('errors.field')
@stop