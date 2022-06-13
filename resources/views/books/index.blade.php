@extends('layouts.app')

@section('content')

<h1>Our Books</h1>

@forelse($books as $book)

<div class="card">
  <div class="card-body">
    <h3>{{$book->title}}</h3>
    <p>Plot: {{$book->plot}}</p>
    <p>Author: {{$book->author}}</p>
  </div>
</div>

@empty

<p>No books yet!</p>
@endforelse

@endsection