
@extends('partials.layout')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="card bg-base-200 shadow-xl max-w-lg mx-auto">
        <div class="card-body">
            <h1 class="card-title">{{ __('Verify Email Address') }}</h1>

            <p class="text-sm mb-4">
                {{ __('Thanks for signing up! Before getting started, please verify your email address by clicking the link we sent you.') }}
            </p>

            @if (session('status') === 'verification-link-sent')
                <div role="alert" class="alert alert-success mb-4">
                    <span>{{ __('A new verification link has been sent to your email address.') }}</span>
                </div>
            @endif

            <form method="POST" action="{{ route('verification.send') }}">
                @csrf
                <button type="submit" class="btn btn-primary w-full">
                    {{ __('Resend Verification Email') }}
                </button>
            </form>

            <form method="POST" action="{{ route('logout') }}" class="mt-3">
                @csrf
                <button type="submit" class="btn btn-outline w-full">
                    {{ __('Log Out') }}
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
