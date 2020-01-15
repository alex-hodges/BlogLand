@extends('layouts.app')

@section('content')

 
<div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
          <h1 class="display-4 ">BlogLand</h1>
          <p class="lead my-3">The most committed, interesting blog ever concieved.</p>
          <p class="lead mb-0"><a href="/about" class="text-white font-weight-bold">Find out more...</a></p>
        </div>
</div>
<div class="row-cols-1">
<h2>Recently Added</h2>
</div>
      <div class="row mb-2">
        @foreach ($posts as $post)      
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary">{!!$post->subject!!}</strong>
              <h3 class="mb-0">
              <p class="text-dark">{{$post->title}}</p>
              </h3>
              <div class="mb-1 text-muted">{{ date (' M j',strtotime($post->created_at))}}</div>
              <p class="card-text mb-auto">{!! strip_tags(substr($post->body, 0, 120))!!}... </p>
              <a href="/posts/{{$post->id}}"> Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block rounded" style="max-height: 187.5px;
            max-width: 250px; margin: 5px;" src="/storage/cover_images/{{$post->cover_image}}" alt="Card image cap">
          </div>
        </div>
        @endforeach

     
    <main role="main" class="container">
        <div class="row">

          <div class="col-md-8 blog-main">
            <h3 class="pb-3 mb-4 font-italic border-bottom">
              From BlogLand
            </h3>

  <hr>
  @foreach ($randomPostsContent as $randomPost)
            <div class="blog-post" style="background: white; padding: 10px;">
        
            <h2 class="blog-post-title">{{$randomPost->title}}</h2>
              <p class="blog-post-meta">{{ date (' d F Y',strtotime($post->created_at))}} by {{$randomPost->user->name}}</p>
  
            <p>{!!$randomPost->body!!}</p>
            </div><!-- /.blog-post -->
            <hr>
  @endforeach
@endsection