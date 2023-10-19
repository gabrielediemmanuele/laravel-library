@extends('layouts.app')

@section('main-content')
  <section class="container mt-5 mb-5">
    <h1 class="mb-2">{{$title}}</h1>
    <div class="row g-2">
        @foreach ($books as $book)
        <div class="card mx-2 my-2 mt-2" style="width: 18rem;">
            <div class="card-header">
                Libri 📚
              </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><strong>Titolo: </strong>{{$book->title}}</li>
              <li class="list-group-item"><strong>Autore: </strong>{{$book->author}}</li>
              <li class="list-group-item"><strong>Prezzo: </strong>$ {{$book->price}}</li>
              <li class="list-group-item"><strong>Genere: </strong>{{$book->genre}}</li>
              <li class="list-group-item"><strong>Casa Editrice: </strong>{{$book->editor_house}}</li>
              <li class="list-group-item"><strong>Pagine: </strong>{{$book->pages}}</li>
              <li class="list-group-item"><strong>Edizione: °</strong>{{$book->edition}}</li>
              <li class="list-group-item"><strong>Numero Seriale: </strong>{{$book->series_number}}</li>
              <li class="list-group-item"><strong>Copie: </strong>{{$book->copies_number}} .cad</li>
              
            </ul>
        </div>
        @endforeach
    </div>
    
  </section>
@endsection