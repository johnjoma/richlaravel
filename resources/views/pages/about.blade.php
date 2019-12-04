@extends('layouts.master')
@section('content')
       
       
<h3>Posts</h3>
<br><hr>

@if(count($posts)>=1)
@foreach($posts as $post)
<div class="container">
<div class="well well-lg">
    <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
<p>{{$post->body}}</p>
<small>Written at: {{$post->created_at}}</small>
</div>
</div>
@endforeach
{{$posts->links()}}
@else
<p>No Posts Found</p>
@endif
   @endsection