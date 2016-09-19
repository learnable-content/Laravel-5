@extends('layouts.master')

@section('content')

    <h1>{{ $post->title }}</h1>

    <p>{{ $post->body }}</p>

    <p>
        <a href="{{ action('PostsController@edit', $post) }}" class="btn btn-primary">Edit Post</a>
    </p>

    <p>
        <form method="POST" action="{{ action('PostsController@destroy', $post->id) }}">
            <input type="hidden" name="_method" value="DELETE">
            {{ csrf_field() }}
            <button class="btn btn-danger">Delete Post</button>
        </form>
    </p>
@endsection