@extends('layouts.master')

@section('title', 'Blog posts')

@section('content')

    @foreach($posts as $post)
        <h2><a href="{{ action('PostsController@show', $post) }}">{{ $post->title }}</a></h2>
        <hr>
    @endforeach

    {{ $posts->links() }}

@endsection