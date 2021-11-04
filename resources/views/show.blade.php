@extends('layouts.main')

@section('body')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h3>{{ $post->title }}</h3>
            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid">
            <p>By <a href="/post?author={{ $post->user->username }}" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/post?category={{ $post->category->slug }}" class="text-decoration-none">{{  $post->category->name  }}</a></p>
            <article class="my-3 fs-5">
                {!! $post->body !!}
                <a href="/post">Back to..</a>
            </article>
        </div>
    </div>
</div>

@endsection