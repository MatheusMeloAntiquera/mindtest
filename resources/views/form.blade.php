@extends('layout.template')
@section('content')


<div class="card">
    <div class="card-header">
        <h2>New Post</h2>
    </div>
    <div class="card-body">
        <form action="/post" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Enter post title">
            </div>
            <div class="form-group">
                <label for="author">Author</label>
                <input type="text" class="form-control" name="author" id="author" placeholder="Enter your name">
            </div>

            <div class="form-group">
                <label for="text">Text</label>
                <textarea class="form-control" name="text" id="text" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="/post" role="button" class="btn btn-danger">Cancel</a>
        </form>
    </div>
</div>
</div>
@endsection
