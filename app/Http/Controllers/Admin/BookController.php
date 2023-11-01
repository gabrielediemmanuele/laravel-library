<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

/* 
 * Facades */
use Illuminate\Support\Facades\Validator;

/* 
 * Models */
use App\Models\Book;
use App\Models\Genre;

class BookController extends Controller
{
    /**
     *todo Display a listing of the resource.
     */
    public function index()
    {
        /* Invio alla route i dati: titolo e tutti i libri presi dal model (migration + seeder) */
        $title = "Books";
        $books = Book::all();
        return view('admin.books.index', compact('books', 'title'));
    }

    /**
     *todo Show the form for creating a new resource.
     */
    public function create()
    {
        $genres = Genre::all();
        return view('admin.books.create', compact('genres'));
    }

    /**
     *todo Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        /* validation call */
        $data = $this->validation($request->all());
        /* creo un nuovo libro */
        $book = new Book();
        /* lo riempo di informazioni */
        $book->fill($data);
        /* le salvo nel database */
        $book->save();

        /* 
        ! fill dentro model  
        */
        return redirect()->route('admin.books.show', $book);
    }

    /**
     *todo Display the specified resource.
     */
    public function show(Book $book)
    {
        $title = "Book";
        return view('admin.books.show', compact('book', 'title'));
    }

    /**
     *todo Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        $genres = Genre::all();
        return view('admin.books.edit', compact('book', 'genres'));
    }

    /**
     *todo Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        /* Validator -> riga 134 */
        $data = $this->validation($request->all());
        $book->update($data);
        return redirect()->route('admin.books.show', $book);
    }

    /**
     *todo Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('admin.books.index');
    }

    /*
     * VALIDATOR sia per Update che per Store
     */
    private function validation($data)
    {
        $validator = Validator::make(
            $data,
            [
                'title' => 'required|string|max:50',
                'author' => 'required',
                'price' => 'required',
                'genre' => 'required|string',
                'editor_house' => 'required|string|max:30',
                'pages' => 'required',
                'edition' => 'required',
                'series_number' => 'required',
                'copies_number' => 'required',
                'genre_id' => 'required',
            ],
            [
                'title.required' => 'Title is required',
                'title.string' => 'Title need to be a string',
                'title.max' => 'Title is max 50 char',

                'author.required' => 'Author is required',

                'price.required' => 'Price is required',

                'genre.required' => 'Genre is required',
                'genre.string' => 'Genre must be a string',

                'editor_house.required' => 'Editor house is required',
                'editor_house.string' => 'Editor house must be a string',
                'editor_house.max' => 'Editor max 30 char',

                'pages.required' => 'Pages is required',

                'edition.required' => 'edition is required',

                'series_number.required' => 'Series number is required',

                'copies_number.required' => 'Copies number is required',

                'genre_id.required' => 'Type is required'
            ],
        )->validate();
        return $validator;
    }
}