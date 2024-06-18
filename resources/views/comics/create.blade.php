@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1>Create Comic</h1>
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" id="description" name="description" rows="3" required>{{ old('description') }}</textarea>
        </div>
        <div class="form-group">
            <label for="thumb">Thumb URL:</label>
            <input type="text" class="form-control" id="thumb" name="thumb" value="https://picsum.photos/200/300" required>
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="text" class="form-control" id="price" name="price" value="{{ old('price') }}" required>
        </div>
        <div class="form-group">
            <label for="series">Series:</label>
            <input type="text" class="form-control" id="series" name="series" value="{{ old('series') }}" required>
        </div>
        <div class="form-group">
            <label for="sale_date">Sale Date:</label>
            <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{ old('sale_date') }}" required>
        </div>
        <div class="form-group">
            <label for="type">Type:</label>
            <input type="text" class="form-control" id="type" name="type" value="{{ old('type') }}" required>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Create Comic</button>
        </div>
    </form>
</div>
@endsection
