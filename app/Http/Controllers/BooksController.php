<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Books;
use Illuminate\Http\Request;
use App\Http\Controllers\UsersController;
class BooksController extends Controller
{
   
    public function index()
    {
        $books=Books::all();
        return view('Book.Books')->with('books',$books);
    }
    //-------------------------------------------
    public function create()
    {
        return view('Book.create');
    }
    public function store(Request $request)
    {
        $input = $request->all();
        Books::create($input);
        return redirect('books/newbook')->with('flash_message','book add Gorate!');

    }
    //---------------------------------------------------------
    public function edit($id)
    {   
        $books= Books::find($id);
        return view('Book.edit')->with('books',$books);
    }

 

    public function update(Request $request,$id)
    {
        $Book= Books::find($id);
        $input=$request->all();
        $Book->update($input);
       
        
        return  redirect()->back()->with('success', 'Book reserved!');
    }
    //---------------------------------------------------------------------------
    public function destroy($id)
    { 
        Books::destroy($id);
        return redirect('books')->with('flash_message','book Deleted Gorate!');

    }
//----------------------------------------


    public function viewbook($id)
    {
        $books=Books::find($id);
    
        return view('Book.viewbook')->with('books',$books);
    }


    public function show()
    {
        $books = Books::all();
        return view('Book.studentview')->with('books',$books);
    }
  public function mybook($id)
    {
        $books = Books::find($id);
        return view('Book.mybook')->with('books',$books);
       
    }




    public function reserve($id)
    {
        
        $book = Books::findOrFail($id);
        $book->user_i = 0;
        $book->save();
        
        return redirect()->back()->with('success', 'Book reserved!');
      
    }
    public function returne($id)
    {
        $book = Books::findOrFail($id);
        $book->user_i = 1;
        $book->save();

        return redirect()->back()->with('success', 'Book reserved!');
      
    }

   /* public function UnavailableBooks()
    {
    
        $Books = Books::where('user_i',1)->get();
        return view('Book.viewbook')->with('Books',$Books);
       
    }*/
}