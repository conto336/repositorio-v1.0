{{-- Navegacion principal para las carreras --}}
<div class="buttons wow fadeInUp my-3">
    <x-nav-link href="{{ route('electronicFiles') }}" role="button"
        :active="request()->routeIs('electronicFiles')">
        <i class="fas fa-microchip"></i> {{ __('Ing. Electrónica') }}
    </x-nav-link>

    <x-nav-link href="{{ route('industrialFiles') }}" role="button"
        :active="request()->routeIs('industrialFiles')">
        <i class="fas fa-industry"></i> {{ __('Ing. Industrial') }}
    </x-nav-link>

    <x-nav-link href="{{ route('geologyFiles') }}" role="button"
        :active="request()->routeIs('geologyFiles')">
        <i class="fas fa-dice-d20"></i> {{ __('Ing. Geológica') }}
    </x-nav-link>
</div>
{{-- fin Navegacion principal para las carreras --}}
