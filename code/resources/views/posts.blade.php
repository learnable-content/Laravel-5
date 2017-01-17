@extends('layouts.master')

@section('title', 'My Blog app')

@section('sidebar')
    @parent
    <p>Test this out</p>
@endsection

@section('content')
    <div class="post">
        <h2>{{ $title }}</h2>
        <p>{{ $content }}</p>
    </div>

    <?php if(condition) { ?>
        html stuff here
    <?php } else { ?>
        asdfadsf
    <?php } ?>

    @if(condition)
        html here
    @else
        again here html
    @endif

    @for($i = 0; $i < 10; $i++)
        html again with {{ $i }}
    @endfor

    @foreach($posts as $post)
        {{ $post->title }}
    @endforeach

@endsection
