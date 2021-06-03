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

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="bg-blue-100">
        <div class="font-sans text-gray-900 antialiased">
            <header style="margin-bottom: 20px">
                <br/>
                <a href="/dashboard">
                    <div class="flex items-center justify-center bg-white" style="width: 90%; margin-left: 5%; border-top: solid grey 1px; border-left: solid grey 1px; border-right: solid grey 1px">
                        <img src="/img/favicom.png" alt="" width="55px" style="float:  left; margin-top: -25px">
                        <h1 style="font-size: 25px; margin-bottom: 30px"><b>Instalaciones de Fontaneria</b></h1>
                    </div>
                 </a>
                <div class="flex items-center justify-center bg-white shadow-xl" style="width: 90%; margin-left: 5%; border-bottom: solid grey 1px; border-left: solid grey 1px; border-right: solid grey 1px">
                        <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-blue-600 dark-mode:focus:bg-blue-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-blue-200 md:mt-0 md:ml-4 hover:text-blue-900 focus:text-blue-900 hover:bg-blue-200 focus:bg-blue-200 focus:outline-none focus:shadow-outline" href="/tienda/fontaneria">Fontaneria</a>
                        <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-blue-600 dark-mode:focus:bg-blue-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-blue-200 md:mt-0 md:ml-4 hover:text-blue-900 focus:text-blue-900 hover:bg-blue-200 focus:bg-blue-200 focus:outline-none focus:shadow-outline" href="/tienda/citas">Citas</a>
                        <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-blue-600 dark-mode:focus:bg-blue-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-blue-200 md:mt-0 md:ml-4 hover:text-blue-900 focus:text-blue-900 hover:bg-blue-200 focus:bg-blue-200 focus:outline-none focus:shadow-outline" href="/tienda/averias">Averias</a>
                        <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-blue-600 dark-mode:focus:bg-blue-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-blue-200 md:mt-0 md:ml-4 hover:text-blue-900 focus:text-blue-900 hover:bg-blue-200 focus:bg-blue-200 focus:outline-none focus:shadow-outline" href="/tienda/comentarios">Comentarios</a>
                        <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-blue-600 dark-mode:focus:bg-blue-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-blue-200 md:mt-0 md:ml-4 hover:text-blue-900 focus:text-blue-900 hover:bg-blue-200 focus:bg-blue-200 focus:outline-none focus:shadow-outline" href="/tienda/contactenos">Contactenos</a>
                </div>
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-jet-responsive-nav-link href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                    this.closest('form').submit();" style="width: 5%; position: absolute; top:20px; right: 55px;">
                        <img src="data:image/svg+xml;base64,PHN2ZyBpZD0iQ2FwYV8xIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCA1MTIgNTEyIiBoZWlnaHQ9IjUxMiIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHdpZHRoPSI1MTIiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGcgaWQ9IlhNTElEXzE0ODRfIj48cGF0aCBpZD0iWE1MSURfMTY4NF8iIGQ9Im0xMDQgNDBoMjgwdjQzMmgtMjgweiIgZmlsbD0iI2ZmZiIvPjxwYXRoIGlkPSJYTUxJRF8xNjgzXyIgZD0ibTM4NCA0NzIgMTE4IDMwdi00OTJsLTExOCAzMHoiIGZpbGw9IiNmZmNkNjkiLz48cGF0aCBpZD0iWE1MSURfMTE5NV8iIGQ9Im0xMCA4My40NTJoMzMwdjE2MGgtMzMweiIgZmlsbD0iI2ZmN2I3OSIvPjxwYXRoIGlkPSJYTUxJRF8yNDczXyIgZD0ibTI1NiAzNjEtODcuMzg3LTUwLjQ1M3YyMy45NTVoLTEzNC4wNjh2NTIuOTk2aDEzNC4wNjh2MjMuOTU1eiIgZmlsbD0iIzhhYThiZCIvPjxnIGlkPSJYTUxJRF81NTJfIj48cGF0aCBpZD0iWE1MSURfNTczXyIgZD0ibTIxNS43MjcgMjEzLjYzNWM1LjUyMiAwIDEwLTQuNDc4IDEwLTEwdi04MGMwLTUuNTIzLTQuNDc4LTEwLTEwLTEwcy0xMCA0LjQ3Ny0xMCAxMHY4MGMwIDUuNTIyIDQuNDc3IDEwIDEwIDEweiIvPjxwYXRoIGlkPSJYTUxJRF82NDVfIiBkPSJtODMuNDAyIDEzNGM1LjUyMiAwIDEwLTQuNDc3IDEwLTEwIDAtNS41MjItNC40NzgtMTAtMTAtMTBoLTMzLjQwMmMtNS41MjIgMC0xMCA0LjQ3OC0xMCAxMHY3OS4yN2MwIDUuNTIzIDQuNDc4IDEwIDEwIDEwaDMzLjQwMWM1LjUyMiAwIDEwLTQuNDc3IDEwLTEwIDAtNS41MjItNC40NzgtMTAtMTAtMTBoLTIzLjQwMXYtMTkuNjM1aDIwLjkzOGM1LjUyMiAwIDEwLTQuNDc4IDEwLTEwcy00LjQ3OC0xMC0xMC0xMGgtMjAuOTM4di0xOS42MzV6Ii8+PHBhdGggaWQ9IlhNTElEXzY0Nl8iIGQ9Im0xMTMuNjExIDIxMS44MWMxLjc1IDEuMjMzIDMuNzYgMS44MjYgNS43NSAxLjgyNiAzLjE0MyAwIDYuMjM2LTEuNDc3IDguMTg0LTQuMjQybDIxLjk5OS0zMS4yMjggMjEuOTY1IDMxLjIyM2MxLjk0NyAyLjc2OCA1LjA0MiA0LjI0NyA4LjE4OCA0LjI0NyAxLjk4NyAwIDMuOTk1LS41OTIgNS43NDUtMS44MjIgNC41MTctMy4xNzggNS42MDMtOS40MTUgMi40MjUtMTMuOTMzbC0yNi4wODctMzcuMDg0IDIyLjEyMy0zMS40MDRjMy4xODEtNC41MTUgMi4xLTEwLjc1My0yLjQxNi0xMy45MzQtNC41MTQtMy4xODEtMTAuNzUzLTIuMDk5LTEzLjkzNCAyLjQxNmwtMTcuOTk3IDI1LjU0Ni0xNy45NjctMjUuNTQxYy0zLjE3OC00LjUxNi05LjQxMy01LjYwMy0xMy45MzMtMi40MjUtNC41MTcgMy4xNzgtNS42MDMgOS40MTUtMi40MjUgMTMuOTMzbDIyLjA5IDMxLjQwMS0yNi4xMjYgMzcuMDg2Yy0zLjE4MSA0LjUxNi0yLjEgMTAuNzU0IDIuNDE2IDEzLjkzNXoiLz48cGF0aCBpZD0iWE1MSURfNjUwXyIgZD0ibTI1NS43MjcgMTMzLjYzNWgxMi4wMDF2NzBjMCA1LjUyMiA0LjQ3OCAxMCAxMCAxMCA1LjUyMyAwIDEwLTQuNDc4IDEwLTEwdi03MGgxMi4xOGM1LjUyMiAwIDEwLTQuNDc4IDEwLTEwIDAtNS41MjMtNC40NzgtMTAtMTAtMTBoLTQ0LjE4MWMtNS41MjIgMC0xMCA0LjQ3Ny0xMCAxMCAwIDUuNTIyIDQuNDc3IDEwIDEwIDEweiIvPjxwYXRoIGlkPSJYTUxJRF82NTNfIiBkPSJtNTA4LjEzOSAyLjEwNmMtMi40MzgtMS44OTQtNS42MTItMi41NTktOC42MDMtMS43OTdsLTExNi43ODYgMjkuNjkxaC0yNzguNzVjLTUuNTIyIDAtMTAgNC40NzgtMTAgMTB2MzMuNDUyaC04NGMtNS41MjMgMC0xMCA0LjQ3OC0xMCAxMHYxNjBjMCA1LjUyMiA0LjQ3NyAxMCAxMCAxMGg4NHY3MS4wNWgtNTkuNDU1Yy01LjUyMiAwLTEwIDQuNDc3LTEwIDEwdjUyLjk5NmMwIDUuNTIzIDQuNDc4IDEwIDEwIDEwaDU5LjQ1NXY3NC41MDJjMCA1LjUyMiA0LjQ3OCAxMCAxMCAxMGgyNzguNzVsMTE2Ljc4NiAyOS42OTFjLjgxNC4yMDcgMS42NDEuMzA5IDIuNDYzLjMwOSAyLjIwMSAwIDQuMzY2LS43MjcgNi4xNC0yLjEwNiAyLjQzNi0xLjg5NCAzLjg2MS00LjgwOCAzLjg2MS03Ljg5NHYtNDkyYzAtMy4wODYtMS40MjUtNi0zLjg2MS03Ljg5NHptLTQ4OC4xMzkgOTEuMzQ2aDMxMHYxNDBoLTMxMHptMjQuNTQ1IDI1MS4wNWgxMjQuMDY3YzUuNTIyIDAgMTAtNC40NzggMTAtMTB2LTYuNjM1bDU3LjM4OCAzMy4xMzMtNTcuMzg4IDMzLjEzM3YtNi42MzVjMC01LjUyMi00LjQ3OC0xMC0xMC0xMGgtMTI0LjA2N3ptNDQ3LjQ1NSAxNDQuNjM4LTk4LTI0LjkxNXYtMTYzLjE2MmMwLTUuNTIyLTQuNDc4LTEwLTEwLTEwLTUuNTIzIDAtMTAgNC40NzgtMTAgMTB2MTYwLjkzN2gtMjYwdi02NC41MDJoNDQuNjEydjEzLjk1NWMwIDMuNTcyIDEuOTA2IDYuODc0IDUgOC42NiAxLjU0Ny44OTMgMy4yNzMgMS4zNCA1IDEuMzRzMy40NTMtLjQ0NiA1LTEuMzRsODcuMzg4LTUwLjQ1M2MzLjA5NC0xLjc4NiA1LTUuMDg4IDUtOC42NnMtMS45MDYtNi44NzQtNS04LjY2bC04Ny4zODgtNTAuNDUzYy0zLjA5NC0xLjc4Ny02LjkwNi0xLjc4Ny0xMCAwLTMuMDk0IDEuNzg2LTUgNS4wODgtNSA4LjY2djEzLjk1NWgtNDQuNjEydi03MS4wNWgyMjZjNS41MjIgMCAxMC00LjQ3OCAxMC0xMHYtMTYwYzAtNS41MjItNC40NzgtMTAtMTAtMTBoLTIyNnYtMjMuNDUyaDI2MHYxNjEuMDYyYzAgNS41MjMgNC40NzcgMTAgMTAgMTAgNS41MjIgMCAxMC00LjQ3NyAxMC0xMHYtMTYzLjI4Nmw5OC0yNC45MTV6Ii8+PHBhdGggaWQ9IlhNTElEXzY1Nl8iIGQ9Im0zODQuMDYgMjQ2LjA2Yy0yLjYzIDAtNS4yMSAxLjA3LTcuMDY5IDIuOTMxLTEuODYgMS44NTktMi45MzEgNC40MzktMi45MzEgNy4wNjkgMCAyLjY0MSAxLjA3IDUuMjEgMi45MzEgNy4wNyAxLjg1OSAxLjg2IDQuNDQgMi45MyA3LjA2OSAyLjkzIDIuNjMgMCA1LjIxLTEuMDY5IDcuMDctMi45MyAxLjg3LTEuODYgMi45My00LjQ0IDIuOTMtNy4wN3MtMS4wNi01LjItMi45My03LjA2OWMtMS44Ni0xLjg2MS00LjQzLTIuOTMxLTcuMDctMi45MzF6Ii8+PC9nPjwvZz48L3N2Zz4=" />
                    </x-jet-responsive-nav-link>
                </form>
            </header>
            {{ $slot }}
        </div>
    </body>
</html>
