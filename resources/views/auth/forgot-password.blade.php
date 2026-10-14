
@extends('partials.layout')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="card bg-base-200 shadow-xl max-w-md mx-auto">
        <div class="card-body">
            <h1 class="card-title">{{ __('Forgot your password?') }}</h1>

            <p class="text-sm mb-4">
                {{ __('No problem. Just let us know your email address and we will email you a password reset link.') }}
            </p>

            @if (session('status'))
                <div role="alert" class="alert alert-success mb-4">
                    <span>{{ session('status') }}</span>
                </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <label class="form-control w-full mb-4">
                    <span class="label-text mb-2">{{ __('Email') }}</span>
                    <input
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        class="input input-bordered w-full"
                        required
                        autofocus
                        autocomplete="username"
                    >
                    @error('email')
                        <span class="text-error text-sm mt-1">{{ $message }}</span>
                    @enderror
                </label>

                <button type="submit" class="btn btn-primary w-full">
                    {{ __('Email Password Reset Link') }}
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
