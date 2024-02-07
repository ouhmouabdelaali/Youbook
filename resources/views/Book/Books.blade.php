@extends('Pages.layout')

@section('content')

<div class="container">
    <div class="row" style="margin:20px">
        <div class="col-12">
            <div class="card">
           
          <div class="card-body">
            <a href="{{url('books/newbook')}}" class="btn btn-success btn-sm"title="Add New Book">
                Add New
            </a>
            </div>
               
               </div>
           </div>
       </div>
   </div>

     

<div class="container">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach($books as $book)
        <div class="col">
            <div class="card h-100">
                <img src="{{ asset('images/OIP.jfif') }}" class="card-img-top" alt="{{ $book->title }}">

                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Title:</strong>{{ $book->title }}</li>
                    <li class="list-group-item"><strong>Author:</strong>{{ $book->author }}</li>
                    <!-- Add more details as needed -->
                </ul>
                <div class="card-body d-flex column-gap-1 ">
               
                 <a href="{{url('books/'.$book->id.'/update')}}"title="Eidet book"><button type="button" class="btn btn-primary">Eidet</button></a>
        
                  <form action="{{ url('/books/'.$book->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" >Delete</button>
                  </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
