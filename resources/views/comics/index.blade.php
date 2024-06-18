@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4 text-center">Comics</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($comicsList as $comic)
        <div class="col">
            <div class="card h-100 shadow-sm p-2">
                <img src="{{ $comic->thumb }}" class="card-img-top img-fluid" alt="{{ $comic->title }}" style="height: 550px; object-fit: cover;">
                <div class="card-body d-flex flex-column justify-content-between">
                    <h5 class="card-title">{{ $comic->title }}</h5>
                    <p class="card-text">{{ $comic->series }}</p>
                    <p class="card-text"><strong>Type:</strong> {{ $comic->type }}</p>
                    <p class="card-text"><strong>Price:</strong> {{ $comic->price }}</p>
                    <p class="card-text"><strong>Sale Date:</strong> {{ $comic->sale_date }}</p>
                    <a href="{{ route('comics.show', ['comic' => $comic->id]) }}" class="btn btn-primary">Scopri di più</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
