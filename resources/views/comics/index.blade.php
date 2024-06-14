@extends('layouts.app')

@section('content')
    <div class="container d-flex flex-column align-items-center justify-content-center pt-5">
        <h1 class="mb-5">Comics</h1>
        <div class="row g-5">
            @foreach ($comicsList as $curComic)
                <div class="col">
                    <div class="card h-100" style="width: 18rem;">
                        <img src="{{$curComic->thumb}}" class="card-img-top" alt="...">
                        <div class="card-body d-flex flex-column justify-content-between">
                          <div class="card-title">{{ $curComic->title }}</div>
                          <div>{{ $curComic->series }}</div>
                          <div>{{ $curComic->type }}</div>
                          <div>{{ $curComic->price }}</div>
                          <div>{{ $curComic->sale_date }}</div>

                          <a href="{{ route('comics.show', ['comic' => $curComic->id]) }}" class="btn btn-primary">Scopri di più</a>
                        </div>
                      </div>
                </div>
           @endforeach
        </div>
    </div>
@endsection