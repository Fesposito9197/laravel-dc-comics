@extends('layouts.main')

@section('page-content')
    <div class="container">
        <h1>Lista Fumetti</h1>
        <a href="{{ route('comics.create') }}" class="btn btn-success">Aggiungi un fumetto</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Serie</th>
                    <th scope="col">Data Vendita</th>
                    <th scope="col">Prezzo</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Azioni</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
              @foreach ($comics as $comic)
              <tr>
                  <th scope="row">{{$comic->id}}</th>
                  <td>{{$comic->title}}</td>
                  <td>{{$comic->series}}</td>
                  <td>{{$comic->sale_date}}</td>
                  <td>{{$comic->price}}€</td>
                  <td>{{$comic->type}}</td>
                    <td class="dropdown d-flex">
                        <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Azioni
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{route('comics.show' , $comic->id)}}" class="dropdown-item" >info</a>
                            </li>
                            <li>
                                <a href="{{route('comics.edit',$comic)}}" class="dropdown-item">modifica</a>
                            </li>
                        </ul>
                        <button type="button" class="btn btn-danger ms-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                           Elimina
                        </button>

                    </td>
              </tr>
              @endforeach
            </tbody>
        </table>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Elimina Fumetto</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  Sicuro di voler cancellare il Fumetto??
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <form action="{{route('comics.destroy', $comic)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger ms-2">Si! Elimina</button>
                    </form>
                </div>
              </div>
            </div>
        </div>
    </div>
@endsection          


