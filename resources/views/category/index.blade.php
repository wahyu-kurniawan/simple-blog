@extends('layouts.main')

@section('body')

<div class="container">
    <div class="row">
            @foreach ($categories as $category)
                <div class="col-md-4">
                    <a href="categories/{{ $category->slug }}">
                        <div class="card bg-dark text-white">
                            <img src="https://source.unsplash.com/500x500?{{ $category->name }}" class="card-img" alt="https://source.unsplash.com/500x500?{{ $category->name }}">
                            <div class="card-img-overlay d-flex align-items-center p-0">
                            <h5 class="card-title text-center p-4 flex-fill" style="background-color: rgba(0, 0, 0, 0.7)">{{ $category->name }}</h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection