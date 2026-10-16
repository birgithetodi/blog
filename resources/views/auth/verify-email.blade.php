@extends('partials.layout')

@section('content')
<div class="container mx-auto max-w-xl px-4 py-10">
    <div class="card bg-base-100 shadow-xl">
        <div class="card-body">
            <h1 class="card-title text-2xl">
                {{ __('Email Verification') }}
            </h1>

            <p>
                {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you?') }}
            </p>

            <p>
                {{ __('If you didn’t receive the email, we will gladly send you another.') }}
            </p>

            @if (session('status') === 'verification-link-sent')
                <div role="alert" class="alert alert-success">
                    <span>{{ __('A new verification link has been sent to the email address you provided during registration.') }}</span>
                </div>
            @endif

            <form method="POST" action="{{ route('verification.send') }}" class="mt-4">
                @csrf
                <button type="submit" class="btn btn-primary">
                    {{ __('Resend Verification Email') }}
                </button>
            </form>

            <form method="POST" action="{{ route('logout') }}" class="mt-2">
                @csrf
                <button type="submit" class="btn btn-link">
                    {{ __('Log Out') }}
                </button>
            </form>
        </div>
    </div>
</div>
@endsection