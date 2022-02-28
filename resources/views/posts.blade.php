<!DOCTYPE html>
<body>
<h1>All Posts :</h1>

<div>
@foreach ($posts as $post)
    <h2><a href='posts/{{$post->slug}}'>{{$post->title}}</a></h2>
    <p>By <a href='users/{{$post->author->id}}'>{{$post->author->name}}</a> Category: <a href='categories/{{$post->category->slug}}'>{{$post->category->title}}</a> </p>
    <p>{{$post->body}}</p>
@endforeach
</div>
</body>