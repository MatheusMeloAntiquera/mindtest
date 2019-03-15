@extends('layout.template')
@section('content')


<div class="card">
    <div class="card-header">
        <h2>Latest Posts</h2>
        <a href="/post/create" role="button" class="btn btn-success"><i class="fa fa-plus-circle fa-lg"></i> New Post</a>
    </div>
    <div class="card-body">
        @foreach ($posts as $post) @component('components.post-component',['post' => $post]) @endcomponent @endforeach
    </div>
</div>
</div>
@endsection
