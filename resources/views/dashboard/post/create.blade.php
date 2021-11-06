@extends('dashboard.layouts.main')

@section('container')

<form action="/dashboard/posts" method="post">
    @csrf
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create New Post</h1>
    </div>
    <div class="col-lg-8">
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" placeholder="title" name="title">
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control" id="slug" placeholder="slug" name="slug">
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Category</label>
            <select class="form-select" aria-label="Default select example" name="category_id">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>     
                @endforeach
              </select>
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Body</label>
            <input id="body" type="hidden" name="content">
            <trix-editor input="body"></trix-editor>
        </div>
        <button type="submit" class="btn btn-primary">Create Post</button>
    
    </div>
</form>

<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function() {
        fetch('/dashboard/posts/checkSlug?title='+ title.value)
            .then((response) => response.json())
            .then((result) => slug.value = result.slug);
    })

    document.addEventListener('trix-file-accept', function (e) {
        e.preventDeffault;
    })
</script>
@endsection