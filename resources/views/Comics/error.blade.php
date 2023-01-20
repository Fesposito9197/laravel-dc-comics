@extends('layouts.main')

@section('page-content')
    
    <div class="container">
        
        
        <body>
            <div class="d-flex align-items-center justify-content-center vh-100">
                <div class="text-center">
                    <h1 class="display-1 fw-bold">ERROR</h1>
                    <p class="fs-3"> <span class="text-danger">NON PUOI LASCIARE CAMPI VUOTI</span></p>
                    <a href="{{ route('comics.create') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </body>
    
    </div>





@endsection
               