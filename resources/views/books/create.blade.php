@extends('layouts.app')


@section('main-content')
    <div class="container">
    {{-- rotta per l'index.blade (tabella) --}}
        <a href="{{ route('books.index')}}" class="btn btn-primary mt-3 mb-4"> 
           Torna a Books
        </a>

        <h1 class="text-primary mb-3">Create a new Book</h1>

        {{--! form con metodo post che si collega alla funzione store di comicsController --}}
        <form class="row g-3" action="{{ route('books.store') }}" method="POST" >
            @csrf 
            {{-- for visualize correct the form use @csrf protect from fake dates --}}
            <div class="col-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" id="title" name="title" class="form-control">
            </div>

            <div class="col-3">
                <label for="author" class="form-label">Autore</label>
                <input type="text" id="author" name="author" class="form-control">
            </div>

            <div class="col-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="text" id="price" name="price" class="form-control">
            </div>

            <div class="col-3">
                <label for="genre" class="form-label">Genere</label>
                <input type="text" id="genre" name="genre" class="form-control">
            </div>

            <div class="col-3">
                <label for="editor_house" class="form-label">Casa Editrice</label>
                <input type="text" id="editor_house" name="editor_house" class="form-control">
            </div>

            <div class="col-3" class="form-label">
                <label for="pages">Pagine</label>
                <input type="number" id="price" name="price" class="form-control">
            </div>

            <div class="col-3">
                <label for="edition" class="form-label">Edizione</label>
                <input type="number" id="edition" name="edition" class="form-control">
            </div>

            <div class="col-3">
                <label for="series_number" class="form-label">Numero di serie</label>
                <input type="number" id="series_number" name="series_number" class="form-control">
            </div>

            <div class="col-12">
                <label for="copies_number" class="form-label">Numero copie</label>
                <input type="number" id="copies_number" name="copies_number" class="form-control">
            </div>
            {{-- bottone per caricare il libro  --}}
            <div class="col-3">
                <button class="btn btn-primary">+ Crea Libro</button>
            </div>
        </form>
    </div>
@endsection
