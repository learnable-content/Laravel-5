@extends('layouts.master')

@section('content')
    <form method="POST" action="{{ action('PostsController@store') }}">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="title" >Blog title</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Enter title">
        </div>

        <div class="form-group">
            <label for="body">Body</label>
            <textarea name="body" id="body" class="form-control" placeholder="Enter body for blog post"></textarea>
        </div>

        <button class="btn btn-primary">Send</button>
    </form>
@endsection