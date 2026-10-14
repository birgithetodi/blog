
@extends('partials.layout')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="card bg-base-200 shadow-xl max-w-md mx-auto">
        <div class="card-body">
            <h1 class="card-title">{{ __('Confirm Password') }}</h1>

            <p class="text-sm mb-4">
                {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
            </p>

            <form method="POST" action="{{ route('password.confirm') }}">
                @csrf

                <label class="form-control w-full mb-4">
                    <span class="label-text mb-2">{{ __('Password') }}</span>
                    <input
                        type="password"
                        name="password"
                        class="input input-bordered w-full"
                        required
                        autocomplete="current-password"
                    >
                    @error('password')
                        <span class="text-error text-sm mt-1">{{ $message }}</span>
                    @enderror
                </label>

                <button type="submit" class="btn btn-primary w-full">
                    {{ __('Confirm') }}
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
