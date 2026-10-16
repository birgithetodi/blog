
@extends('partials.layout')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="card bg-base-200 shadow-xl max-w-md mx-auto">
        <div class="card-body">
            <h1 class="card-title">{{ __('Forgot your password?') }}</h1>

            <p class="mb-4">
                {{ __('No problem. Just let us know your email address and we will email you a password reset link.') }}
            </p>

            @if (session('status'))
                <div role="alert" class="alert alert-success mb-4">
                    <span>{{ session('status') }}</span>
                </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <fieldset class="fieldset mb-4">
                    <legend class="fieldset-legend">{{ __('Email') }}</legend>
                    <input
                        name="email"
                        type="email"
                        value="{{ old('email') }}"
                        class="input w-full @error('email') input-error @enderror"
                        required
                        autofocus
                        autocomplete="username"
                    >
                    @error('email')
                        <p class="label text-error">{{ $message }}</p>
                    @enderror
                </fieldset>

                <button type="submit" class="btn btn-primary w-full">
                    {{ __('Email Password Reset Link') }}
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
