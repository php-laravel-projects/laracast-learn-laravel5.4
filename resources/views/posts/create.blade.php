@extends('layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">
        <h3>Publish new post</h3>
        <form>
            <div class="form-group">
                <input type="text" class="form-control" id="title" aria-describedby="Post Title" placeholder="Title for the post">
            </div>
            <div class="form-group">
                <label for="body">Content</label>
                <textarea id="body" name="body" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Publish</button>
        </form>
    </div>
@endsection
