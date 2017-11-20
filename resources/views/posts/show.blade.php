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
                        <li class="list-group-item">{{ $comment->body }}</li>
                        <p class="blog-post-meta">{{ $comment->created_at->diffForHumans() }}</p>
                        <hr>
                    @endforeach
                </ul>
            </div>
        </div>
        <hr>
        <form method="POST" action="/post/{{ $post->id }}/comment">
            {{ csrf_field() }}
            <div class="form-group">
                <textarea name="body" placeholder="Your comment here" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Add Comment</button>
            </div>
        </form>
        @include('layouts.errors')
    </div>
@endsection
