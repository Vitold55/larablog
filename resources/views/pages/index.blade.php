@extends('layouts.default')

@section('content')
    <h1>Malalalala</h1>

    @foreach($slides as $slide)
        <img src="/uploads/slides/small/{{ $slide->image }}">
    @endforeach
@stop