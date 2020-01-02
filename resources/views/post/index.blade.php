@extends('project.layouts.app')



@section('title')
    POST
@endsection

@section('content')
<br>
<br>
<br>
<br>
    <h1>POSTS</h1>

    @if(count($post)>0)
            @foreach($post as $po)
        
            <div class="container">
            <h3><a href="/posts/{{$po->id}}"> {{$po->title}} </a></h3>
            </div>
        
        @endforeach
   
    
    @else
    <p> No posts found! </p>
    
    @endif
@endsection