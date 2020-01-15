@extends('layouts.app')

@section('content')
<a href="/posts" class="btn btn-dark">Go Back</a>
<!-- Title -->
<h1 class="mt-4"><b>{{$post ->title}}<b></h1>
<!-- Author -->
<p class="lead">by {{$post->user->name}}<p>
    <hr>
    <!-- Date/Time -->
   <p> {{ date (' d F Y, h:i:s A',strtotime($post->created_at))}} </p>
<hr>
<!-- Preview Image -->
    <img class="img-fluid rounded" src="/storage/cover_images/{{$post->cover_image}}">
    <hr>
<br><br>
<div>
    {!!$post ->body!!}
</div>
<hr>

<hr>
@if(!Auth::guest())
@if(Auth::user()->id == $post ->user_id)
<a href="/posts/{{$post->id}}/edit" class="btn btn-info">Edit</a>
{!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class'=> 'float-right' ])!!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
{!!Form::close() !!}
@endif
@endif
@endsection