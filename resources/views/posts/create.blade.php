@extends('layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">
        <h3>Publish new post</h3><hr>
        <form method="POST" action="/posts">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" aria-describedby="Post Title" required>
            </div>
            <div class="form-group">
                <label for="body">Content</label>
                <textarea id="body" name="body" class="form-control" required></textarea>
            </div>
            @include('layouts.errors')
            <button type="submit" class="btn btn-primary">Publish</button>
        </form>
    </div>
@endsection
