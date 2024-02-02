@extends('Book.layout')

@section('content')
    <div class="card" style="margin: 20px;">
        <div class="card-header"></div>
        <div class="card-body">
            <form action="{{url('Books')}}" method="post">
            @csrf
            @method('post')
                <label >title</label>
                <input type="text"name="title"id="title"class="form-control">
                <label >author</label>
                <input type="text"name="author"id="author"class="form-control">
                <label >description</label>
     
                     <textarea class="form-control"name="description" placeholder="Leave a comment here" id="description" style="height: 100px"></textarea>
                    
             
                <input type="submit" value="Save"class="btn btn-success">
            </form>

        </div>
    </div>
@endsection
