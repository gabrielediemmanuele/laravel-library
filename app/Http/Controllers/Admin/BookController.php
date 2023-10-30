<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

/* 
mi aggancio al model  Book  */
use App\Models\Book;
use App\Models\Genre;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * return \Illuminate\Http\Response
     */
    public function index()
    {

        /* Invio alla route i dati: titolo e tutti i libri presi dal model (migration + seeder) */

        $title = "Books";
        $books = Book::all();
        return view('admin.books.index', compact('books', 'title'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genres = Genre::all();
        return view('admin.books.create', compact('genres'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* creo un nuovo libro */
        $book = new Book();

        $data = $request->all();

        /* lo riempo di informazioni */
        $book->fill($data);

        /* le salvo nel database */
        $book->save();

        /* 
        ! REMEMBER TO CODE IN MODEL FOR FILLABLE CONTENTS  
        */
        return redirect()->route('admin.books.show', $book);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        $title = "Book";
        return view('admin.books.show', compact('book', 'title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        return view('admin.books.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $data = $request->all();
        $book->update($data);
        return redirect()->route('admin.books.show', $book);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('admin.books.index');
    }
    // VALIDATOR
    // private function validation($data)
    // {

    //     $validator = Validator::make(
    //         $data,
    //         [
    //             'title' => 'required|string|max:50',
    //             'author'=>'required',
    //             'price' => 'required',
    //             'genre' => 'required|string',
    //             'editor_house' => 'required|string|max:30',
    //             'pages' => 'required',
    //             'edition' => 'required',
    //             'series_number' => 'required',
    //             'copies_number' => 'required',
    //         ],
    //         [
    //             'title.required' => 'Title is required',
    //             'title.string' => 'Title need to be a string',
    //             'title.max' => 'Title is max 50 char',
                
    //             'author.required'=>'Author is required',
    //             'price.required' => 'Price is required',
    //             'genre.required' => 'Genre is required',
    //             'editor_house.required' => 'Editor house is required',
    //             'pages.required' => 'Pages is required',
    //             'edition.required' => 'edition is required',
    //             'series_number.required' => 'Series number is required',
    //             'copies_number.required' => 'Copies number isrequired',
    //         ],
    //     )->validate();
    //     return $validator;
    // }
}