@extends('layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">
        <div class="blog-post">
            <h2 class="blog-post-title">
                <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
            </h2>
            <p class="blog-post-meta">{{ $post->created_at->toDayDateTimeString() }}</p>
            <p>{{ $post->body }}</p>
            <hr>
            <div class="comments">
                <ul class="list=group">
                    @foreach ($post->comments as $comment)
                        <i>{{ $comment->created_at->diffForHumans() }}</i>
                        <li class="list-group-item">{{ $comment->body }}</li>
                        <hr>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
