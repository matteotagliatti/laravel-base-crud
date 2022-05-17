@extends('layouts.default')

@section('title', 'Detail')

@section('content')
    <h1>Dettaglio</h1>
    <div class="grid">
        <div class="item">
            <a href="{{ $comic->id }}">
                <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                <div class="info">
                    <h3>{{ $comic->title }} </h3>
                    <p>{{ $comic->orice }}</p>
                    <p>{{ $comic->series }}</p>
                    <p>{{ $comic->sale_date }}</p>
                    <p>{{ $comic->type }}</p>
                </div>

            </a>
        </div>
    </div>
@endsection
