
@extends('partials.layout')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="card bg-base-200 shadow-xl max-w-md mx-auto">
        <div class="card-body">
            <h1 class="card-title">{{ __('Confirm Password') }}</h1>

            <p class="mb-4">
                {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
            </p>

            <form method="POST" action="{{ route('password.confirm') }}">
                @csrf

                <fieldset class="fieldset mb-4">
                    <legend class="fieldset-legend">{{ __('Password') }}</legend>
                    <input
                        name="password"
                        type="password"
                        class="input w-full @error('password') input-error @enderror"
                        required
                        autocomplete="current-password"
                    >
                    @error('password')
                        <p class="label text-error">{{ $message }}</p>
                    @enderror
                </fieldset>

                <button type="submit" class="btn btn-primary w-full">
                    {{ __('Confirm') }}
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
