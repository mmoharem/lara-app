@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-default">Back</a>
        <h1>{{$post->title}}</h1> 
    <div>
        {!!$post->body!!}  {{--use this instead of that{{$post->body}} for the html markup in the ckeditor--}}
    </div>
    <hr>
    <small>Written on {{$post->created_at}}</small>  
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
        <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>

        {!!Form::open(['action' => ['PostController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!!Form::close()!!}
        @endif
    @endif
@endsection

  {{--  then goto destroy() function at PostController to add code  --}}