<?php

namespace App\Http\Controllers;
use App\Models\Book;
use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function AddAuthor(Request $request){
        Author::create([
            'name' => $request->name,
        ]);
        // $author =  new Author();
        // $author->name = 'Jitu';
        // $author->save();
        return redirect('getauthor');
    }
    public function GetAuthor(){
        $authors = Author::all();
        $books = Book::all();
        return view('AddRecord',compact('authors','books'));
    }
    public function showbook($id){
        $author = Author::find($id)->book;
        return $author;
    }
    public function showauthor($id){
        $book = Book::find($id)->author;
        return $book;
    }
}
