@extends('Book.layout')

@section('content')
  <div class="card" style="margin: 20px;">
    <div class="card-header"></div>
    <div class="card-body">
      <img src="{{ asset('images/OIP.jfif') }}" alt="Book Cover"> <h5>Title: {{ $books->title }}</h5>
      <p>Author: {{ $books->author }}</p>
      <p>Description: {{ $books->description }}</p>
      <hr>

      @if ($books->user_i== 0)
        <a href="{{ route('return-book', $books->id) }}" title="Reserve book"><button type="button" class="btn btn-danger"> Return</button></a>
      @else
        <a href="{{ route('reserve-book', $books->id) }}" title="Return book"><button type="button" class="btn btn-primary">Reserve</button></a>
      @endif
      
    </div>
  </div>
@endsection
