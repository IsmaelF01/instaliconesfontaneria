<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles
        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>

        <!-- FullCalendar -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.7.0/main.css">
        <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.7.0/main.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.7.0/locales-all.js"></script>

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
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-jet-dropdown-link href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();" style="width: 15%; float: right; margin-top: -130px; margin-right: 20px">
                            <img style="float: right" class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" /> <p style="float: right; margin-right: 5px; margin-top: 5px"><b>Exit</b></p>
                        </x-jet-dropdown-link>
                    </form>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts

    </body>
</html>
