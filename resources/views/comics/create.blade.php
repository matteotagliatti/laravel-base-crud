@extends('layouts.default')

@section('title', 'Create')

@section('content')
    <h1>Create Comics</h1>
    <form action="{{ route('comics.store') }}" method="post">
        @csrf

        <label for="title">Title</label>
        <input type="text" name="title">

        <label for="description">Description</label>
        <textarea name="description"></textarea>

        <label for="thumb">Thumb</label>
        <input type="text" name="thumb">

        <label for="price">Price</label>
        <input type="number" name="price" step="0.1" min="0">

        <label for="series">Series</label>
        <input type="text" name="series">

        <label for="sale_date">Sale Date</label>
        <input type="text" name="sale_date">

        <label for="type">Type</label>
        <input type="text" name="type">

        <input type="submit" value="Add">
    </form>
@endsection
