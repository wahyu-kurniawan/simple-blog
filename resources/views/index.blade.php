@extends('layouts.main')

@section('body')

<h2 class="text-center"> {{ $header }} </h2>

<div class="row justify-content-center">
    <div class="col-md-6">
        <form action="/post">
            <div class="input-group mb-3">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('author'))
                <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <input type="text" class="form-control" placeholder="Search.." name="search">
                <button class="btn btn-danger" type="submit" id="button-addon2">Search</button>
            </div>
        </form>
    </div>
</div>

@if ($posts->count() > 0)
    <div class="card mb-3">
        <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
        <div class="card-body text-center">
        <h3 class="card-title">{{ $posts[0]->title }}</h3>
        <p class="card-text">{{ $posts[0]->excerpt }}</p>
        <p>
            <small class="text-muted">
                By <a href="/post?author={{ $posts[0]->user->username }}" class="text-decoration-none">{{ $posts[0]->user->name }}</a> in <a href="/post?category={{ $posts[0]->category->slug }}" class="text-decoration-none">{{  $posts[0]->category->name  }}</a> {{ $posts[0]->created_at->diffForHumans() }}
            </small>
        </p>
        <a href="/post/{{ $posts[0]->slug }}" class="btn btn-primary">Read More</a>
        </div>
    </div>


<div class="container">
    <div class="row">
        @foreach ($posts->skip(1) as $post)
            <div class="col-md-4 my-3">
                <div class="card">
                    <div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.7)">
                        <a href="/post?category={{ $post->category->slug }}" class="text-decoration-none text-white">{{ $post->category->name }}</a>
                    </div>
                    <img src="https://source.unsplash.com/500x500?{{ $post->category->name }}" class="card-img-top" alt="https://source.unsplash.com/1200x400/?{{ $post->category->name }}">
                    <div class="card-body">
                      <h5 class="card-title">{{ $post->title }}</h5>
                      <p class="card-text">{{  $post->excerpt  }}</p>
                      <a href="/post/{{ $post->slug }}" class="btn btn-primary">Read More</a>
                    </div>
                  </div>
            </div>      
        @endforeach
    </div>
</div>
@else
    <p class="text-center fs-4">No Post Yet.</p>
@endif
{{ $posts->links() }}
@endsection