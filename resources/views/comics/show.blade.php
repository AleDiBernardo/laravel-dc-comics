<!-- resources/views/comics/show.blade.php -->
@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card mt-4">
                <div class="card-header text-center">
                    <h1>{{ $comic->title }}</h1>
                </div>
                <div class="card-body p-5 ">
                    <div class="mb-4 d-flex justify-content-center">
                        <img  class="w-50"src="{{ $comic->thumb }}" alt="{{ $comic->title }}" class="img-fluid rounded" style="width: 100%; height: auto;">
                    </div>
                    <div class="comic-details">
                        <h2>Details</h2>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><strong>Description:</strong> {{ $comic->description }}</li>
                            <li class="list-group-item"><strong>Price:</strong> {{ $comic->price }}</li>
                            <li class="list-group-item"><strong>Series:</strong> {{ $comic->series }}</li>
                            <li class="list-group-item"><strong>Sale Date:</strong> {{ $comic->sale_date }}</li>
                            <li class="list-group-item"><strong>Type:</strong> {{ $comic->type }}</li>
                        </ul>
                    </div>
                </div>
                <div class="card-footer text-right d-flex justify-content-between">
                    <a href="{{ route('comics.index') }}" class="btn btn-primary">Back</a>
                        <div class="d-flex gap-1">
    
                            <a href="{{ route('comics.edit',['comic'=>$comic->id])  }}" class="btn btn-success">Edit</a>
                            <form action="{{ route('comics.destroy', ['comic' => $comic->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this comic?')">Delete</button>
                            </form>
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
