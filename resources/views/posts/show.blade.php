@extends('layout.app')

@section('content')
<a href="/posts" class="btn btn-default">Go Back</a>
    <h1 >{{$post->title}}</h1>
    
    <div>
        {!!$post->body!!}
    </div>
    @if($post->image)
    {{-- <p>{{ asset('storage/' . $post->image) }}</p>  <!-- Show the URL for debugging --> --}}
        <img src="{{ asset('storage/' . $post->image) }}" alt="Post Image" />
    @endif
    <hr>
    <small>Written on {{$post->created_at}}</small>
    {{-- <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
         <!-- Delete button -->
            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form> --}}
@endsection