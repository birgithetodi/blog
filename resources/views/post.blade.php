@extends('partials.layout')
@section('content')
    <div class="container mx-auto">
        @include('partials.post-card')
        <h1>Comments:</h1>
        {{-- 
            1. add form here to add comment use @auth to only show when logged in (look how posts/create.blade.php is done)
            2. add route that takes route parameter for post (id) and use CommentController store method
            3. Fix StoreCommentRequest to allow requests (authorize return true) and add validation to require body field
            4. Add Post $post to store method in CommentController and add logic to create new Comment and fill its body and associate post and user (look at PostController store method)
        --}}
          <form action="{{ route('comment', $post) }}" method="POST" enctype="multipart/form-data"
            class="card bg-base-200 shadow-sm mx-auto p-3">


            <fieldset class="fieldset">
                <legend class="fieldset-legend">Add comment</legend>
                <textarea name="body" class="textarea h-36 w-full @error('body')textarea-error @enderror"
                    placeholder="Post comment here">{{ old('body') }}</textarea>
                @error('body')
                    <p class="label text-error">{{ $message }}</p>
                @enderror
             <button class="btn btn-primary">Post Comment</button>
            </fieldset>
            </form>
        @foreach($post->comments as $comment)
            <div class="card bg-base-300 shadow-sm mt-2">
                <div class="card-body">
                    <p>{{ $comment->body }}</p>
                    <span class="text-base-content/70">{{ $comment->user->name }}</span>
                    <span class="text-base-content/70">{{ $comment->created_at->diffForHumans() }}</span>
                    <div class="card-actions justify-end"></div>
                </div>
            </div>
        @endforeach
    </div>
@endsection