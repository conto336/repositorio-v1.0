<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }} - @yield('title')</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased">
    <x-jet-banner />

    <div class="min-h-screen bg-gray-100">
        @livewire('navigation-menu')

        <!-- Page Heading -->
        @if (isset($header))
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
        <!-- footer-->
        <script src="https://kit.fontawesome.com/4db6b32bd3.js" crossorigin="anonymous"></script>
        <div class="w-full bg-purple-500 text-white">
            <div class="xl:px-40 pb-12 lg:px-20 md:px-10 sm:px-5 px-10">
                <div class="w-full pt-12 flex flex-col sm:flex-row space-y-2  justify-start">


                </div>
                <div class="grid opacity-60 pt-2">
                    <p>© {{ date('Y') }}  Departamento de Tecnología UNAN-MANGUA.</p>
                    <div class="grid justify-items-end">
                        <p>Designed by: Carlos J Conto <i class="fas fa-robot"></i></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @stack('modals')

    @livewireScripts
</body>

</html>
