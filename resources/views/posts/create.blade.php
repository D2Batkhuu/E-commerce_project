@extends('layout.app')

@section('content')
    <h1>Create Post</h1>

    <div class="div_deg">
        <form action="{{ action('App\Http\Controllers\PostsController@store') }}" method="POST"  enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <!-- Title Input -->
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" placeholder="Title" required>

                <!-- Body Input -->
                <label for="body">Body</label>
                <textarea id="article-ckeditor" name="body" class="form-control" rows="5" placeholder="Write your post here..." required></textarea>
                <input type="file" name="image" accept="image/*">
                <!-- Select User -->
                {{-- <label for="user_id">Select User</label> --}}
                {{-- <select name="user_id" class="form-control" required>
                    <option value="" disabled selected>Select a user</option>
                    @foreach($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select> --}}
            </div>
            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
@endsection

