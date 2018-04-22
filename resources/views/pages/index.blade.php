@extends('layouts.app')

@section('content')
<div class="jumbotron text-center">
    <h1>{{$title}}</h1>
    <p>this welcom page.</p> 
    <p><a href="/login" class="btn btn-primary btn-lg">Login</a> <a href="/register" class="btn btn-success btn-lg" role="button">Register</a></p> 
  </div>
    
@endsection

