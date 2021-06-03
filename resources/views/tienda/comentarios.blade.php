<x-tienda-layout>
    <div class="antialiased mx-auto max-w-screen-sm">
        <form action="/tienda/comentarios">
            @csrf
            <div class="relative text-gray-600" style="position: absolute; right: 380px;">
                <input type="search" name="search" placeholder="Search: Nombre"
                    class="bg-white h-10 px-5 pr-10 rounded-full text-sm focus:outline-none">
                <button type="submit" class="absolute right-0 top-0 mt-3 mr-4">
                    <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                        viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;"
                        xml:space="preserve" width="400px" height="400px">
                        <path
                            d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                    </svg>
                </button>
            </div>
        </form>
        <h3 class="mb-4 text-lg font-semibold text-gray-900">Comentarios</h3>


        <div style="margin-bottom: 35px">
            <form action="/tienda/comentarios/store"method="POST" id="form" enctype="multipart/form-data">
                @csrf
                <textarea name="comentario" id="comentario" cols="70" rows="3" placeholder="Comentario..."></textarea>
                <button id="submit" type="submit" style="float: right; margin-right: 40px;" class="focus:outline-none text-white text-sm py-1 px-2 rounded-md bg-blue-500 hover:bg-blue-600 hover:shadow-lg">
                    Create
                    <img style="width: 20px; float: right; margin-left: 2px" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgNTExLjk5OSA1MTEuOTk5IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MTEuOTk5IDUxMS45OTk7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxnPg0KCTxnPg0KCQk8cGF0aCBkPSJNNTEwLjE1Niw0MDEuODQzTDQ4MC40MTksMzE1LjNjMTQuMzM0LTI5LjMwMiwyMS45MDktNjEuODksMjEuOTYtOTQuNjc5YzAuMDg4LTU3LjAxMy0yMS45Ny0xMTAuOTItNjIuMTEyLTE1MS43OQ0KCQkJQzQwMC4xMTcsMjcuOTUzLDM0Ni42MTUsNC45NDIsMjg5LjYxNSw0LjAzOUMyMzAuNTEsMy4xMDUsMTc0Ljk1NCwyNS41ODcsMTMzLjE4Nyw2Ny4zNTMNCgkJCWMtNDAuMjc0LDQwLjI3My02Mi42MTIsOTMuMzY2LTYzLjMxOSwxNTAuMTAyQzMwLjE3NCwyNDcuMzQxLDYuNzQ1LDI5My45MzYsNi44MjIsMzQzLjcwNQ0KCQkJYzAuMDM3LDIzLjI5LDUuMjc5LDQ2LjQ0MSwxNS4yMTIsNjcuMzc2TDEuNTUxLDQ3MC42ODljLTMuNTIxLDEwLjI0Ny0wLjk0OSwyMS4zNzMsNi43MTMsMjkuMDM1DQoJCQljNS4zOTIsNS4zOTMsMTIuNTAxLDguMjY0LDE5LjgxMiw4LjI2NGMzLjA3NiwwLDYuMTg4LTAuNTA4LDkuMjIzLTEuNTUxbDU5LjYwOS0yMC40ODNjMjAuOTM1LDkuOTMzLDQ0LjA4NiwxNS4xNzUsNjcuMzc2LDE1LjIxMg0KCQkJYzAuMDg0LDAsMC4xNjQsMCwwLjI0OCwwYzUwLjUxLTAuMDAyLDk3LjQ2LTI0LjAzNSwxMjcuMjM3LTY0LjcwMmMzMC45ODctMC44MTYsNjEuNjQ2LTguMzE3LDg5LjM2My0yMS44NzZsODYuNTQ0LDI5LjczOA0KCQkJYzMuNjA2LDEuMjM5LDcuMzA0LDEuODQzLDEwLjk1OSwxLjg0M2M4LjY4OCwwLDE3LjEzNi0zLjQxMiwyMy41NDUtOS44MjJDNTExLjI4NCw0MjcuMjQyLDUxNC4zNCw0MTQuMDIxLDUxMC4xNTYsNDAxLjg0M3oNCgkJCSBNMTY0LjUzLDQ3MC42OWMtMC4wNjUsMC0wLjEzNCwwLTAuMTk5LDBjLTIwLjYxNC0wLjAzMS00MS4wODUtNS4xMTMtNTkuMTk2LTE0LjY5NWMtMy43MjQtMS45NjktOC4wOTYtMi4zMS0xMi4wNzgtMC45NDINCgkJCWwtNjEuMTIzLDIxLjAwM2wyMS4wMDMtNjEuMTIyYzEuMzY4LTMuOTgzLDEuMDI4LTguMzU1LTAuOTQyLTEyLjA3OGMtOS41ODItMTguMTEyLTE0LjY2NC0zOC41ODItMTQuNjk2LTU5LjE5Nw0KCQkJYy0wLjA1MS0zMy4xNTksMTIuODQ4LTY0LjU4OCwzNS40MDUtODguMTIyYzcuMzY4LDQ0LjkxNiwyOC43NzUsODYuMzA2LDYxLjk1NywxMTguODk4DQoJCQljMzIuOTM3LDMyLjM1MSw3NC4zMzksNTIuOTQ5LDExOS4wMTEsNTkuNjgzQzIzMC4wODQsNDU3LjM2NywxOTguMjg4LDQ3MC42OSwxNjQuNTMsNDcwLjY5eiBNNDgwLjYyOCw0MTQuNzk3DQoJCQljLTAuODY3LDAuODY3LTEuODk1LDEuMTAzLTMuMDUxLDAuNzA1bC05Mi42NDgtMzEuODM2Yy0xLjYwOS0wLjU1My0zLjI4My0wLjgyNy00Ljk1MS0wLjgyN2MtMi40NTksMC00LjkwOSwwLjU5NS03LjEyNiwxLjc2OQ0KCQkJYy0yNi40NTMsMTMuOTk0LTU2LjM0NSwyMS40MTYtODYuNDQ3LDIxLjQ2MmMtMC4wOTksMC0wLjE4OSwwLTAuMjg4LDBjLTEwMC44NjMsMC0xODQuMTc2LTgxLjkzNC0xODUuNzc0LTE4Mi43NzMNCgkJCWMtMC44MDUtNTAuNzg1LDE4LjUxMy05OC41MTQsNTQuMzk0LTEzNC4zOTVjMzUuODgxLTM1Ljg4MSw4My42MTgtNTUuMTkyLDEzNC4zOTYtNTQuMzkyDQoJCQljMTAwLjkzNiwxLjYwMSwxODIuOTI2LDg1LjA2OCwxODIuNzcsMTg2LjA2M2MtMC4wNDcsMzAuMTAyLTcuNDY4LDU5Ljk5NS0yMS40NjEsODYuNDQ2Yy0xLjk3LDMuNzIzLTIuMzEsOC4wOTUtMC45NDIsMTIuMDc4DQoJCQlsMzEuODM1LDkyLjY0OEM0ODEuNzMyLDQxMi45MDUsNDgxLjQ5NCw0MTMuOTMyLDQ4MC42MjgsNDE0Ljc5N3oiLz4NCgk8L2c+DQo8L2c+DQo8Zz4NCgk8Zz4NCgkJPHBhdGggZD0iTTM3Ni44OTIsMTM5LjUxMmgtMTgxLjU2Yy04LjQxNiwwLTE1LjIzOCw2LjgyMy0xNS4yMzgsMTUuMjM4YzAsOC40MTYsNi44MjMsMTUuMjM4LDE1LjIzOCwxNS4yMzhoMTgxLjU2DQoJCQljOC40MTYsMCwxNS4yMzgtNi44MjMsMTUuMjM4LTE1LjIzOEMzOTIuMTMsMTQ2LjMzNSwzODUuMzA4LDEzOS41MTIsMzc2Ljg5MiwxMzkuNTEyeiIvPg0KCTwvZz4NCjwvZz4NCjxnPg0KCTxnPg0KCQk8cGF0aCBkPSJNMzc2Ljg5MiwyMDIuMTgzaC0xODEuNTZjLTguNDE2LDAtMTUuMjM4LDYuODIzLTE1LjIzOCwxNS4yMzhzNi44MjMsMTUuMjM4LDE1LjIzOCwxNS4yMzhoMTgxLjU2DQoJCQljOC40MTYsMCwxNS4yMzgtNi44MjMsMTUuMjM4LTE1LjIzOFMzODUuMzA4LDIwMi4xODMsMzc2Ljg5MiwyMDIuMTgzeiIvPg0KCTwvZz4NCjwvZz4NCjxnPg0KCTxnPg0KCQk8cGF0aCBkPSJNMzA3LjAwNCwyNjQuODUySDE5NS4zMzFjLTguNDE2LDAtMTUuMjM4LDYuODIzLTE1LjIzOCwxNS4yMzhjMCw4LjQxNiw2LjgyMywxNS4yMzgsMTUuMjM4LDE1LjIzOGgxMTEuNjcyDQoJCQljOC40MTYsMCwxNS4yMzgtNi44MjMsMTUuMjM4LTE1LjIzOEMzMjIuMjQxLDI3MS42NzUsMzE1LjQyLDI2NC44NTIsMzA3LjAwNCwyNjQuODUyeiIvPg0KCTwvZz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjwvc3ZnPg0K" />
                </button>
            </form>
        </div>

        @foreach ($comentarios as $comentario)
        <div class="space-y-4" style="width: 94%; margin-bottom: 10px">
            <div class="flex">
                <div class="flex-shrink-0 mr-3">
                    <img class="mt-2 rounded-full w-8 h-8 sm:w-10 sm:h-10 border border-white" src="/img/{{$comentario->user->profile_photo_path}}" alt="...">
                </div>
                <div class="flex-1 border border-white rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed">
                    <strong>{{ucwords($comentario->user->name)}}</strong><span class="text-xs text-gray-400"> {{$comentario->created_at}}</span>
                    <p class="text-sm">{{$comentario->comentario}}</p>
                    @if ($user->role_id == 1)
                    <a href="/tienda/comentarios/{{ $comentario->id }}/delete">
                        <button style="margin-right: -10px; float: right; margin-top: -50px;" type="button" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">
                            <img style="width: 20px; float: right; margin-left: 2px" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjUxMnB0IiB2aWV3Qm94PSItNDcgMCA1MTIgNTEyIiB3aWR0aD0iNTEycHQiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0ibTQxNi44NzUgMTE0LjQ0MTQwNi0xMS4zMDQ2ODgtMzMuODg2NzE4Yy00LjMwNDY4Ny0xMi45MDYyNS0xNi4zMzk4NDMtMjEuNTc4MTI2LTI5Ljk0MTQwNi0yMS41NzgxMjZoLTk1LjAxMTcxOHYtMzAuOTMzNTkzYzAtMTUuNDYwOTM4LTEyLjU3MDMxMy0yOC4wNDI5NjktMjguMDI3MzQ0LTI4LjA0Mjk2OWgtODcuMDA3ODEzYy0xNS40NTMxMjUgMC0yOC4wMjczNDMgMTIuNTgyMDMxLTI4LjAyNzM0MyAyOC4wNDI5Njl2MzAuOTMzNTkzaC05NS4wMDc4MTNjLTEzLjYwNTQ2OSAwLTI1LjY0MDYyNSA4LjY3MTg3Ni0yOS45NDUzMTMgMjEuNTc4MTI2bC0xMS4zMDQ2ODcgMzMuODg2NzE4Yy0yLjU3NDIxOSA3LjcxNDg0NC0xLjI2OTUzMTIgMTYuMjU3ODEzIDMuNDg0Mzc1IDIyLjg1NTQ2OSA0Ljc1MzkwNiA2LjU5NzY1NiAxMi40NDUzMTIgMTAuNTM5MDYzIDIwLjU3ODEyNSAxMC41MzkwNjNoMTEuODE2NDA2bDI2LjAwNzgxMyAzMjEuNjA1NDY4YzEuOTMzNTk0IDIzLjg2MzI4MiAyMi4xODM1OTQgNDIuNTU4NTk0IDQ2LjEwOTM3NSA0Mi41NTg1OTRoMjA0Ljg2MzI4MWMyMy45MjE4NzUgMCA0NC4xNzU3ODEtMTguNjk1MzEyIDQ2LjEwNTQ2OS00Mi41NjI1bDI2LjAwNzgxMi0zMjEuNjAxNTYyaDYuNTQyOTY5YzguMTMyODEyIDAgMTUuODI0MjE5LTMuOTQxNDA3IDIwLjU3ODEyNS0xMC41MzUxNTcgNC43NTM5MDYtNi41OTc2NTYgNi4wNTg1OTQtMTUuMTQ0NTMxIDMuNDg0Mzc1LTIyLjg1OTM3NXptLTI0OS4zMjAzMTItODQuNDQxNDA2aDgzLjA2MjV2MjguOTc2NTYyaC04My4wNjI1em0xNjIuODA0Njg3IDQzNy4wMTk1MzFjLS42Nzk2ODcgOC40MDIzNDQtNy43OTY4NzUgMTQuOTgwNDY5LTE2LjIwMzEyNSAxNC45ODA0NjloLTIwNC44NjMyODFjLTguNDA2MjUgMC0xNS41MjM0MzgtNi41NzgxMjUtMTYuMjAzMTI1LTE0Ljk4MDQ2OWwtMjUuODE2NDA2LTMxOS4xODM1OTNoMjg4Ljg5ODQzN3ptLTI5OC41NjY0MDYtMzQ5LjE4MzU5MyA5LjI2OTUzMS0yNy43ODkwNjNjLjIxMDkzOC0uNjQwNjI1LjgwODU5NC0xLjA3MDMxMyAxLjQ4NDM3NS0xLjA3MDMxM2gzMzMuMDgyMDMxYy42NzU3ODIgMCAxLjI2OTUzMi40Mjk2ODggMS40ODQzNzUgMS4wNzAzMTNsOS4yNjk1MzEgMjcuNzg5MDYzem0wIDAiLz48cGF0aCBkPSJtMjgyLjUxNTYyNSA0NjUuOTU3MDMxYy4yNjU2MjUuMDE1NjI1LjUyNzM0NC4wMTk1MzEuNzkyOTY5LjAxOTUzMSA3LjkyNTc4MSAwIDE0LjU1MDc4MS02LjIxMDkzNyAxNC45NjQ4NDQtMTQuMjE4NzVsMTQuMDg1OTM3LTI3MC4zOTg0MzdjLjQyOTY4Ny04LjI3MzQzNy01LjkyOTY4Ny0xNS4zMzIwMzEtMTQuMTk5MjE5LTE1Ljc2MTcxOS04LjI5Mjk2OC0uNDQxNDA2LTE1LjMyODEyNSA1LjkyNTc4Mi0xNS43NjE3MTggMTQuMTk5MjE5bC0xNC4wODIwMzIgMjcwLjM5ODQzN2MtLjQyOTY4NyA4LjI3MzQzOCA1LjkyNTc4MiAxNS4zMzIwMzIgMTQuMTk5MjE5IDE1Ljc2MTcxOXptMCAwIi8+PHBhdGggZD0ibTEyMC41NjY0MDYgNDUxLjc5Mjk2OWMuNDM3NSA3Ljk5NjA5MyA3LjA1NDY4OCAxNC4xODM1OTMgMTQuOTY0ODQ0IDE0LjE4MzU5My4yNzM0MzggMCAuNTU0Njg4LS4wMDc4MTIuODMyMDMxLS4wMjM0MzcgOC4yNjk1MzEtLjQ0OTIxOSAxNC42MDkzNzUtNy41MTk1MzEgMTQuMTYwMTU3LTE1Ljc5Mjk2OWwtMTQuNzUzOTA3LTI3MC4zOTg0MzdjLS40NDkyMTktOC4yNzM0MzgtNy41MTk1MzEtMTQuNjEzMjgxLTE1Ljc5Mjk2OS0xNC4xNjAxNTctOC4yNjk1MzEuNDQ5MjE5LTE0LjYwOTM3NCA3LjUxOTUzMi0xNC4xNjAxNTYgMTUuNzkyOTY5em0wIDAiLz48cGF0aCBkPSJtMjA5LjI1MzkwNiA0NjUuOTc2NTYyYzguMjg1MTU2IDAgMTUtNi43MTQ4NDMgMTUtMTV2LTI3MC4zOTg0MzdjMC04LjI4NTE1Ni02LjcxNDg0NC0xNS0xNS0xNXMtMTUgNi43MTQ4NDQtMTUgMTV2MjcwLjM5ODQzN2MwIDguMjg1MTU3IDYuNzE0ODQ0IDE1IDE1IDE1em0wIDAiLz48L3N2Zz4=" />
                        </button></a>
                    @endif
                </div>
            </div>
        </div>
        @endforeach
        {{$comentarios->Links()}}
</x-tienda-layout>
