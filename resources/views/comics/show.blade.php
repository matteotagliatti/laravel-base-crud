@extends('layouts.default')

@section('title', $comic->title)

@section('content')
    <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
    <div class="info">
        <h1>{{ $comic->title }} </h1>
        <p>{{ $comic->price }}</p>
        <p>{{ $comic->series }}</p>
        <p>{{ $comic->sale_date }}</p>
        <p>{{ $comic->type }}</p>
    </div>
@endsection
