<?php

namespace App\Http\Controllers;
use App\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
   
    public function index()
    {
        // select * from books
        $books = Book::all();
        //dd($books);
        // select * from books where author = 'jk'
        //dd(Book::where('author', 'jk rwling')->first());
        dd($books->find(2));
        return view('books.index', compact('books'));
    }

    public function show(Book $book)
    {
        //$book = Book::find($id);
        dd($book);
    }

}
