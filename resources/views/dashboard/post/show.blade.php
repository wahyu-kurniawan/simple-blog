@extends('dashboard.layouts.main')

@section('container')

<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h3>{{ $post->title }}</h3>
            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
            <div>
                <a href="/dashboard/posts" class="btn btn-primary">
                    <span data-feather='arrow-left'></span> Back to all post
                </a>
                <a href="/dashboard/posts" class="btn btn-warning">
                    <span data-feather='edit'></span> Edit
                </a>
                <a href="/dashboard/posts" class="btn btn-danger">
                    <span data-feather='x-circle'></span> Delete
                </a>
            </div>
            <article class="my-3 fs-5">
                {!! $post->body !!}
                <a href="/post">Back to..</a>
            </article>
        </div>
    </div>
</div>

@endsection