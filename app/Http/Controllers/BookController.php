<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    // public static function middleware(): array
    // {
    //     return ['auth'];
    // }

    public function create(){
        return view('book.create');
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
        return redirect()->route('book.create')->with('success', 'Grazie, libro inserito');
    }
    
    public function index(){
        $books = Book::paginate(6);
        return view('book.book',compact('books'));
    }

    public function show(Book $book){
       
        return view('book.show',compact('book'));
    }
}
