@extends('layouts.app')
@section('content')
<a href="/posts" class="btn btn-default">Go back</a>
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
     @if (!Auth::guest())
       @if (Auth::user()->id == $post->user_id)
        <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a><br>
        {!! Form::open(['action' => ['postsController@destroy',$post->id], 'method'=> 'POST']) !!}
          {{form::hidden('_method', 'DELETE')}}
          {{form::submit('delete', ['class'=>'btn btn-danger'])}}
        {!!form::close()!!}
     @endif
     @endif
     
@endsection