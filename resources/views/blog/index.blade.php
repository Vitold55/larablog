@extends('layouts.default')

@section('content')

    <h1>Список публікацій в блозі</h1>

    @foreach($records as $item)
        <div class="row" style="margin: 15px 0;">
            <div class="col-md-2">
                <img src="/uploads/blog/small/{{ $item->image }}" />
            </div>
            <div class="col-md-10">
                <h2>{{ $item->title }}</h2>
                <div class="content">
                    {!! mb_substr(strip_tags($item->body), 0, 200) !!}...
                </div>
                <a href="/blog/{{ $item->slug }}">Читать больше</a>
            </div>
        </div>
    @endforeach

    @include('partials.pagination', ['pager' => $records])

@stop