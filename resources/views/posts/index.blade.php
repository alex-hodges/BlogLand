@extends('layouts.app')

@section('content')
<h1 class="text-center">Posts</h1>
<br>
@if(count($posts) > 0)
@foreach($posts as $post)
<div class="card card-body">
    <div class="row">
        <div class="col-md-4 col-sm-4">
            <img style="max-height: 187.5px;
            max-width: 250px;" src="/storage/cover_images/{{$post->cover_image}}">
        </div>
        <div class="col-md-8 col-sm-8">
<h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
    <small>Written on {{ date (' d/m/y',strtotime($post->created_at))}} by {{$post->user->name}} </small>
        </div>
    </div>
</div>
@endforeach
{{$posts->links()}}
@else 
<p>No posts found</p>
@endif
<br>
<div class="text-center">
    <a href="/posts/create" class="btn btn-dark" style="font-size:20px; margin: 10px;">Create Post</a>
</div>
@endsection