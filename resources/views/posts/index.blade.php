@extends('layout.app')

@section('content')
    <h1>Posts</h1>

    <!-- Search Form -->
    <form action="{{ route('posts.index') }}" method="GET" class="mb-3">
        <input type="text" name="search" placeholder="Search posts..." class="form-control" value="{{ request('search') }}">
        <button type="submit" class="btn btn-primary mt-2">Search</button>
    </form>
    
   <!-- Create Post Button -->
   <a href="{{ route('posts.create') }}" class="btn btn-success mb-3">Create Post</a>

    @if(count($posts) > 0)
        {{-- @foreach($posts as $post)
        <div class="container-lg">
            <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
            <small>Written on{{$post->created_at}}</small>
              <!-- Edit button -->
              <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>

              <!-- Delete button -->
              <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger">Delete</button>
                </form>
        </div>
        @endforeach --}}

        @foreach($posts as $post)
        <div class="container-lg">
            <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
            <small>Written on {{$post->created_at}} by 
                {{ $post->user ? $post->user->name : 'Unknown' }} <!-- Check if user exists -->
            </small>
        
            <!-- Edit button -->
            {{-- <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a> --}}
        
            <!-- Delete button -->
            {{-- <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form> --}}
        </div>
        @endforeach
        

    @else
        <p>No post found</p>
    @endif
@endsection

{{-- <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script> --}}