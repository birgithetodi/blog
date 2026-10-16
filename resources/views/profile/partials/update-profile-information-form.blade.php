@php
    $user = $user ?? Auth::user();
@endphp

<section class="card bg-base-100 shadow-md">
    <div class="card-body">
        <h2 class="card-title text-xl">
            {{ __('Profile Information') }}
        </h2>

        <p class="text-base-content/70">
            {{ __("Update your account's profile information and email address.") }}
        </p>

        <form method="POST" action="{{ route('profile.update') }}" class="mt-4">
            @csrf
            @method('PATCH')

            <fieldset class="fieldset mb-4">
                <legend class="fieldset-legend">{{ __('Name') }}</legend>

                <input
                    id="name"
                    name="name"
                    type="text"
                    value="{{ old('name', $user->name) }}"
                    class="input w-full @error('name') input-error @enderror"
                    required
                    autofocus
                    autocomplete="name"
                />

                @error('name')
                    <p class="label text-error">{{ $message }}</p>
                @enderror
            </fieldset>

            <fieldset class="fieldset mb-4">
                <legend class="fieldset-legend">{{ __('Email') }}</legend>

                <input
                    id="email"
                    name="email"
                    type="email"
                    value="{{ old('email', $user->email) }}"
                    class="input w-full @error('email') input-error @enderror"
                    required
                    autocomplete="username"
                />

                @error('email')
                    <p class="label text-error">{{ $message }}</p>
                @enderror
            </fieldset>

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div class="mt-2">
                    <p class="text-sm">
                        {{ __('Your email address is unverified.') }}
                    </p>

                    <form method="POST" action="{{ route('verification.send') }}">
                        @csrf
                        <button type="submit" class="btn btn-link">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </form>

                    @if (session('status') === 'verification-link-sent')
                        <div role="alert" class="alert alert-success mt-2">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </div>
                    @endif
                </div>
            @endif

            <div class="flex items-center gap-4 mt-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Save') }}
                </button>

                @if (session('status') === 'profile-updated')
                    <div role="alert" class="alert alert-success py-2">
                        {{ __('Saved.') }}
                    </div>
                @endif
            </div>
        </form>
    </div>
</section>