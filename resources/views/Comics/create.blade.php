@extends('layouts.main')

@section('page-content')
    
    <div class="container">
        <h1>Aggiungi un nuovo fumetto</h1>
        <a href="{{ route('comics.index') }}" class="btn btn-dark">Back</a>

        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            
            
            <div class="mb-3">
                <label for="title" class="form-label"><strong>Titolo*</strong></label>
                <input type="text" class="form-control" id="title" @error('title')  @enderror name="title" maxlength="50" required placeholder="aggiungi titolo fumetto" value="{{old('title')}}">
                @error('title')
                    <div class="alert alert-danger mt-3">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="type" class="form-label"><strong>Tipo*</strong></label>
                <select class="form-select" @error('type')  @enderror id="type" name="type">
                    <option value="comic-book" {{old('type') === 'comic-book' ? 'selected' : null }}>comic book</option>
                    <option value="graphic-novel" {{old('type') === 'graphic-novel' ? 'selected' : null }}>graphic novel</option>
                </select>
                @error('type')
                    <div class="alert alert-danger mt-3">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="series" class="form-label"><strong>Serie*</strong></label>
                <input type="text" class="form-control" name="series" @error('series')  @enderror id="series" maxlength="20" required placeholder="aggiungi la serie" value="{{old('series')}}">
                @error('series')
                    <div class="alert alert-danger mt-3">{{ $message }}</div>
                @enderror
            </div>
            <div class=" mb-3">
                <label for="price" class="form-label"><strong>Prezzo*</strong></label>
                <input type="number" class="form-control" @error('price')  @enderror  id="price" name="price" required step="any" min="1.99" max="999.99" value="{{old('price')}}">
                @error('price')
                    <div class="alert alert-danger mt-3">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label"><strong>Data Vendita*</strong></label>
                <input type="date" class="form-control" @error('sale_date')  @enderror name="sale_date" id="sale_date" required value="{{old('sale_date')}}">
                @error('sale_date')
                    <div class="alert alert-danger mt-3">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label"><strong>Descrizione*</strong></label>
                <textarea name="description" id="desciption" @error('description')  @enderror class="form-control" cols="30" rows="5">{{old('description')}}</textarea>
                @error('description')
                    <div class="alert alert-danger mt-3">{{ $message }}</div>
                @enderror
            </div>
            
            <button type="submit" class="btn btn-success">Salva</button>
            <button type="reset" class="btn btn-danger">Reset</button>
        </form>
    </div>
@endsection





               
                