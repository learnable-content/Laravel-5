@extends('layouts.master')

@section('title', 'Blog title here')

@section('sidebar')
    @parent

    <p>We still have parents content now we are appending to it.</p>
@endsection

@section('content')
    <p>This will get placed where our yield content is.</p>
@endsection