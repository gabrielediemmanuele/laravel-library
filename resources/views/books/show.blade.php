@extends('layouts.app')

@section('main-content')
<div class="container"> <h2>Dati del libro: <span class="show">{{ $books->title }}</span>
    </h2> <p class="card-text"> <span class="show">Descrizione: </span>
    <span class="des-show">{{ $books->description }}</span> </p> <p class="card-text des-show">
        <span class="show">Author: </span>
        <span>{{ $books->author }}</span>
        </p>
        <p class="card-text des-show"> <span class="show">Genre: </span> <span>{{ $books->genre }}
    </span>
    </p> <p class="card-text des-show"> <span class="show">Editor House: </span>
    <span>{{ $books->editor_house }}</span>
    </p>
    <p class="card-text des-show">
        <span class="show">Pages: </span>
        <span>{{ $books->pages }}</span>
    </p>
    <p class="card-text des-show">
    <span class="show">Edition: </span>
    <span>{{ $books->edition }}</span>
    </p> <p class="card-text des-show"> <span class="show">Series Number: </span>
    <span>{{ $books->series_number }}</span>
    </p>
    <p class="card-text des-show">
        <span class="show">Copies Number: </span>
        <span>{{ $books->copies_number }}</span>
    </p>
    <a class="btn btn-primary ml-auto" href="{{ route('books.index', $books) }}">Torna indietro</a>
</div>
@endsection