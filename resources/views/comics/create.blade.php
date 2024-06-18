@extends('layouts.app')


@section('content')
    <h1>Create</h1>
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        <div>
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" value="{{ old('title') }}">
        </div>
        <div>
            <label for="description">Description:</label>
            <textarea id="description" name="description">{{ old('description') }}</textarea>
        </div>
        <div>
            <label for="thumb">Thumb URL:</label>
            <input type="text" id="thumb" name="thumb" value="https://picsum.photos/200/300">
        </div>
        <div>
            <label for="price">Price:</label>
            <input type="text" id="price" name="price" value="{{ old('price') }}">
        </div>
        <div>
            <label for="series">Series:</label>
            <input type="text" id="series" name="series" value="{{ old('series') }}">
        </div>
        <div>
            <label for="sale_date">Sale Date:</label>
            <input type="date" id="sale_date" name="sale_date" value="{{ old('sale_date') }}">
        </div>
        <div>
            <label for="type">Type:</label>
            <input type="text" id="type" name="type" value="{{ old('type') }}">
        </div>
        <div>
            <button type="submit">Create Comic</button>
        </div>
    </form>
@endsection