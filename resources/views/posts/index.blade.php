@extends('layouts.app')
@section('content')
    <h1>Posts</h1>
    @if (count($posts) > 0)
       @foreach ($posts as $post)
       <div class="panel">
         <div class="row">
           <div class="col-md-4">
             <img style="width:100%;" src="/storage/cover_image/{{$post->cover_image}}" alt="">
           </div>
           <div class="col-md-8">
            <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
            <p>{{$post->body}}</p>
            <small>posted at {{$post->created_at}} By {{$post->user->name}}</small>
           </div>
         </div>
        </div>
       @endforeach
       <a href="/posts/create" class="btn btn-primary mt-3">Add Post</a></li>
       {{ $posts->links() }}
     @else
       <h1>No Posts found</h1>   
    @endif
@endsection