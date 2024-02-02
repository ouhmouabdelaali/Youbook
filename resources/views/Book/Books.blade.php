@extends('Book.layout')
@section('content')
<div class="container">
    <div class="row" style="margin:20px">
        <div class="col-12">
            <div class="card">
            <div class="card-header">
            <h2>BOOKS</h2>
            </div>
          <div class="card-body">
            <a href="{{url('/Books/create')}}"class="btn btn-success btn-sm"title="Add New Book">
                Add New
            </a>
            
<table class="table">
  <thead>
    <tr>
      <th scope="col">Booke</th>
      <th scope="col">title</th>
      <th scope="col">author</th>
      <th scope="col">available</th>
     
    </tr>
  </thead>
  <tbody>
  @foreach($books as $book)
    <tr>
      <th scope="row">{{$book->id}}</th>
      <td>{{$book->title}}</td>
      <td>{{$book->author}}</td>
      <td></td>
    
      <td>
        <a href="{{url('/Books/'.$book->id)}}"title="view book"><button type="button" class="btn btn-info">view</button></a>
        <a href="{{url('/Books/'.$book->id.'/edit')}}"title="Eidet book"><button type="button" class="btn btn-primary">Eidet</button></a>
        <a href=" "title="Delete book"><button type="button" class="btn btn-danger">Delete</button></a>
      </td>
    </tr>
    @endforeach
   </tbody>
  </table>
          </div>
               

            </div>

        </div>
    </div>
</div>
@endsection