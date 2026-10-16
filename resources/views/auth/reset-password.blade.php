
@extends('partials.layout')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="card bg-base-200 shadow-xl max-w-md mx-auto">
        <div class="card-body">
            <h1 class="card-title">{{ __('Reset Password') }}</h1>

            <form method="POST" action="{{ route('password.store') }}">
                @csrf

                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                <fieldset class="fieldset mb-4">
                    <legend class="fieldset-legend">{{ __('Email') }}</legend>
                    <input
                        name="email"
                        type="email"
                        value="{{ old('email', $request->email) }}"
                        class="input w-full @error('email') input-error @enderror"
                        required
                        autocomplete="username"
                    >
                    @error('email')
                        <p class="label text-error">{{ $message }}</p>
                    @enderror
                </fieldset>

                <fieldset class="fieldset mb-4">
                    <legend class="fieldset-legend">{{ __('Password') }}</legend>
                    <input
                        name="password"
                        type="password"
                        class="input w-full @error('password') input-error @enderror"
                        required
                        autocomplete="new-password"
                    >
                    @error('password')
                        <p class="label text-error">{{ $message }}</p>
                    @enderror
                </fieldset>

                <fieldset class="fieldset mb-4">
                    <legend class="fieldset-legend">{{ __('Confirm Password') }}</legend>
                    <input
                        name="password_confirmation"
                        type="password"
                        class="input w-full"
                        required
                        autocomplete="new-password"
                    >
                </fieldset>

                <button type="submit" class="btn btn-primary w-full">
                    {{ __('Reset Password') }}
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
