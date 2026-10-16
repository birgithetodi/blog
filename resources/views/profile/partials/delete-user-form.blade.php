<section class="card bg-base-100 shadow-md">
    <div class="card-body">
        <h2 class="card-title text-xl">
            {{ __('Delete Account') }}
        </h2>

        <p class="text-base-content/70">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted.') }}
        </p>

        <button
            type="button"
            class="btn btn-error mt-4"
            onclick="delete_account_modal.showModal()"
        >
            {{ __('Delete Account') }}
        </button>

        <dialog id="delete_account_modal" class="modal">
            <div class="modal-box">
                <h3 class="font-bold text-lg">
                    {{ __('Are you sure you want to delete your account?') }}
                </h3>

                <p class="py-4">
                    {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
                </p>

                <form method="POST" action="{{ route('profile.destroy') }}">
                    @csrf
                    @method('DELETE')

                    <fieldset class="fieldset mb-4">
                        <legend class="fieldset-legend">{{ __('Password') }}</legend>

                        <input
                            id="delete_password"
                            name="password"
                            type="password"
                            class="input w-full @error('password', 'userDeletion') input-error @enderror"
                            placeholder="{{ __('Password') }}"
                            autocomplete="current-password"
                        />

                        @error('password', 'userDeletion')
                            <p class="label text-error">{{ $message }}</p>
                        @enderror
                    </fieldset>

                    <div class="modal-action">
                        <button
                            type="button"
                            class="btn"
                            onclick="delete_account_modal.close()"
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
    </div>
</section>