```blade
<x-guest-layout>
    <div class="card bg-base-200 shadow-xl w-full max-w-md mx-auto">
        <div class="card-body">
            <h1 class="card-title text-2xl justify-center mb-4">
                {{ __('Reset Password') }}
            </h1>

            <form method="POST" action="{{ route('password.store') }}">
                @csrf

                {{-- Password Reset Token --}}
                <input
                    type="hidden"
                    name="token"
                    value="{{ $request->route('token') }}"
                >

                {{-- Email Address --}}
                <fieldset class="fieldset mb-4">
                    <legend class="fieldset-legend">
                        {{ __('Email') }}
                    </legend>

                    <input
                        id="email"
                        name="email"
                        type="email"
                        value="{{ old('email', $request->email) }}"
                        class="input input-bordered w-full @error('email') input-error @enderror"
                        required
                        autofocus
                        autocomplete="username"
                    >

                    @error('email')
                        <p class="text-error text-sm mt-1">{{ $message }}</p>
                    @enderror
                </fieldset>

                {{-- Password --}}
                <fieldset class="fieldset mb-4">
                    <legend class="fieldset-legend">
                        {{ __('Password') }}
                    </legend>

                    <input
                        id="password"
                        name="password"
                        type="password"
                        class="input input-bordered w-full @error('password') input-error @enderror"
                        required
                        autocomplete="new-password"
                    >

                    @error('password')
                        <p class="text-error text-sm mt-1">{{ $message }}</p>
                    @enderror
                </fieldset>

                {{-- Confirm Password --}}
                <fieldset class="fieldset mb-4">
                    <legend class="fieldset-legend">
                        {{ __('Confirm Password') }}
                    </legend>

                    <input
                        id="password_confirmation"
                        name="password_confirmation"
                        type="password"
                        class="input input-bordered w-full @error('password_confirmation') input-error @enderror"
                        required
                        autocomplete="new-password"
                    >

                    @error('password_confirmation')
                        <p class="text-error text-sm mt-1">{{ $message }}</p>
                    @enderror
                </fieldset>

                <div class="flex justify-end mt-6">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Reset Password') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
```