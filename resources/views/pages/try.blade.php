@extends('layouts.master')

@section('content')
     <h1>Posts in pages</h1>
     <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
          </form>
     <br><br>
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

<!--<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
     
//This the inital Navbar

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
<a class="navbar-brand" href="/">{{config('app.name','LSAPP')}}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/about">About</a>
            </li>
            <li class="nav-item">
                    <a class="nav-link" href="/posts">Blog</a>
                  </li>

                  <li class="nav-item">
                      <a class="nav-link" href="/services">Services</a>
                    </li>


                    
                  <li class="nav-item">
                      <a class="nav-link" href="/try">Try</a>
                    </li>
            
          </ul>

          <ul class="nav navbar-nav navbar-right">
            
            
              <li class="nav-item">
                  <a class="nav-link" href="/posts/create">Create Post</a>
                </li>
            
          </ul>
         
        </div>
      </nav>
-->