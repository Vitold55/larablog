@extends('layouts.default')

@section('content')
    <h1>About us</h1>

    <div class="row">
        <div class="col-md-3">
            {!! $about->content !!}
        </div>
        <div class="col-md-9">
            <img src="{{ '/uploads/' . $about->image }}" />
        </div>
    </div>
@stop