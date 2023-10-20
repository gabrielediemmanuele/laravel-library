@extends('layouts.app')

@section('font-awesome')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('main-content')
    <section class="container mt-5">

        <h1>Book list</h1>



        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Autore</th>
                    <th scope="col">Prezzo</th>
                    <th scope="col">Genre</th>
                    <th scope="col">Casa editrice</th>
                    <th scope="col">Pagine</th>
                    <th scope="col">Edizione</th>
                    <th scope="col">Numero di serie</th>
                    <th scope="col">Numero di copie</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr>
                        <td scope="col">{{ $book->id }}</td>
                        <td scope="col">{{ $book->title }}</td>
                        <td scope="col">{{ $book->author }}</td>
                        <td scope="col">{{ $book->price }}</td>
                        <td scope="col">{{ $book->genre }}</td>
                        <td scope="col">{{ $book->editor_house }}</td>
                        <td scope="col">{{ $book->pages }}</td>
                        <td scope="col">{{ $book->edition }}</td>
                        <td scope="col">{{ $book->series_number }}</td>
                        <td scope="col">{{ $book->copies_number }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>



    </section>
@endsection
