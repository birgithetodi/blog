
<section>
    <header class="mb-6">
        <h2 class="text-lg font-semibold text-error">{{ __('Delete Account') }}</h2>
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

            <form method="POST" action="{{ route('profile.destroy') }}">
                @csrf
                @method('DELETE')

                <label class="form-control w-full">
                    <span class="label-text mb-2">{{ __('Password') }}</span>
                    <input
                        name="password"
                        type="password"
                        class="input input-bordered w-full @error('password', 'userDeletion') input-error @enderror"
                        required
                        autocomplete="current-password"
                    >
                    @error('password', 'userDeletion')
                        <span class="text-error text-sm mt-1">{{ $message }}</span>
                    @enderror
                </label>

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
            <button aria-label="{{ __('Close') }}"> </button>
        </form>
    </dialog>
</section>
