<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return response()->json($books);
    }
    public function store(Request $request)
    {
        $book = Book::create($request->all());
        return response()->json($book, 201);
    }
}
