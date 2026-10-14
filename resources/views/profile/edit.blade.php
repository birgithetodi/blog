```blade
<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="container mx-auto px-4 py-8">
        <div class="max-w-4xl mx-auto space-y-6">

            {{-- Profile Information --}}
            <div class="card bg-base-200 shadow-xl">
                <div class="card-body">
                    <h3 class="card-title">
                        {{ __('Profile Information') }}
                    </h3>

                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            {{-- Update Password --}}
            <div class="card bg-base-200 shadow-xl">
                <div class="card-body">
                    <h3 class="card-title">
                        {{ __('Update Password') }}
                    </h3>

                    @include('profile.partials.update-password-form')
                </div>
            </div>

            {{-- Delete Account --}}
            <div class="card bg-base-200 shadow-xl">
                <div class="card-body">
                    <h3 class="card-title text-error">
                        {{ __('Delete Account') }}
                    </h3>

                    @include('profile.partials.delete-user-form')
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
```