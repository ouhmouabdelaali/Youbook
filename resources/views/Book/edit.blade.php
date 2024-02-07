@extends('Pages.layout')

@section('content')

<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
    <div class="card" style="margin: 20px;">
        <div class="card-header"></div>
        <div class="card-body">
            <form action="{{ route('update-book', ['id' => $books->id]) }}" method="post">
            @csrf
            @method('PATCH')
                <label >title</label>
                <input type="text"name="title" value="{{$books->title}}"  id="title"class="form-control">
                <label >author</label>
                <input type="text"name="author" value="{{$books->author}}" id="author"class="form-control">
                <label >description</label>
     
                     <textarea class="form-control"name="description" placeholder="Leave a comment here" id="description" style="height: 100px">{{$books->description}}</textarea>
                <input type="submit" value="Update" class="btn btn-success">
            </form>

        </div>
    </div>

    </div>
        </div>
    </div>    
@endsection
