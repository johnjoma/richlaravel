@extends('layouts.app')

@section('content')
<div class="container">
<a href="/posts" class="btn btn defaul"> Go back</a>
<h1>{{$post->title}}</h1>
<img style="width:50%" src="/storage/cover_images/{{$post->cover_image}}">
<hr><hr>
<div>
<p>{!!$post->body!!}</p>
<hr>
</div>
<small>Written on: {{$post->created_at}}</small> <br>By<strong> {{$post->user->name}}</strong>

<hr>
@if(!Auth::guest())
@if(Auth::user()->id == $post->user_id)
<a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>

{!!Form::open(['action'=>['PostsController@destroy', $post->id], 'method'=>'POST','class'=> 'float-right'])!!}
  {{Form::hidden('_method','DELETE')}}
  {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
{!!Form::close()!!}
@endif
@endif
</div>
@endsection