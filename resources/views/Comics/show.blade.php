@extends('layouts.main')

@section('page-content')
<div class="container">
    <h1>{{$comic->title}}</h1>
    <a href="{{ route('comics.index') }}" class="btn btn-dark">Back</a>
    <a href="{{ route('comics.create') }}" class="btn btn-success">Aggiungi un fumetto</a>
    <div class="mt-3">
        <ul>
            <li>{{$comic->series}}</li>
            <li>{{$comic->type}}</li>
            <li>Prezzo:{{$comic->price}}€</li>
            <li>{{$comic->sale_date}}</li>
        </ul>
        <h3>Descrizione:</h3>
        <p>{{$comic->description}}</p>

    </div>
</div>
@endsection
