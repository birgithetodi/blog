@extends('partials.layout')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="card bg-base-200 shadow-xl w-full max-w-md mx-auto">
            <div class="card-body">
                <h1 class="card-title text-2xl justify-center mb-4">
                    @lang('Log in')
                </h1>

                @if (session('status'))
                    <div role="alert" class="alert alert-success mb-4">
                        <span>{{ session('status') }}</span>
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    {{-- Email Address --}}
                    <fieldset class="fieldset mb-4">
                        <legend class="fieldset-legend">
                            @lang('Email')
                        </legend>

                        <input name="email" value="{{ old('email') }}" type="email"
                            class="input input-bordered w-full @error('email') input-error @enderror" required autofocus
                            autocomplete="username" />

                        @error('email')
                            <p class="text-error text-sm mt-1">
                                {{ $message }}
                            </p>
                        @enderror
                    </fieldset>

                    {{-- Password --}}
                    <fieldset class="fieldset mb-4">
                        <legend class="fieldset-legend">
                            @lang('Password')
                        </legend>

                        <input name="password" type="password"
                            class="input input-bordered w-full @error('password') input-error @enderror" required
                            autocomplete="current-password" />

                        @error('password')
                            <p class="text-error text-sm mt-1">
                                {{ $message }}
                            </p>
                        @enderror
                    </fieldset>

                    {{-- Remember Me --}}
                    <fieldset class="fieldset mb-4">
                        <label class="label cursor-pointer justify-start gap-2">
                            <input name="remember" type="checkbox" class="checkbox checkbox-primary" />
                            <span>@lang('Remember me')</span>
                        </label>
                    </fieldset>

                    {{-- Actions --}}
                    <div class="flex flex-col-reverse sm:flex-row sm:items-center sm:justify-between gap-3 mt-6">
                        @if (Route::has('password.request'))
                            <a class="link link-hover text-sm" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif

                        <button type="submit" class="btn btn-primary">
                            {{ __('Log in') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
