@extends('post.layout')

@section('content')

<div class="jumbotron container">
  <h1 class="display-4">{{$post->title}}</h1>
  <p class="lead">By <a href='#'>{{$post->author->name}}</a> In <a href='#'>{{$post->category->title}}</a>   </p>
  <p class="lead"></p>
  <hr class="my-4">
  <p>{{$post->body}}</p>
  <a class="btn btn-primary btn-lg" href="/posts" role="button">Back</a>
</div>

@endsection