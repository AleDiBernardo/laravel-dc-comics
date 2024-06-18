<!-- resources/views/comics/edit.blade.php -->
@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card mt-4">
                <div class="card-header text-center">
                    <h1>Edit {{ $comic->title }}</h1>
                </div>
                <div class="card-body p-5">
                    <form action="{{ route('comics.update', $comic->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-4 d-flex justify-content-center">
                            <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}" class="img-fluid rounded w-50">
                        </div>
                        <div class="form-group">
                            <label for="title">Title:</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $comic->title) }}" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Description:</label>
                            <textarea class="form-control" id="description" name="description" rows="3" required>{{ old('description', $comic->description) }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="thumb">Thumb URL:</label>
                            <input type="text" class="form-control" id="thumb" name="thumb" value="{{ old('thumb', $comic->thumb) }}" required>
                        </div>
                        <div class="form-group">
                            <label for="price">Price:</label>
                            <input type="text" class="form-control" id="price" name="price" value="{{ old('price', $comic->price) }}" required>
                        </div>
                        <div class="form-group">
                            <label for="series">Series:</label>
                            <input type="text" class="form-control" id="series" name="series" value="{{ old('series', $comic->series) }}" required>
                        </div>
                        <div class="form-group">
                            <label for="sale_date">Sale Date:</label>
                            <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{ old('sale_date', $comic->sale_date) }}" required>
                        </div>
                        <div class="form-group">
                            <label for="type">Type:</label>
                            <input type="text" class="form-control" id="type" name="type" value="{{ old('type', $comic->type) }}" required>
                        </div>
                        <div class="form-group text-right">
                            <button type="submit" class="btn btn-success">Save Changes</button>
                            <a href="{{ route('comics.index') }}" class="btn btn-secondary">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
