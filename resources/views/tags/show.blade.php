
@extends('partials.layout')

@section('content')
    <div class="container mx-auto">
        <a href="{{ route('tags.index') }}" class="btn btn-primary">
            Back to tags
        </a>

        <div class="card bg-base-300 shadow-sm mt-4 p-4">
            <h1 class="text-2xl font-bold">{{ $tag->name }}</h1>

            <h2 class="text-xl mt-4">Posts with this tag</h2>

            @forelse ($tag->posts as $post)
                <div class="border-b border-base-content/20 py-3">
                    <a href="{{ route('posts.show', $post) }}"
                       class="link link-primary">
                        {{ $post->title }}
                    </a>
                </div>
            @empty
                <p>This tag has no posts yet.</p>
            @endforelse
        </div>
    </div>
@endsection
