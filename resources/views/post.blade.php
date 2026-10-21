@extends('partials.layout')
@section('content')
    <div class="container mx-auto">
        @include('partials.post-card')
        <h1>Comments:</h1>
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