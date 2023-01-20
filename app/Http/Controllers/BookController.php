<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function AddBook(Request $request){
        $author = Author::find($request->author_id);
        $book = new Book();
        $book->title=$request->title;
        $author->book()->save($book);
        return redirect('getauthor');
        // //return view('AddRecord');
        //Static Insertion
        // $author = Author::find($id);
        // $book = new Book();
        // $book->title='PHP';
        // $author->book()->save($book);
        // return 'Book Added Succesfully';

    }
    public function GetBook($id){
        $authors = Author::find($id);
        return view('AddBookRecord',['authors'=>$authors]);
    }
}
