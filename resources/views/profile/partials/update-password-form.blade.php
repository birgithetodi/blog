<section>
    <header class="mb-6">
        <h2 class="text-lg font-semibold">
            {{ __('Update Password') }}
        </h2>

        <p class="text-sm opacity-70 mt-1">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="POST" action="{{ route('password.update') }}" class="space-y-4">
        @csrf
        @method('PUT')

        {{-- Current Password --}}
        <fieldset class="fieldset">
            <legend class="fieldset-legend">{{ __('Current Password') }}</legend>

            <input
                id="current_password"
                name="current_password"
                type="password"
                class="input input-bordered w-full @error('current_password', 'updatePassword') input-error @enderror"
                autocomplete="current-password"
            >

            @error('current_password', 'updatePassword')
                <p class="text-error text-sm">{{ $message }}</p>
            @enderror
        </fieldset>

        {{-- New Password --}}
        <fieldset class="fieldset">
            <legend class="fieldset-legend">{{ __('New Password') }}</legend>

            <input
                id="password"
                name="password"
                type="password"
                class="input input-bordered w-full @error('password', 'updatePassword') input-error @enderror"
                autocomplete="new-password"
            >

            @error('password', 'updatePassword')
                <p class="text-error text-sm">{{ $message }}</p>
            @enderror
        </fieldset>

        {{-- Confirm New Password --}}
        <fieldset class="fieldset">
            <legend class="fieldset-legend">{{ __('Confirm Password') }}</legend>

            <input
                id="password_confirmation"
                name="password_confirmation"
                type="password"
                class="input input-bordered w-full"
                autocomplete="new-password"
            >
        </fieldset>

        <div class="flex items-center gap-4 pt-2">
            <button type="submit" class="btn btn-primary">
                {{ __('Save') }}
            </button>

            @if (session('status') === 'password-updated')
                <span class="text-sm text-success">{{ __('Saved.') }}</span>
            @endif
        </div>
    </form>
</section>
