@extends('post.layout')

@section('content')

<div class="container"   style="padding-top: 12%">
    <div class="card ">

        <div class="card-body">
          <p class="card-text">Make your post</p>
        </div>
      </div>
</div>


<div class="container" style="padding-top: 2%">
<form action="{{ route('posts.store')}}" method="POST">
    @csrf
        <div class="form-group">
          <label for="exampleFormControlInput1">  Title</label>
          <input type="text" name="title" class="form-control"  placeholder="post title">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">  slug</label>
            <input type="text" name="slug" class="form-control"  placeholder="post slug">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">  excerpt</label>
            <input type="text" name="excerpt" class="form-control"  placeholder="post excerpt">
          </div>

        <div class="form-group">
          <label for="exampleFormControlTextarea1">Body  </label>
          <input type="text" name="body" class="form-control"   rows="3"  placeholder="post body">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Save</button>

        </div>



    </form>
</div>





@endsection