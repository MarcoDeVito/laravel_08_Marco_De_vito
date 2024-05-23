<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function create(){
        return view('create');
    }
    public function store(BookRequest $request){
        $path_image='';
        if($request->hasFile('image') && $request->file('image')->isValid()){
            $file_name= $request->file('image')->getClientOriginalName();
            $path_image= $request->file('image')->storeAs('public/images',$file_name);
        }

        Book::create([
            'title'=>$request->title,
            'pages'=>$request->pages,
            'years'=>$request->years,
            'image'=> $path_image
        ]);
        return redirect()->route('create')->with('success', 'Grazie, libro inserito');
    }
    
    public function index(){
        $books = Book::all();
        return view('book',compact('books'));
    }

    public function show(Book $book){
       
        return view('show',compact('book'));
    }
}
