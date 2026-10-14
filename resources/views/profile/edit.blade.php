
@extends('partials.layout')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-4xl mx-auto space-y-6">
        <h1 class="text-2xl font-bold">{{ __('Profile') }}</h1>

        <div class="card bg-base-200 shadow-xl">
            <div class="card-body">
                @include('profile.partials.update-profile-information-form')
            </div>
        </div>

        <div class="card bg-base-200 shadow-xl">
            <div class="card-body">
                @include('profile.partials.update-password-form')
            </div>
        </div>

        <div class="card bg-base-200 shadow-xl">
            <div class="card-body">
                @include('profile.partials.delete-user-form')
            </div>
        </div>
    </div>
</div>
@endsection
