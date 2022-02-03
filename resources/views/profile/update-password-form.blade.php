<x-jet-form-section submit="updatePassword">
    <x-slot name="title">
        {{ __('Actualiza tu contraseña') }}
    </x-slot>
    @if (Auth::user()->id === 1)

    <x-slot name="description">
        {{ __('Asegurate de que sea una contraseña larga, segura y que solo tu sepas!.') }}
    </x-slot>

    <x-slot name="form">
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="current_password" value="{{ __('Contraseña actual: ') }}" />
            <x-jet-input id="current_password" type="password" class="mt-1 block w-full"
                wire:model.defer="state.current_password" autocomplete="current-password" />
            <x-jet-input-error for="current_password" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="password" value="{{ __('Nueva contraseña: ') }}" />
            <div class="flex flex-wrap items-stretch w-full mb-4 relative">
                <div class="flex -mr-px">
                </div>
                <input id="password" type="password"
                    class="flex-shrink flex-grow flex-auto leading-normal w-px flex-1 h-10 px-3 relative border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                    wire:model.defer="state.password" autocomplete="new-password" />
                <div class="flex -mr-px">
                    <span id="password_one"
                        class="flex items-center leading-normal bg-grey-lighter rounded rounded-l-none border border-l-0 border-grey-light px-3 whitespace-no-wrap text-grey-dark text-sm"><i
                           id="eye" class="fa fa-eye"></i></span>
                </div>
            </div>
            {{--<x-jet-input id="password" type="password" class="mt-1 block w-full" wire:model.defer="state.password" autocomplete="new-password" />--}}
            <x-jet-input-error for="password" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="password_confirmation" value="{{ __('Confirma contraseña: ') }}" />
            {{-- <x-jet-input id="password_confirmation" type="password" class="mt-1 block w-full" wire:model.defer="state.password_confirmation" autocomplete="new-password" />--}}
            <div class="flex flex-wrap items-stretch w-full mb-4 relative">
                <div class="flex -mr-px">
                </div>
                <input id="password_confirmation" type="password"
                    class="flex-shrink flex-grow flex-auto leading-normal w-px flex-1 h-10 px-3 relative border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                    wire:model.defer="state.password_confirmation" autocomplete="new-password" />
                <div class="flex -mr-px">
                    <span id="password_two"
                        class="flex items-center leading-normal bg-grey-lighter rounded rounded-l-none border border-l-0 border-grey-light px-3 whitespace-no-wrap text-grey-dark text-sm"><i
                            id="eye_two" class="fa fa-eye"></i></span>
                </div>
            </div>
            <x-jet-input-error for="password_confirmation" class="mt-2" />


        </div>
    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('Guardado.') }}
        </x-jet-action-message>

        <x-jet-button>
            {{ __('Actualizar') }}
        </x-jet-button>
    </x-slot>
    @endif
</x-jet-form-section>
