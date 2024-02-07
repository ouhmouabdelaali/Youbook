

@extends('Book.layout')

@section('content')

<div class="container">
    <div class="row" style="margin:20px">
        <div class="col-12">
            <div class="card">
               
               </div>
           </div>
       </div>
   </div>

<div class="container">
 

<div class="container">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach($books as $book)
        <div class="col">
            <div class="card h-100">
                <img src="{{ asset('images/OIP.jfif') }}" class="card-img-top" alt="{{ $book->title }}">

                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Title:</strong>{{ $book->title }}</li>
                    <li class="list-group-item"><strong>Author:</strong>{{ $book->author }}</li>
                    
                </ul>
                <div class="card-body d-flex column-gap-1 ">
                 <a href="{{route('mybook',$book->id)}}" title="view book"><button type="button" class="btn btn-info">view</button></a>
              
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
