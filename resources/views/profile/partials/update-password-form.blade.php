<section class="card bg-base-100 shadow-md">
    <div class="card-body">
        <h2 class="card-title text-xl">
            {{ __('Update Password') }}
        </h2>

        <p class="text-base-content/70">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>

        <form method="POST" action="{{ route('password.update') }}" class="mt-4">
            @csrf
            @method('PUT')

            <fieldset class="fieldset mb-4">
                <legend class="fieldset-legend">{{ __('Current Password') }}</legend>

                <input
                    id="current_password"
                    name="current_password"
                    type="password"
                    class="input w-full @error('current_password', 'updatePassword') input-error @enderror"
                    autocomplete="current-password"
                />

                @error('current_password', 'updatePassword')
                    <p class="label text-error">{{ $message }}</p>
                @enderror
            </fieldset>

            <fieldset class="fieldset mb-4">
                <legend class="fieldset-legend">{{ __('New Password') }}</legend>

                <input
                    id="password"
                    name="password"
                    type="password"
                    class="input w-full @error('password', 'updatePassword') input-error @enderror"
                    autocomplete="new-password"
                />

                @error('password', 'updatePassword')
                    <p class="label text-error">{{ $message }}</p>
                @enderror
            </fieldset>

            <fieldset class="fieldset mb-4">
                <legend class="fieldset-legend">{{ __('Confirm Password') }}</legend>

                <input
                    id="password_confirmation"
                    name="password_confirmation"
                    type="password"
                    class="input w-full"
                    autocomplete="new-password"
                />
            </fieldset>

            <div class="flex items-center gap-4 mt-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Save') }}
                </button>

                @if (session('status') === 'password-updated')
                    <div role="alert" class="alert alert-success py-2">
                        {{ __('Saved.') }}
                    </div>
                @endif
            </div>
        </form>
    </div>
</section>