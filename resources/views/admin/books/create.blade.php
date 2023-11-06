@extends('layouts.app')


@section('content')
    <div class="container">
        {{-- rotta per l'index.blade (tabella) --}}
        <a href="{{ route('admin.books.index') }}" class="btn btn-primary mt-3 mb-4">
            Torna a Books
        </a>

        <h1 class="text-primary mb-3">Create a new Book</h1>

        {{-- ! form con metodo post che si collega alla funzione store di comicsController --}}
        <form class="row g-3" action="{{ route('admin.books.store') }}" method="POST">
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
                <label for="editor_house" class="form-label">Casa Editrice</label>
                <input type="text" id="editor_house" name="editor_house" class="form-control">
            </div>

            <div class="col-3" class="form-label">
                <label for="pages">Pagine</label>
                <input type="text" id="pages" name="pages" class="form-control">
            </div>

            <div class="col-3">
                <label for="edition" class="form-label">Edizione</label>
                <input type="number" id="edition" name="edition" class="form-control">
            </div>

            <label class="form-label">Formati</label>

            <div class="form-check">
                @foreach ($formats as $format)
                    <input
                    type="checkbox"
                    id="format-{{ $format->id }}"
                    value="{{ $format->id }}"
                    name="formats[]"
                    class="form-check-control"
                    @if (in_array($format->id, old('formats', []))) checked @endif
                    >
                    <label for="format-{{ $format->id }}">
                        {{ $format->label }}
                    </label>
                    <br>
                @endforeach
            </div>
            {{-- @error('formats')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror --}}

            <div class="col-3">
                <label for="series_number" class="form-label">Numero di serie</label>
                <input type="text" id="series_number" name="series_number" class="form-control">
            </div>

            {{-- <div class="col-12 my-4">
                <label for="genre_id" class="form-label ">Tipo</label>
                <select name="genre_id" id="genre_id" class="@error('genre_id') is-invalid @enderror">
                    <option value="100000">Non categorizzato</option>
                    @foreach ($genres as $genre)
                        <option value="{{ $genre->id }}" @if (old('genre_id') == $genre->id) selected @endif>
                            {{ $genre->name }}</option>
                    @endforeach
                </select>
            </div> --}}

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
