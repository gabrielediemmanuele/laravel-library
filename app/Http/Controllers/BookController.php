<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/* 
mi aggancio al model  Book  */
use App\Models\Book;

class BookController extends Controller
{
    /* Invio alla route i dati: titolo e tutti i libri presi dal model (migration + seeder) */
    public function index()
    {
        $title = "Books";
        $books = Book::all();
        return view('book', compact('books'), compact('title'));
    }
}
