@extends('post.layout')

@section('content')


<div class="jumbotron container">

    <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
    <a class="btn btn-primary btn-lg" href="{{ route('posts.create')}}" role="button">Create  </a>

  </div>


  


  <div class="container">
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">post title</th>
            <th scope="col">post category</th>
            <th scope="col">post author</th>
            <th scope="col" style="width: 400px">Actions</th>
          </tr>
        </thead>
        <tbody>
            @php
                $i = 0;
            @endphp
            @foreach ($posts as $item)
            <tr>
                <th scope="row">{{++$i}}</th>
                <td>{{ $item->title }}</td>
                <td>{{ $item->category->title }} IQD  </td>
                <td>{{ $item->author->name }} IQD  </td>
                <td>

                    <div class="row">
                        <div class="col-sm">
                            <a  class="btn btn-success" href="{{ route('posts.edit',$item->id)}}"> Edit </a>

                        </div>
                        <div class="col-sm">
                            <a  class="btn btn-primary" href="{{ route('posts.show',$item->id)}}"> Show</a>

                        </div>

                        <div class="col-sm">
                            <form action="{{ route('posts.destroy',$item->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"> Delete</button>
                                </form>
                        </div> 
                      </div>


                </td>
              </tr>
            @endforeach

        </tbody>
      </table>

     
  </div>

@endsection