
<section>
    <header class="mb-6">
        <h2 class="text-lg font-semibold">{{ __('Update Password') }}</h2>
        <p class="text-sm opacity-70 mt-1">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="POST" action="{{ route('password.update') }}" class="space-y-4">
        @csrf
        @method('PUT')

        <label class="form-control w-full">
            <span class="label-text mb-2">{{ __('Current Password') }}</span>
            <input
                name="current_password"
                type="password"
                class="input input-bordered w-full @error('current_password', 'updatePassword') input-error @enderror"
                required
                autocomplete="current-password"
            >
            @error('current_password', 'updatePassword')
                <span class="text-error text-sm mt-1">{{ $message }}</span>
            @enderror
        </label>

        <label class="form-control w-full">
            <span class="label-text mb-2">{{ __('New Password') }}</span>
            <input
                name="password"
                type="password"
                class="input input-bordered w-full @error('password', 'updatePassword') input-error @enderror"
                required
                autocomplete="new-password"
            >
            @error('password', 'updatePassword')
                <span class="text-error text-sm mt-1">{{ $message }}</span>
            @enderror
        </label>

        <label class="form-control w-full">
            <span class="label-text mb-2">{{ __('Confirm Password') }}</span>
            <input
                name="password_confirmation"
                type="password"
                class="input input-bordered w-full"
                required
                autocomplete="new-password"
            >
        </label>

        @if (session('status') === 'password-updated')
            <div role="alert" class="alert alert-success">
                <span>{{ __('Password updated successfully.') }}</span>
            </div>
        @endif

        <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
    </form>
</section>
