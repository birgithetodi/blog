<section>
    <header class="mb-6">
        <h2 class="text-lg font-semibold text-error">
            {{ __('Delete Account') }}
        </h2>

        <p class="text-sm opacity-70 mt-1">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted.') }}
        </p>
    </header>

    <button
        type="button"
        class="btn btn-error"
        onclick="document.getElementById('delete_account_modal').showModal()"
    >
        {{ __('Delete Account') }}
    </button>

    <dialog id="delete_account_modal" class="modal">
        <div class="modal-box">
            <h3 class="text-lg font-bold">
                {{ __('Are you sure you want to delete your account?') }}
            </h3>

            <p class="py-4 text-sm opacity-70">
                {{ __('Please enter your password to confirm you would like to permanently delete your account.') }}
            </p>

            <form method="POST" action="{{ route('profile.destroy') }}" class="space-y-4">
                @csrf
                @method('DELETE')

                <fieldset class="fieldset">
                    <legend class="fieldset-legend">{{ __('Password') }}</legend>

                    <input
                        id="delete_password"
                        name="password"
                        type="password"
                        class="input input-bordered w-full @error('password', 'userDeletion') input-error @enderror"
                        placeholder="{{ __('Password') }}"
                        required
                        autocomplete="current-password"
                    >

                    @error('password', 'userDeletion')
                        <p class="text-error text-sm">{{ $message }}</p>
                    @enderror
                </fieldset>

                <div class="modal-action">
                    <button
                        type="button"
                        class="btn btn-ghost"
                        onclick="document.getElementById('delete_account_modal').close()"
                    >
                        {{ __('Cancel') }}
                    </button>

                    <button type="submit" class="btn btn-error">
                        {{ __('Delete Account') }}
                    </button>
                </div>
            </form>
        </div>

        <form method="dialog" class="modal-backdrop">
            <button>{{ __('Close') }}</button>
        </form>
    </dialog>
</section>
