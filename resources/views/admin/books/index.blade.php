@extends('layouts.app')

@section('font-awesome')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('content')
    <section class="container mt-5">
        <a href="{{ route('admin.books.create') }}" class="btn btn-primary">
            + Add New Book
        </a>
        <h1>{{ $title }}</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Id </th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Autore</th>
                    <th scope="col">Prezzo</th>
                    <th scope="col">Genre</th>
                    <th scope="col">Casa editrice</th>
                    <th scope="col">Pagine</th>
                    <th scope="col">Edizione</th>
                    <th scope="col">Numero di serie</th>
                    <th scope="col">Numero di copie</th>
                    <th scope="col">Icons</th>
          

                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr>
                        <td scope="col">{{ $book->id }}</td>
                        <td scope="col">{{ $book->title }}</td>
                        <td scope="col">{{ $book->author }}</td>
                        <td scope="col">{{ $book->price }} </td>
                        <td scope="col">{{ $book->getGenre() }}</td>
                        <td scope="col">{{ $book->editor_house }}</td>
                        <td scope="col">{{ $book->pages }}</td>
                        <td scope="col">{{ $book->edition }}</td>
                        <td scope="col">{{ $book->series_number }}</td>
                        <td scope="col">{{ $book->copies_number }}</td>

                        <td class="d-flex">
                            <a href=" {{ route('admin.books.show', $book) }}" class="mx-1">
                                <i class="fa-solid fa-eye"></i>
                            </a>

                            <a href=" {{ route('admin.books.edit', $book) }}" class="mx-1">
                                <i class="fa-solid fa-pencil"></i>
                            </a>

                            <a href="#" data-bs-toggle="modal" data-bs-target="#delete-modal-{{$book->id}}" class="mx-1">
                                <i class="fa-solid fa-trash text-danger"></i>  
                              </a>
                              <div class="modal fade" id="delete-modal-{{$book->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h1 class="modal-title fs-5" id="exampleModalLabel">Elimina libro</h1>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                      Sei sicuro di voler eliminare il libro "{{$book->title}}"?
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                                      
                                      <form action="{{route('admin.books.destroy', $book)}}" method="POST" class="mx-1">
                                      @csrf
                                      @method('DELETE')
                                      <button class="btn btn-danger">
                                      Conferma
                                      </button>
                                      </form>
                                    </div>
                                  </div>
                                </div>
                              </div>
                
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection
