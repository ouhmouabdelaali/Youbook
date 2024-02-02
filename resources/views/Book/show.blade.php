@extends('Book.layout')

@section('content')
    <div class="card" style="margin: 20px;">
        <div class="card-header"></div>
        <div class="card-boby">
            <div class="card-body">
                <img src="" alt="">
                <h5>Title:{{$books->title}}</h5>
                <p>Author:{{$books->author}}</p>
                <p>Dscription:{{$books->description}}</p>
                </hr>
            </div>
        </div>