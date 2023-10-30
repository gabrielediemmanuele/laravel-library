@extends('layouts.app')


@section('content')
    <div class="container">
        {{-- rotta per l'index.blade (tabella) --}}
        <a href="{{ route('admin.books.index') }}" class="btn btn-primary mt-3 mb-4">
            Torna a Books
        </a>

        <h1 class="text-primary mb-3">Modifica Book</h1>

        {{-- ! form con metodo post che si collega alla funzione update di comicsController --}}
        <form class="row g-3" action="{{ route('admin.books.update', $book) }}" method="POST">
            @csrf
            @method('PUT')
            {{-- for visualize correct the form use @csrf protect from fake dates --}}
            <div class="col-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" id="title" name="title" class="form-control" value={{ $book->title }}>
            </div>

            <div class="col-3">
                <label for="author" class="form-label">Autore</label>
                <input type="text" id="author" name="author" class="form-control" value={{ $book->author }}>
            </div>

            <div class="col-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="text" id="price" name="price" class="form-control" value={{ $book->price }}>
            </div>

            {{-- <div class="col-3">
                <label for="genre" class="form-label">Genere</label>
                <input type="text" id="genre" name="genre" class="form-control" value={{ $book->genre }}>
            </div> --}}

            <div class="col-3">
                <label for="editor_house" class="form-label">Casa Editrice</label>
                <input type="text" id="editor_house" name="editor_house" class="form-control"
                    value={{ $book->editor_house }}>
            </div>

            <div class="col-3" class="form-label">
                <label for="pages">Pagine</label>
                <input type="text" id="pages" name="pages" class="form-control" value={{ $book->pages }}>
            </div>

            <div class="col-3">
                <label for="edition" class="form-label">Edizione</label>
                <input type="number" id="edition" name="edition" class="form-control" value={{ $book->edition }}>
            </div>

            <div class="col-3">
                <label for="series_number" class="form-label">Numero di serie</label>
                <input type="text" id="series_number" name="series_number" class="form-control"
                    value={{ $book->series_number }}>
            </div>

            <div class="col-12">
                <label for="copies_number" class="form-label">Numero copie</label>
                <input type="number" id="copies_number" name="copies_number" class="form-control"
                    value={{ $book->copies_number }}>
            </div>
            {{-- bottone per salvare la modifica del libro  --}}
            <div class="col-3">
                <button class="btn btn-primary">Salva Libro</button>
            </div>
        </form>
    </div>
@endsection
