@extends('layouts.main')

@section('page-content')
    
    <div class="container">
        <h1>Modifica il fumetto: {{$comic->title}}</h1>
        <a href="{{ route('comics.index') }}" class="btn btn-dark">Back</a>

        <form action="{{ route('comics.update', $comic) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="mb-3">
                <label for="title" class="form-label"><strong>Titolo*</strong></label>
                <input type="text" class="form-control" id="title" name="title" maxlength="50" required placeholder="aggiungi titolo fumetto" value="{{$comic->title}}" >
            </div>
            <div class="mb-3">
                <label for="type" class="form-label"><strong>Tipo*</strong></label>
                <select class="form-select" id="type" name="type">
                    <option value="comic-book" {{$comic->type === 'comic book' ? 'selected' : null }}>comic book</option>
                    <option value="graphic-novel" {{$comic->type === 'graphic novel' ? 'selected' : null}}>graphic novel</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="series" class="form-label"><strong>Serie*</strong></label>
                <input type="text" class="form-control" name="series" id="series" maxlength="20" required placeholder="aggiungi la serie" value="{{$comic->series}}">
            </div>
            <div class=" mb-3">
                <label for="price" class="form-label"><strong>Prezzo*</strong></label>
                <input type="number" class="form-control"  id="price" name="price" required step="any" min="1.99" max="999.99" value="{{$comic->price}}">
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label"><strong>Data Vendita*</strong></label>
                <input type="date" class="form-control" name="sale_date" id="sale_date" required value="{{$comic->sale_date}}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label"><strong>Descrizione*</strong></label>
                <textarea name="description" id="desciption" class="form-control" cols="30" rows="5">{{$comic->description}}</textarea>
            </div>
            <button type="submit" class="btn btn-success">Salva</button>
            <button type="reset" class="btn btn-danger">Reset</button>
        </form>
    </div>





@endsection