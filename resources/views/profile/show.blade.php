<x-app-layout>
    @section('title', strtolower(Auth::user()->name) )
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Perfil') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            @if (Laravel\Fortify\Features::canUpdateProfileInformation())
            @livewire('profile.update-profile-information-form')
            @endif
            @if (Auth::user()->id == 1)
            <x-jet-section-border />
            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
            <div class="mt-10 sm:mt-0">
                @livewire('profile.update-password-form')
            </div>

            <x-jet-section-border />
            @endif
            @endif
            {{--
                
            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.update-password-form')
                </div>

                <x-jet-section-border />
            @endif
            
                
            @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.two-factor-authentication-form')
                </div>

                <x-jet-section-border />
            @endif

            <div class="mt-10 sm:mt-0">
                @livewire('profile.logout-other-browser-sessions-form')
            </div>

            @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                <x-jet-section-border />

                <div class="mt-10 sm:mt-0">
                    @livewire('profile.delete-user-form')
                </div>
            @endif
                --}}
        </div>
    </div>
    <script>
        function show(p, p2, e) {
            const eye = document.getElementById(p);
            const password = document.getElementById(p2)
            const eyePssword = document.getElementById(e)
            eye.addEventListener('click', (e) => {
                if (password.type === 'password') {
                    password.type = 'text';
                    eyePssword.classList.add('fa-eye-slash');
                } else {
                    password.type = 'password';
                    eyePssword.classList.remove('fa-eye-slash');
                    eyePssword.classList.add('fa-eye');
                }
            });
        }
        show('password_one', 'password', 'eye');
        show('password_two', 'password_confirmation', 'eye_two');

    </script>
</x-app-layout>
