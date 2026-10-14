@extends('partials.layout')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="card bg-base-200 shadow-xl w-full max-w-md mx-auto">
            <div class="card-body">
                <h1 class="card-title text-2xl justify-center mb-4">
                    @lang('Register')
                </h1>

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    {{-- Name --}}
                    <fieldset class="fieldset mb-4">
                        <legend class="fieldset-legend">
                            @lang('Name')
                        </legend>

                        <input
                            name="name"
                            value="{{ old('name') }}"
                            type="text"
                            class="input input-bordered w-full @error('name') input-error @enderror"
                            required
                            autofocus
                            autocomplete="name"
                        />

                        @error('name')
                            <p class="text-error text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </fieldset>

                    {{-- Email Address --}}
                    <fieldset class="fieldset mb-4">
                        <legend class="fieldset-legend">
                            @lang('Email')
                        </legend>

                        <input
                            name="email"
                            value="{{ old('email') }}"
                            type="email"
                            class="input input-bordered w-full @error('email') input-error @enderror"
                            required
                            autocomplete="username"
                        />

                        @error('email')
                            <p class="text-error text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </fieldset>

                    {{-- Password --}}
                    <fieldset class="fieldset mb-4">
                        <legend class="fieldset-legend">
                            @lang('Password')
                        </legend>

                        <input
                            name="password"
                            type="password"
                            class="input input-bordered w-full @error('password') input-error @enderror"
                            required
                            autocomplete="new-password"
                        />

                        @error('password')
                            <p class="text-error text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </fieldset>

                    {{-- Confirm Password --}}
                    <fieldset class="fieldset mb-4">
                        <legend class="fieldset-legend">
                            @lang('Confirm Password')
                        </legend>

                        <input
                            name="password_confirmation"
                            type="password"
                            class="input input-bordered w-full @error('password_confirmation') input-error @enderror"
                            required
                            autocomplete="new-password"
                        />

                        @error('password_confirmation')
                            <p class="text-error text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </fieldset>

                    {{-- Actions --}}
                    <div class="flex flex-col-reverse sm:flex-row sm:items-center sm:justify-between gap-3 mt-6">
                        <a class="link link-hover text-sm" href="{{ route('login') }}">
                            @lang('Already registered?')
                        </a>

                        <button type="submit" class="btn btn-primary">
                            {{ __('Register') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
