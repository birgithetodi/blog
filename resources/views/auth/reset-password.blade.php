
@extends('partials.layout')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="card bg-base-200 shadow-xl max-w-md mx-auto">
        <div class="card-body">
            <h1 class="card-title">{{ __('Reset Password') }}</h1>

            <form method="POST" action="{{ route('password.store') }}">
                @csrf

                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                <label class="form-control w-full mb-4">
                    <span class="label-text mb-2">{{ __('Email') }}</span>
                    <input
                        type="email"
                        name="email"
                        value="{{ old('email', $request->email) }}"
                        class="input input-bordered w-full"
                        required
                        autocomplete="username"
                    >
                    @error('email')
                        <span class="text-error text-sm mt-1">{{ $message }}</span>
                    @enderror
                </label>

                <label class="form-control w-full mb-4">
                    <span class="label-text mb-2">{{ __('Password') }}</span>
                    <input
                        type="password"
                        name="password"
                        class="input input-bordered w-full"
                        required
                        autocomplete="new-password"
                    >
                    @error('password')
                        <span class="text-error text-sm mt-1">{{ $message }}</span>
                    @enderror
                </label>

                <label class="form-control w-full mb-4">
                    <span class="label-text mb-2">{{ __('Confirm Password') }}</span>
                    <input
                        type="password"
                        name="password_confirmation"
                        class="input input-bordered w-full"
                        required
                        autocomplete="new-password"
                    >
                </label>

                <button type="submit" class="btn btn-primary w-full">
                    {{ __('Reset Password') }}
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
