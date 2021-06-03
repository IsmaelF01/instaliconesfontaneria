<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Citas') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <h1 style="text-align: center; font-size: 20px"><b>Citas</b></h1>
                <form action="/intranet/trabajador/citas">
                    @csrf
                    <div class="relative text-gray-600" style="position: absolute; right: 80px;">
                        <input type="search" name="search" placeholder="Search: Estado"
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
                </form><hr>
                <table class="w-full text-md bg-white shadow-md rounded mb-4">
                    <tbody>
                        <tr class="border-b">
                            <th class="text-left p-3 px-5">Nombre_user</th>
                            <th class="text-left p-3 px-5">Estado</th>
                            <th class="text-left p-3 px-5">Descripcion</th>
                            <th class="text-left p-3 px-5">Fecha</th>
                            <th class="text-left p-3 px-5">Hora</th>
                            <th></th>
                        </tr>
                        @foreach ($citas as $cita)
                            <tr class="border-b hover:bg-orange-100 bg-gray-100">
                                <td class="p-3 px-5" style="width: 150px">{{ $cita->user->name }}</td>
                                <td class="p-3 px-5" style="width: 150px">{{ $cita->estado }}</td>
                                <td class="p-3 px-5" style="width: 250px">{{ $cita->descripcion }}</td>
                                <form action="/intranet/trabajador/citas/{{$cita->id}}/fecha_cita" method="POST" id="form" enctype="multipart/form-data">
                                    @csrf
                                @if (isset($cita->fecha))
                                    <td class="p-3 px-5" style="width: 150px">{{ $cita->fecha }}</td>
                                @else
                                <td class="p-3 px-5" style="width: 200px"><input style="width: 90%" type="date" name="fecha" id="fecha" placeholder="yyyy-mm-dd"></td>
                                @endif
                                @if (isset($cita->hora))
                                    <td class="p-3 px-5" style="width: 150px">{{ $cita->hora }}</td>
                                @else
                                <td class="p-3 px-5" style="width: 150px"><input style="width: 90%" type="time" name="hora" id="hora" placeholder="hh:mm"></td>
                                @endif
                                <td class="p-3 px-5 flex justify-end">
                                    <div style="margin-top: 20px">
                                        @if (!isset($cita->fecha))
                                        <button id="submit" type="submit" style=" margin-left: -85px; margin-right: 10px" class="focus:outline-none text-white text-sm py-1 px-2 rounded-md bg-blue-500 hover:bg-blue-600 hover:shadow-lg">
                                            Date
                                            <img style="width: 20px; float: right; margin-left: 2px" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGc+DQoJPGc+DQoJCTxnPg0KCQkJPHBhdGggZD0iTTM4NC4wMTgsNDI5LjEwMWwyMy44MjUsMzIuMDM0YzExLjU0MS04LjU4NCwyMi40MzktMTguMjE1LDMyLjM5LTI4LjYyNmwtMjguODYtMjcuNTg0DQoJCQkJQzQwMi45NjgsNDEzLjcxOCwzOTMuNzY0LDQyMS44NTMsMzg0LjAxOCw0MjkuMTAxeiIvPg0KCQkJPHBhdGggZD0iTTMxOS4yMjcsNDYyLjAxMWwxMS43ODQsMzguMTQzYzEzLjc0Ny00LjI0NywyNy4yMzQtOS43MSw0MC4wODMtMTYuMjM5bC0xOC4wODQtMzUuNTkxDQoJCQkJQzM0Mi4xNzgsNDUzLjgyNywzMzAuODEyLDQ1OC40MzIsMzE5LjIyNyw0NjIuMDExeiIvPg0KCQkJPHBhdGggZD0iTTQzNC4yODQsMzc2LjUwNWwzMy4wODEsMjIuMzQ2YzguMDcyLTExLjk1LDE1LjE2Ny0yNC42NTcsMjEuMDkxLTM3Ljc2OGwtMzYuMzgyLTE2LjQzNQ0KCQkJCUM0NDcuMDc5LDM1NS43MDQsNDQxLjA5NCwzNjYuNDIyLDQzNC4yODQsMzc2LjUwNXoiLz4NCgkJCTxwb2x5Z29uIHBvaW50cz0iMjM2LjUzOCwyMzYuMDM5IDEyNC43NTYsMjM2LjAzOSAxMjQuNzU2LDI3NS45NjEgMjc2LjQ2LDI3NS45NjEgMjc2LjQ2LDc2LjM1MSAyMzYuNTM4LDc2LjM1MSAJCQkiLz4NCgkJCTxwYXRoIGQ9Ik00NzIuMDc4LDQ2LjQwOXY3My45MzFjLTE4Ljc3MS0yOS45NjEtNDMuNjMtNTUuNzg2LTczLjI5Ni03NS45MTNDMzU2LjQyMywxNS42ODksMzA2Ljg3OCwwLjQ5OSwyNTUuNTAxLDAuNDk5DQoJCQkJYy02OC4yNDcsMC0xMzIuNDA4LDI2LjU3Ny0xODAuNjY3LDc0LjgzNEMyNi41NzcsMTIzLjU5MiwwLDE4Ny43NTMsMCwyNTZzMjYuNTc3LDEzMi40MDgsNzQuODM0LDE4MC42NjcNCgkJCQljNDguMjU5LDQ4LjI1NywxMTIuNDIsNzQuODM0LDE4MC42NjcsNzQuODM0YzExLjExMSwwLDIyLjI5NS0wLjcyMiwzMy4yNDEtMi4xNDVsLTUuMTQ2LTM5LjU4OQ0KCQkJCWMtOS4yNDYsMS4yMDItMTguNjk3LDEuODEyLTI4LjA5NCwxLjgxMmMtMTE4Ljg3MSwwLTIxNS41NzktOTYuNzA4LTIxNS41NzktMjE1LjU3OVMxMzYuNjMxLDQwLjQyMSwyNTUuNTAyLDQwLjQyMQ0KCQkJCWM3Ny4xNTcsMCwxNDcuMTc1LDQwLjY5NiwxODUuNjA0LDEwNS43OTNoLTY4LjgzM3YzOS45MjJINTEyVjQ2LjQwOUg0NzIuMDc4eiIvPg0KCQkJPHBhdGggZD0iTTQ3MC4zMjEsMjczLjk2NWMtMC4xNzgsMi4xMjktMC4zOSw0LjI0OC0wLjYyNyw2LjM2bDAuMDE5LDAuMDAxYy0xLjEzNiwxMC4xMDItMi45NzYsMjAuMTQzLTUuNTExLDI5LjkyNQ0KCQkJCWwzOC42NDYsMTAuMDEzYzMuNjA1LTEzLjkxMSw2LjA0NS0yOC4yNTYsNy4yNTEtNDIuNjM0bC0wLjAyOS0wLjAwMmMwLjEwNi0xLjIyLDAuMjEyLTIuNDM5LDAuMjk3LTMuNjYzSDQ3MC4zMjF6Ii8+DQoJCTwvZz4NCgk8L2c+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8L3N2Zz4NCg==" />
                                        </button>
                                        @endif
                                    </form>

                                    <a href="/intranet/trabajador/citas/{{$cita->id}}/update_cita">
                                        <button style="margin-right: 10px;" type="button" class="focus:outline-none text-white text-sm py-1 px-2 rounded-md bg-yellow-500 hover:bg-yellow-600 hover:shadow-lg">
                                            Update
                                        <img style="width: 20px; float: right; margin-left: 2px" src="data:image/svg+xml;base64,PHN2ZyBpZD0iQ2FwYV8xIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCA1MTIgNTEyIiBoZWlnaHQ9IjUxMiIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHdpZHRoPSI1MTIiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGc+PHBhdGggZD0ibTM4OC45MjIgMzI1LjI4MmM0LjA4My03LjgwMyA3LjQ1My0xNS45MTcgMTAuMDg2LTI0LjI4MmgxNi45OTJjOC4yODQgMCAxNS02LjcxNiAxNS0xNXYtNjBjMC04LjI4NC02LjcxNi0xNS0xNS0xNWgtMTYuOTkyYy0yLjYzMy04LjM2NS02LjAwMy0xNi40NzktMTAuMDg2LTI0LjI4MmwxMi4wMzUtMTIuMDM1YzUuODU4LTUuODU4IDUuODU4LTE1LjM1NSAwLTIxLjIxM2wtNDIuNDI3LTQyLjQyN2MtNS44NTctNS44NTgtMTUuMzU1LTUuODU4LTIxLjIxMyAwbC0xMi4wMzUgMTIuMDM1Yy03LjgwMi00LjA4Mi0xNS45MTgtNy40NTQtMjQuMjgyLTEwLjA4NnYtMTYuOTkyYzAtOC4yODQtNi43MTYtMTUtMTUtMTVoLTYwYy04LjI4NCAwLTE1IDYuNzE2LTE1IDE1djE2Ljk5MmMtOC4zNjQgMi42MzMtMTYuNDggNi4wMDQtMjQuMjgyIDEwLjA4NmwtMTIuMDM1LTEyLjAzNWMtMi44MTItMi44MTMtNi42MjgtNC4zOTQtMTAuNjA2LTQuMzk0cy03Ljc5NCAxLjU4MS0xMC42MDYgNC4zOTRsLTQyLjQyNiA0Mi40MjdjLTUuODU4IDUuODU4LTUuODU4IDE1LjM1NSAwIDIxLjIxM2wxMi4wMzQgMTIuMDM1Yy00LjA4MyA3LjgwMy03LjQ1MyAxNS45MTctMTAuMDg2IDI0LjI4M2gtMTYuOTkzYy04LjI4NCAwLTE1IDYuNzE2LTE1IDE1djYwYzAgOC4yODQgNi43MTYgMTUgMTUgMTVoMTYuOTkyYzIuNjMzIDguMzY2IDYuMDAzIDE2LjQ4IDEwLjA4NiAyNC4yODNsLTEyLjAzNCAxMi4wMzRjLTUuODU4IDUuODU4LTUuODU4IDE1LjM1NSAwIDIxLjIxM2w0Mi40MjYgNDIuNDI3YzIuODEyIDIuODEzIDYuNjI4IDQuMzk0IDEwLjYwNiA0LjM5NHM3Ljc5NC0xLjU4MSAxMC42MDYtNC4zOTRsMTIuMDM1LTEyLjAzNWM3LjgwMiA0LjA4MiAxNS45MTggNy40NTMgMjQuMjgyIDEwLjA4NnYxNi45OTFjMCA4LjI4NCA2LjcxNiAxNSAxNSAxNWg2MGM4LjI4NCAwIDE1LTYuNzE2IDE1LTE1di0xNi45OTJjOC4zNjUtMi42MzMgMTYuNDc5LTYuMDA0IDI0LjI4Mi0xMC4wODZsMTIuMDM1IDEyLjAzNWM1Ljg1NyA1Ljg1OCAxNS4zNTUgNS44NTggMjEuMjEzIDBsNDIuNDI3LTQyLjQyN2M1Ljg1OC01Ljg1OCA1Ljg1OC0xNS4zNTUgMC0yMS4yMTN6bS0xNi4wMS00Mi42MDZjLTIuOTgxIDEzLjEyMi04LjE2NSAyNS42MDQtMTUuNDA3IDM3LjEtMy43MzIgNS45MjctMi44NjcgMTMuNjQ4IDIuMDg2IDE4LjYwMWw5LjU0NyA5LjU0Ny0yMS4yMTQgMjEuMjEzLTkuNTQ3LTkuNTQ2Yy00Ljk1Mi00Ljk1My0xMi42NzYtNS44MTktMTguNjAxLTIuMDg1LTExLjQ5NyA3LjI0MS0yMy45NzkgMTIuNDI1LTM3LjEwMSAxNS40MDctNi44MjggMS41NTItMTEuNjc1IDcuNjIzLTExLjY3NSAxNC42Mjd2MTMuNDZoLTMwdi0xMy40NjFjMC03LjAwMy00Ljg0Ny0xMy4wNzUtMTEuNjc2LTE0LjYyNy0xMy4xMjEtMi45ODItMjUuNjA0LTguMTY1LTM3LjEwMS0xNS40MDYtNS45MjgtMy43MzMtMTMuNjQ4LTIuODY4LTE4LjYwMSAyLjA4NWwtOS41NDcgOS41NDYtMjEuMjEzLTIxLjIxMyA5LjU0Ni05LjU0NmM0Ljk1My00Ljk1MyA1LjgxOC0xMi42NzQgMi4wODYtMTguNjAxLTcuMjQxLTExLjQ5Ni0xMi40MjUtMjMuOTc4LTE1LjQwNy0zNy4xMDEtMS41NTItNi44My03LjYyMy0xMS42NzYtMTQuNjI3LTExLjY3NmgtMTMuNDZ2LTMwaDEzLjQ2MWM3LjAwNCAwIDEzLjA3NS00Ljg0NyAxNC42MjctMTEuNjc2IDIuOTgxLTEzLjEyMiA4LjE2NS0yNS42MDQgMTUuNDA3LTM3LjEgMy43MzItNS45MjcgMi44NjctMTMuNjQ4LTIuMDg2LTE4LjYwMWwtOS41NDYtOS41NDYgMjEuMjEzLTIxLjIxMyA5LjU0NyA5LjU0NmM0Ljk1MiA0Ljk1NCAxMi42NzYgNS44MTkgMTguNjAxIDIuMDg1IDExLjQ5Ny03LjI0MSAyMy45NzktMTIuNDI0IDM3LjEwMS0xNS40MDYgNi44MjktMS41NTIgMTEuNjc2LTcuNjI0IDExLjY3Ni0xNC42Mjd2LTEzLjQ2MmgzMHYxMy40NjFjMCA3LjAwNCA0Ljg0NyAxMy4wNzUgMTEuNjc2IDE0LjYyNyAxMy4xMjEgMi45ODEgMjUuNjAzIDguMTY1IDM3LjEwMSAxNS40MDcgNS45MjcgMy43MzMgMTMuNjQ3IDIuODY3IDE4LjYwMS0yLjA4NWw5LjU0Ny05LjU0NiAyMS4yMTQgMjEuMjEzLTkuNTQ3IDkuNTQ3Yy00Ljk1MyA0Ljk1My01LjgxOCAxMi42NzQtMi4wODYgMTguNjAxIDcuMjQyIDExLjQ5NiAxMi40MjYgMjMuOTc4IDE1LjQwNyAzNy4xIDEuNTUyIDYuODMgNy42MjMgMTEuNjc2IDE0LjYyNyAxMS42NzZoMTMuNDU5djMwaC0xMy40NjFjLTcuMDA0LS4wMDEtMTMuMDc1IDQuODQ2LTE0LjYyNyAxMS42NzV6Ii8+PHBhdGggZD0ibTI1NiAxNjFjLTUyLjM4MyAwLTk1IDQyLjYxNy05NSA5NXM0Mi42MTcgOTUgOTUgOTUgOTUtNDIuNjE3IDk1LTk1LTQyLjYxNy05NS05NS05NXptMCAxNjBjLTM1Ljg0MSAwLTY1LTI5LjE1OS02NS02NXMyOS4xNTktNjUgNjUtNjUgNjUgMjkuMTU5IDY1IDY1LTI5LjE1OSA2NS02NSA2NXoiLz48cGF0aCBkPSJtNDY2LjQxMiA0MTEuNDEzaC02Ljk1OGMzNC4wNzUtNDQuNDE4IDUyLjU0Ni05OC40OTEgNTIuNTQ2LTE1NS40MTMgMC02OC4zOC0yNi42MjktMTMyLjY2Ny03NC45OC0xODEuMDItNDguMzUzLTQ4LjM1MS0xMTIuNjQtNzQuOTgtMTgxLjAyLTc0Ljk4LTM0LjU1NCAwLTY4LjA4MSA2Ljc3MS05OS42NTEgMjAuMTI0LTcuNjMgMy4yMjctMTEuMTk4IDEyLjAyOS03Ljk3MiAxOS42NTggMy4yMjggNy42MyAxMi4wMjQgMTEuMTk4IDE5LjY1OSA3Ljk3MiAyNy44NTItMTEuNzgxIDU3LjQ0Ny0xNy43NTQgODcuOTY0LTE3Ljc1NCAxMjQuNjE3IDAgMjI2IDEwMS4zODMgMjI2IDIyNiAwIDQ2Ljk1My0xNC4yMzQgOTEuNzExLTQwLjYzOSAxMjkuMzcyLS41MzctNy43OTctNy4wMTUtMTMuOTU5LTE0Ljk0OC0xMy45NTktOC4yODQgMC0xNSA2LjcxNi0xNSAxNXY0MGMwIDguMjg0IDYuNzE2IDE1IDE1IDE1aDM5Ljk5OWM4LjI4NCAwIDE1LTYuNzE2IDE1LTE1cy02LjcxNi0xNS0xNS0xNXoiLz48cGF0aCBkPSJtMzQzLjk2NCA0NjQuMjQ2Yy0yNy44NTIgMTEuNzgxLTU3LjQ0NyAxNy43NTQtODcuOTY0IDE3Ljc1NC0xMjQuNjE3IDAtMjI2LTEwMS4zODMtMjI2LTIyNiAwLTQ2Ljk1NyAxNC4yMjktOTEuNzI0IDQwLjYzOS0xMjkuMzg4LjUyOSA3LjgwNCA3LjAxIDEzLjk3NSAxNC45NDggMTMuOTc1IDguMjg0IDAgMTUtNi43MTYgMTUtMTV2LTQwYzAtOC4yODQtNi43MTYtMTUtMTUtMTVoLTQwYy04LjI4NCAwLTE1IDYuNzE2LTE1IDE1czYuNzE2IDE1IDE1IDE1aDYuOTY1Yy0zNC4wNzggNDQuNDE3LTUyLjU1MiA5OC40OS01Mi41NTIgMTU1LjQxMyAwIDY4LjM4IDI2LjYyOSAxMzIuNjY3IDc0Ljk4IDE4MS4wMiA0OC4zNTMgNDguMzUxIDExMi42NCA3NC45OCAxODEuMDIgNzQuOTggMzQuNTU0IDAgNjguMDgxLTYuNzcxIDk5LjY1MS0yMC4xMjQgNy42My0zLjIyNyAxMS4xOTgtMTIuMDI5IDcuOTcyLTE5LjY1OC0zLjIyNy03LjYzMS0xMi4wMjYtMTEuMi0xOS42NTktNy45NzJ6Ii8+PC9nPjwvc3ZnPg==" />
                                        </button></a>

                                    <a href="/intranet/trabajador/citas/{{ $cita->id }}/delete_cita">
                                    <button style="margin-right: 10px" type="button" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">
                                        Delete
                                        <img style="width: 20px; float: right; margin-left: 2px" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjUxMnB0IiB2aWV3Qm94PSItNDcgMCA1MTIgNTEyIiB3aWR0aD0iNTEycHQiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0ibTQxNi44NzUgMTE0LjQ0MTQwNi0xMS4zMDQ2ODgtMzMuODg2NzE4Yy00LjMwNDY4Ny0xMi45MDYyNS0xNi4zMzk4NDMtMjEuNTc4MTI2LTI5Ljk0MTQwNi0yMS41NzgxMjZoLTk1LjAxMTcxOHYtMzAuOTMzNTkzYzAtMTUuNDYwOTM4LTEyLjU3MDMxMy0yOC4wNDI5NjktMjguMDI3MzQ0LTI4LjA0Mjk2OWgtODcuMDA3ODEzYy0xNS40NTMxMjUgMC0yOC4wMjczNDMgMTIuNTgyMDMxLTI4LjAyNzM0MyAyOC4wNDI5Njl2MzAuOTMzNTkzaC05NS4wMDc4MTNjLTEzLjYwNTQ2OSAwLTI1LjY0MDYyNSA4LjY3MTg3Ni0yOS45NDUzMTMgMjEuNTc4MTI2bC0xMS4zMDQ2ODcgMzMuODg2NzE4Yy0yLjU3NDIxOSA3LjcxNDg0NC0xLjI2OTUzMTIgMTYuMjU3ODEzIDMuNDg0Mzc1IDIyLjg1NTQ2OSA0Ljc1MzkwNiA2LjU5NzY1NiAxMi40NDUzMTIgMTAuNTM5MDYzIDIwLjU3ODEyNSAxMC41MzkwNjNoMTEuODE2NDA2bDI2LjAwNzgxMyAzMjEuNjA1NDY4YzEuOTMzNTk0IDIzLjg2MzI4MiAyMi4xODM1OTQgNDIuNTU4NTk0IDQ2LjEwOTM3NSA0Mi41NTg1OTRoMjA0Ljg2MzI4MWMyMy45MjE4NzUgMCA0NC4xNzU3ODEtMTguNjk1MzEyIDQ2LjEwNTQ2OS00Mi41NjI1bDI2LjAwNzgxMi0zMjEuNjAxNTYyaDYuNTQyOTY5YzguMTMyODEyIDAgMTUuODI0MjE5LTMuOTQxNDA3IDIwLjU3ODEyNS0xMC41MzUxNTcgNC43NTM5MDYtNi41OTc2NTYgNi4wNTg1OTQtMTUuMTQ0NTMxIDMuNDg0Mzc1LTIyLjg1OTM3NXptLTI0OS4zMjAzMTItODQuNDQxNDA2aDgzLjA2MjV2MjguOTc2NTYyaC04My4wNjI1em0xNjIuODA0Njg3IDQzNy4wMTk1MzFjLS42Nzk2ODcgOC40MDIzNDQtNy43OTY4NzUgMTQuOTgwNDY5LTE2LjIwMzEyNSAxNC45ODA0NjloLTIwNC44NjMyODFjLTguNDA2MjUgMC0xNS41MjM0MzgtNi41NzgxMjUtMTYuMjAzMTI1LTE0Ljk4MDQ2OWwtMjUuODE2NDA2LTMxOS4xODM1OTNoMjg4Ljg5ODQzN3ptLTI5OC41NjY0MDYtMzQ5LjE4MzU5MyA5LjI2OTUzMS0yNy43ODkwNjNjLjIxMDkzOC0uNjQwNjI1LjgwODU5NC0xLjA3MDMxMyAxLjQ4NDM3NS0xLjA3MDMxM2gzMzMuMDgyMDMxYy42NzU3ODIgMCAxLjI2OTUzMi40Mjk2ODggMS40ODQzNzUgMS4wNzAzMTNsOS4yNjk1MzEgMjcuNzg5MDYzem0wIDAiLz48cGF0aCBkPSJtMjgyLjUxNTYyNSA0NjUuOTU3MDMxYy4yNjU2MjUuMDE1NjI1LjUyNzM0NC4wMTk1MzEuNzkyOTY5LjAxOTUzMSA3LjkyNTc4MSAwIDE0LjU1MDc4MS02LjIxMDkzNyAxNC45NjQ4NDQtMTQuMjE4NzVsMTQuMDg1OTM3LTI3MC4zOTg0MzdjLjQyOTY4Ny04LjI3MzQzNy01LjkyOTY4Ny0xNS4zMzIwMzEtMTQuMTk5MjE5LTE1Ljc2MTcxOS04LjI5Mjk2OC0uNDQxNDA2LTE1LjMyODEyNSA1LjkyNTc4Mi0xNS43NjE3MTggMTQuMTk5MjE5bC0xNC4wODIwMzIgMjcwLjM5ODQzN2MtLjQyOTY4NyA4LjI3MzQzOCA1LjkyNTc4MiAxNS4zMzIwMzIgMTQuMTk5MjE5IDE1Ljc2MTcxOXptMCAwIi8+PHBhdGggZD0ibTEyMC41NjY0MDYgNDUxLjc5Mjk2OWMuNDM3NSA3Ljk5NjA5MyA3LjA1NDY4OCAxNC4xODM1OTMgMTQuOTY0ODQ0IDE0LjE4MzU5My4yNzM0MzggMCAuNTU0Njg4LS4wMDc4MTIuODMyMDMxLS4wMjM0MzcgOC4yNjk1MzEtLjQ0OTIxOSAxNC42MDkzNzUtNy41MTk1MzEgMTQuMTYwMTU3LTE1Ljc5Mjk2OWwtMTQuNzUzOTA3LTI3MC4zOTg0MzdjLS40NDkyMTktOC4yNzM0MzgtNy41MTk1MzEtMTQuNjEzMjgxLTE1Ljc5Mjk2OS0xNC4xNjAxNTctOC4yNjk1MzEuNDQ5MjE5LTE0LjYwOTM3NCA3LjUxOTUzMi0xNC4xNjAxNTYgMTUuNzkyOTY5em0wIDAiLz48cGF0aCBkPSJtMjA5LjI1MzkwNiA0NjUuOTc2NTYyYzguMjg1MTU2IDAgMTUtNi43MTQ4NDMgMTUtMTV2LTI3MC4zOTg0MzdjMC04LjI4NTE1Ni02LjcxNDg0NC0xNS0xNS0xNXMtMTUgNi43MTQ4NDQtMTUgMTV2MjcwLjM5ODQzN2MwIDguMjg1MTU3IDYuNzE0ODQ0IDE1IDE1IDE1em0wIDAiLz48L3N2Zz4=" />
                                    </button></a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{ $citas->Links() }}
        </div>
    </div>
</x-app-layout>
