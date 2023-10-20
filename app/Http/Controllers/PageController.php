<?php

namespace App\Http\Controllers;

use App\Models\Book;

use Illuminate\Http\Request;

class PageController extends Controller
{
  public function index()
  {
    $title = "Homepage";
    $books = Book::all();
    return view('home', compact('books'), compact('title'));
  }
}