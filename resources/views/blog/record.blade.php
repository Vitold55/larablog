@extends('layouts.default')

@section('content')

    <h1>{{ $record->title }}</h1>
    <div class="content">
        <img src="/uploads/blog/medium/{{ $record->image }}" style="float: left; margin: 0 20px 20px 0;">
        <p>{!! $record->body !!}</p>
    </div>

@stop