@extends('layouts.master')

@section('content')
    <form method="POST" action="{{ action('PostsController@update', $post->id) }}">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PUT">

        <div class="form-group">
            <label for="title" >Blog title</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Enter title" value="{{ $post->title }}">
        </div>

        <div class="form-group">
            <label for="body">Body</label>
            <textarea name="body" id="body" class="form-control" placeholder="Enter body for blog post">{{ $post->body }}</textarea>
        </div>

        <button class="btn btn-primary">Send</button>
    </form>
@endsection