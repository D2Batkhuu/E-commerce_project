{{-- @extends('layout.app')

@section('content')
    <h1>Post Edit</h1>
    @if(count($posts) > 1)
        @foreach($posts as $post)
        <div class="container-lg">
            <h3><a href="/posts/{{$post->id}}">{{$post->title}}></a></h3>
            <small>Written on{{$post->created_at}}</small>
            
        </div>
        @endforeach
    @else
        <p>No post found</p>
    @endif
@endsection --}}
@extends('layout.app')

@section('content')
    <h1>Edit Post</h1>
    
    <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" value="{{ $post->title }}" required>
        </div>

        <div class="form-group">
            <label for="body">Body</label>
            <textarea id="article-ckeditor" name="body" class="form-control" rows="5" required>{{ $post->body }}</textarea>
        </div class="form-group">
        <div>
            <input type="file" name="image" accept="image/*">
        </div>
        <button type="submit" class="btn btn-primary">Update Post</button>
    </form>
@endsection
