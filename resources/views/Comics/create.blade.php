@extends('layouts.main')

@section('page-content')
    
    <div class="container">
        <h1>Aggiungi un nuovo fumetto</h1>

        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            
            
            <div class="mb-3">
                <label for="title" class="form-label"><strong>Titolo*</strong></label>
                <input type="text" class="form-control" id="title" name="title" maxlength="50" required placeholder="aggiungi titolo fumetto" >
            </div>
            <div class="mb-3">
                <label for="type" class="form-label"><strong>Tipo*</strong></label>
                <select class="form-select" id="type" name="type">
                    <option value="comic-book">comic book</option>
                    <option value="graphic-novel">graphic novel</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="series" class="form-label"><strong>Serie*</strong></label>
                <input type="text" class="form-control" name="series" id="series" maxlength="20" required placeholder="agggiungi la serie">
            </div>
            <div class=" mb-3">
                <label for="price" class="form-label"><strong>Prezzo*</strong></label>
                <input type="number" class="form-control"  id="price" name="price" required min="10" max="900">
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label"><strong>Data Vendita*</strong></label>
                <input type="date" class="form-control" name="sale_date" id="sale_date" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label"><strong>Descrizione*</strong></label>
                <textarea name="description" id="desciption" class="form-control" cols="30" rows="5"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Salva</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
        </form>
    </div>





@endsection
               
                