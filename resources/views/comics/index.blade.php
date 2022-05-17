@extends('layouts.default')

@section('title', 'Comics')

@section('content')
    <h1>Comics</h1>
    <div class="grid">
        @foreach ($comics as $comic)
            <div class="item">
                <a href="comics/{{ $comic->id }}">
                    <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                    <div class="info">
                        <h3>{{ $comic->title }} </h3>
                        <p>{{ $comic->price }}</p>
                        <p>{{ $comic->series }}</p>
                        <p>{{ $comic->sale_date }}</p>
                        <p>{{ $comic->type }}</p>
                    </div>

                </a>
            </div>
        @endforeach
    </div>
@endsection
