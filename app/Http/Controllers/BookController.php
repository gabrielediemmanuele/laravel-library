<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/* 
mi aggancio al model  Book  */
use App\Models\Book;

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
        return view('books.index', compact('books', 'title'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('books.create');
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
        return redirect()->route('books.show', $book);
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
        return view('books.show', compact('book', 'title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        return view('books.edit', compact('book'));
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
        return redirect()->route('books.show', $book);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}