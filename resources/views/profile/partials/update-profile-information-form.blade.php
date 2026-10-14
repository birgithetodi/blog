
<section>
    <header class="mb-6">
        <h2 class="text-lg font-semibold">{{ __('Profile Information') }}</h2>
        <p class="text-sm opacity-70 mt-1">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form method="POST" action="{{ route('profile.update') }}" class="space-y-4">
        @csrf
        @method('PATCH')

        <label class="form-control w-full">
            <span class="label-text mb-2">{{ __('Name') }}</span>
            <input
                id="name"
                name="name"
                type="text"
                value="{{ old('name', $user->name) }}"
                class="input input-bordered w-full"
                required
                autocomplete="name"
            >
            @error('name')
                <span class="text-error text-sm mt-1">{{ $message }}</span>
            @enderror
        </label>

        <label class="form-control w-full">
            <span class="label-text mb-2">{{ __('Email') }}</span>
            <input
                id="email"
                name="email"
                type="email"
                value="{{ old('email', $user->email) }}"
                class="input input-bordered w-full"
                required
                autocomplete="username"
            >
            @error('email')
                <span class="text-error text-sm mt-1">{{ $message }}</span>
            @enderror
        </label>

        @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
            <div class="alert alert-warning">
                <span>{{ __('Your email address is unverified.') }}</span>
            </div>
        @endif

        @if (session('status') === 'verification-link-sent')
            <div role="alert" class="alert alert-success">
                <span>{{ __('A new verification link has been sent to your email address.') }}</span>
            </div>
        @endif

        <div class="flex items-center gap-4">
            <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>

            @if (session('status') === 'profile-updated')
                <span class="text-sm text-success">{{ __('Saved.') }}</span>
            @endif
        </div>
    </form>

    @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
        <form method="POST" action="{{ route('verification.send') }}" class="mt-4">
            @csrf
            <button type="submit" class="btn btn-outline btn-sm">
                {{ __('Resend verification email') }}
            </button>
        </form>
    @endif
</section>
