@extends('layouts.app')
@section('content')
    <div class="row justify-content-center mt-2">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome Admin</div>

                <div class="card-body">
                    <a href="/posts/create" class="btn btn-primary float-right">Add Post</a><br>
                    <h4>Blog Posts</h4>
                    @if (count($posts) > 0)
                    <table class="table table-stripped">
                        <tr>
                            <th>Title</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        @foreach ($posts as $post)
                        <tr>
                            <td>{{$post->title}}</td>
                            <td><a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a></td>
                            <th>
                                {!! Form::open(['action' => ['postsController@destroy',$post->id], 'method'=> 'POST']) !!}
                                    {{form::hidden('_method', 'DELETE')}}
                                    {{form::submit('delete', ['class'=>'btn btn-danger'])}}
                                {!!form::close()!!}
                            </th>
                        </tr>  
                        @endforeach
                    </table>
                    @else
                     <p class="text-danger">You didn't have any Post</p>
                    @endif
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
