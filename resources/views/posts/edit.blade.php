@extends('layouts.app')

@section('content')
<h1>Edit Post</h1>
{!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
<div class="form-group">
    {{Form::label('title', 'Title')}}
    {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
</div>
<div class="form-group">
    {{Form::label('subject', 'Subject')}}
    {{Form::select('subject', ['World' => 'World', 'UK' => 'UK', 'Technology' => 'Technology', 'Design' => 'Design', 'Culture' => 'Culture',
     'Business' => 'Business', 'Politics' => 'Politics', 'Opinion' => 'Opinion', 'Science' => 'Science',
      'Health' => 'Health', 'Style' => 'Style', 'Travel' => 'Travel' ])}}
</div>
<div class="form-group">
    {{Form::label('body', 'Body')}}
    {{Form::textarea('body', $post->body, ['id'=>'article-ckdeditor','class' => 'form-control', 'placeholder' => 'Body Text'])}}
</div>
<div class="form-group">
    {{Form::file('cover_image')}}
</div>
{{Form::hidden('_method', 'PUT')}}
    {{Form::submit('Submit', ['class'=> 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection