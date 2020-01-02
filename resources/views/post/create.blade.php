@extends('project.layouts.app')



@section('title')
    POST
@endsection

@section('content')
<br>
<br>
<br>
<br>

<h1> Create Posts</h1>

<div class="form-group">
    <form method="POST" action="PostsController@store">
        <label for="comment">Post:</label>
        <input type="text" class="form-control" name="title" id="exampleFormControlInput1" placeholder="Title of Blog">
  </div>
        
        <textarea class="form-control" rows="2" name="content"  id="comment" placeholder="content of blog"></textarea>
        
        <br>
        <br>
        <input type="submit" placeholder="submit"  class="btn btn-success" name="submit">
      </div>
      </form>

    @endsection