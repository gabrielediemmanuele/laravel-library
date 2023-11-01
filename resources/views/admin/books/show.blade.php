@extends('layouts.app')

@section('content')
<div class="container"> 
    <div class="card mt-3" style="width: 20rem;">
        <div class="card-header">
        <div><strong>ID: {{ $book->id}} </strong></div>
        <div><strong>Title: {{ $book->title}}</strong></div>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><strong>Autore: </strong>{{$book->author}}</li>
            <li class="list-group-item"><strong>Prezzo: $ </strong>{{$book->price}}</li>
            <li class="list-group-item"><strong>Genere: </strong>{{$book->getGenre()}}</li>
            <li class="list-group-item"><strong>Casa Editrice: </strong>{{$book->editor_house}}</li>
            <li class="list-group-item"><strong>Pagina: </strong>{{$book->pages}}</li>
            <li class="list-group-item"><strong>Edizione: </strong>{{$book->edition}}</li>
            <li class="list-group-item"><strong>Numero di serie: </strong>{{$book->series_number}}</li>
            <li class="list-group-item"><strong>Numero di Copie: </strong>{{$book->copies_number}}</li>
            <li class="list-group-item"><strong>In prestito: </strong>
                @forelse ($book->loaners as $loaner)
                <div><strong>Nome: </strong>{{ $loaner->name }}</div>
                <div><strong>Cognome: </strong>{{ $loaner->surname }}</div>
                <div><strong>Cell: </strong>{{ $loaner->phone_number }}</div>
                @unless($loop->last)- @else . @endunless
                 @empty
                Non è in prestito.
                @endforelse
            </li>
        </ul>
    </div>
    <a class="btn btn-primary ml-auto mt-3" href="{{ route('admin.books.index') }}">Torna indietro</a>
</div>
@endsection