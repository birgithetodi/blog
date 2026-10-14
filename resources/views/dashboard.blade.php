
@extends('partials.layout')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="card bg-base-200 shadow-xl">
        <div class="card-body">
            <h1 class="card-title text-2xl">{{ __('Dashboard') }}</h1>
            <p>{{ __("You're logged in!") }}</p>
        </div>
    </div>
</div>
@endsection
