@extends('layouts.main')

@section('body')
@foreach ($posts as $post)
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            <p class="card-text">{{ $post->excerpt }}</p>
            <a href="post/{{ $post->slug }}" class="btn btn-primary">Read More</a>
        </div>
    </div> 
@endforeach
@endsection