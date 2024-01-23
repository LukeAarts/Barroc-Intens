<section class="space-y-6">
    
    @if($leaseContracts->isEmpty())
        <header>
            <h2 class="text-lg font-medium text-gray-900">
                {{ __('Account verwijderen') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600">
                {{ __('Zodra uw account is verwijderd, worden alle bronnen en gegevens permanent verwijderd. Voordat u uw account verwijdert, downloadt u alle gegevens of informatie die u wilt behouden.') }}
            </p>
        </header>
    @else
        <header>
            <h2 class="text-lg font-medium text-gray-900">
                {{ __('Geen toegang tot verwijderen van account') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600">
                {{ __('U kunt uw account niet direct verwijderen, aangezien er momenteel contracten aan uw account zijn gekoppeld. Klik hieronder om een verzoek in te dienen om al uw contracten te beëindigen.') }}
            </p>
        </header>
    @endif

    @if($leaseContracts->isEmpty())
        <x-danger-button
            x-data=""
            x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
        >
            {{ __('Delete Account') }}
        </x-danger-button>
    @else
        <x-primary-button x-on:click="">
            {{ __('Verzoek om alle contracten te beëindigen') }}
        </x-primary-button>
        
    @endif


    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')

            <h2 class="text-lg font-medium text-gray-900">
                {{ __('Are you sure you want to delete your account?') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600">
                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
            </p>

            <div class="mt-6">
                <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />

                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="mt-1 block w-3/4"
                    placeholder="{{ __('Password') }}"
                />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Cancel') }}
                </x-secondary-button>

                <x-danger-button class="ms-3">
                    {{ __('Delete Account') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</section>
