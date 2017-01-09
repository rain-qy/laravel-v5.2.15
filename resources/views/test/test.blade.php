@extends('public')
@section('content')
{{--<div class="title">Hello World</div>--}}
{{--<div class="title">{{ $view_o }}</div>--}}
{{--<div class="title">{{ $view_t }}</div>--}}
<div class="title">{{ $one }}</div>
<div class="title">{{ $two }}</div>
@if($one=='one')
    yes
    @else
    no
@endif
@stop

@if(count($arr)>0)
<h3>Arr List</h3>
<ul>
    @foreach($arr as $arr_v)
        <li>{{ $arr_v }}</li>
    @endforeach
</ul>
@endif