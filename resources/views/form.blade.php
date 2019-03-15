@extends('layout.template')
@section('content')


<div class="card">
    <div class="card-header">
        <h2>{{ $param['titleForm'] }}</h2>
    </div>
    <div class="card-body">
        <form action="{{ $param['action'] }}" method="POST">
            @csrf @isset($param['method']) @method($param['method']) @endisset
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Enter post title" value="@isset($post->title) {{ $post->title }} @endisset">
            </div>
            <div class="form-group">
                <label for="author">Author</label>
                <input type="text" class="form-control" name="author" id="author" placeholder="Enter your name" value="@isset($post->author) {{ $post->author }} @endisset">
            </div>

            <div class="form-group">
                <label for="text">Text</label>
                <textarea class="form-control" name="text" id="text" rows="3">@isset($post->text) {{ $post->text }} @endisset</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="/post" role="button" class="btn btn-danger">Cancel</a>
        </form>
    </div>
</div>
</div>
@endsection
