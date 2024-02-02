<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    //

    public function index()
    {
        $books=Books::all();
        return view('Book.Books')->with('books',$books);
    }

    public function create()
    {
        return view('Book.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Books::create($input);
        return redirect('Books')->with('flash_message','book add Gorate!');

    }
    public function show($id)
    {
        $books= Books::find($id);
        return view('Book.show')->with('books',$books);
    }


    public function update(Request $request,$id)
    {
        
        $Book= Books::find($id);
        $input=$request->all();
        $Book->update($input);
        return redirect('Books')->with('flash_message','book Upedat Gorate!');
    }
    public function showcreate()
    {
        return view('Book.edit');
    }
}
