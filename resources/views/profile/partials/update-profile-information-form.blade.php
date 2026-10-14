<section>
    <header class="mb-6">
        <h2 class="text-lg font-semibold">
            {{ __('Profile Information') }}
        </h2>

        <p class="text-sm opacity-70 mt-1">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form method="POST" action="{{ route('profile.update') }}" class="space-y-4">
        @csrf
        @method('PATCH')

        {{-- Name --}}
        <fieldset class="fieldset">
            <legend class="fieldset-legend">{{ __('Name') }}</legend>

            <input
                id="name"
                name="name"
                type="text"
                class="input input-bordered w-full @error('name') input-error @enderror"
                value="{{ old('name', $user->name) }}"
                required
                autofocus
                autocomplete="name"
            >

            @error('name')
                <p class="text-error text-sm">{{ $message }}</p>
            @enderror
        </fieldset>

        {{-- Email --}}
        <fieldset class="fieldset">
            <legend class="fieldset-legend">{{ __('Email') }}</legend>

            <input
                id="email"
                name="email"
                type="email"
                class="input input-bordered w-full @error('email') input-error @enderror"
                value="{{ old('email', $user->email) }}"
                required
                autocomplete="username"
            >

            @error('email')
                <p class="text-error text-sm">{{ $message }}</p>
            @enderror
        </fieldset>

        @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
            <div class="alert alert-warning">
                <span>{{ __('Your email address is unverified.') }}</span>

                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf
                    <button type="submit" class="btn btn-sm">
                        {{ __('Resend verification email') }}
                    </button>
                </form>

                @if (session('status') === 'verification-link-sent')
                    <p class="text-sm text-success">
                        {{ __('A new verification link has been sent to your email address.') }}
                    </p>
                @endif
            </div>
        @endif

        <div class="flex items-center gap-4 pt-2">
            <button type="submit" class="btn btn-primary">
                {{ __('Save') }}
            </button>

            @if (session('status') === 'profile-updated')
                <span class="text-sm text-success">
                    {{ __('Saved.') }}
                </span>
            @endif
        </div>
    </form>
</section>
