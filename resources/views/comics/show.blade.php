@extends('layouts.app')


@section('content')
<div class="container">

    <h1>Descrizione:</h1>
    <p>{{ $comic->description }}</p>
</div>
@endsection