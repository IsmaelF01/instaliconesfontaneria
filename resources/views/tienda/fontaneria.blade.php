<x-tienda-layout>
    <form action="/tienda/fontaneria">
        @csrf
        <div class="relative text-gray-600" style="position: absolute; right: 80px;">
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
    <div style="margin-bottom: 20px">
        <nav style="margin-left: 36%">
            <a href="/tienda/fontaneria/"><img style="display: inline;" width="70px" src="/img/nav/todos.png" alt="..."></a>
            <a href="/tienda/fontaneria/sanitario"><img style="display: inline;" width="70px" src="/img/nav/sanitario.png" alt="..."></a>
            <a href="/tienda/fontaneria/termo"><img style="display: inline;" width="70px" src="/img/nav/termo.png" alt="..."></a>
            <a href="/tienda/fontaneria/tuberia"><img style="display: inline;" width="70px" src="/img/nav/tuberia.png" alt="..."></a>
            <a href="/tienda/fontaneria/griferia"><img style="display: inline;" width="70px" src="/img/nav/griferia.png" alt="..."></a>
        </nav>
    </div>

    <div class="flex items-center justify-center">
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4">
            <!-- 1 card -->
            @foreach ( $fontaneria as $fonta )
                @switch($fonta->categoria)
                    @case('Sanitario')
                    <div class="relative bg-white py-6 px-6 rounded-3xl w-64 my-4 shadow-xl">
                        <div class=" text-white flex items-center absolute rounded-full py-4 px-4 shadow-xl bg-pink-500 left-4 -top-6">
                            <!-- img  -->
                            <img width="35px" src="data:image/svg+xml;base64,PHN2ZyBpZD0iQ2FwYV8xIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCA1MTIgNTEyIiBoZWlnaHQ9IjUxMiIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHdpZHRoPSI1MTIiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0ibTQ2Ny41IDk5YzQuMTQzIDAgNy41LTMuMzU4IDcuNS03LjV2LTE0YzAtMjYuMTkxLTIxLjMwOS00Ny41LTQ3LjUtNDcuNWgtMTQuNXYtMTIuNWMwLTkuNjQ5LTcuODUxLTE3LjUtMTcuNS0xNy41aC0yOWMtOS42NDkgMC0xNy41IDcuODUxLTE3LjUgMTcuNXYxMi41aC00N3YtNWMwLTEzLjc4NS0xMS4yMTUtMjUtMjUtMjVzLTI1IDExLjIxNS0yNSAyNXYyMDNoLTE5MGMtMTMuNzg1IDAtMjUgMTEuMjE1LTI1IDI1IDAgMTEuMzYyIDcuNjIyIDIwLjk3MiAxOC4wMTkgMjQuMDAxLjczMiA2My4wMTkgNDcuNDA1IDExNS4xOTYgMTA4LjAyNyAxMjQuNTE3bC0zMy4xNTUgNjUuNDgyaC01LjM5MWMtOS42NDkgMC0xNy41IDcuODUxLTE3LjUgMTcuNXYxMGMwIDkuNjQ5IDcuODUxIDE3LjUgMTcuNSAxNy41aDI4M2M5LjY0OSAwIDE3LjUtNy44NTEgMTcuNS0xNy41di02NGMwLTkuNjQ5LTcuODUxLTE3LjUtMTcuNS0xNy41aC0xMGMtOC43OTggMC0xNi4wODEgNi41MzQtMTcuMyAxNWgtNjkuODM3bC0xMy4yNzUtMjYuMjE5YzYxLjIwNC04LjQ4MiAxMDguNjU4LTYwLjU2NyAxMDkuODgxLTEyMy43ODFoMjAuNTMxYzI2LjE5MSAwIDQ3LjUtMjEuMzA5IDQ3LjUtNDcuNXYtMTA0YzAtNC4xNDItMy4zNTctNy41LTcuNS03LjVzLTcuNSAzLjM1OC03LjUgNy41djEwNGMwIDE3LjkyLTE0LjU3OSAzMi41LTMyLjUgMzIuNWgtMTI1LjV2LTI3LjUtMTkwLjVoMTI1LjVjMTcuOTIxIDAgMzIuNSAxNC41OCAzMi41IDMyLjV2MTRjMCA0LjE0MyAzLjM1NyA3LjUgNy41IDcuNXptLTIwMC41LTc0YzAtNS41MTQgNC40ODYtMTAgMTAtMTBzMTAgNC40ODYgMTAgMTB2MjAzaC0yMHptLTIxNSAyMjhjMC01LjUxNCA0LjQ4Ni0xMCAxMC0xMGgyMjV2MjBoLTIyNWMtNS41MTQgMC0xMC00LjQ4Ni0xMC0xMHptNzIuNSAyNDRjLTEuMzc5IDAtMi41LTEuMTIyLTIuNS0yLjV2LTEwYzAtMS4zNzggMS4xMjEtMi41IDIuNS0yLjVoOS45NjljLjAwOCAwIC4wMTcuMDAxLjAyNS4wMDEuMDA3IDAgLjAxNC0uMDAxLjAyMS0uMDAxaDE5MC45NjljLjAwNyAwIC4wMTQuMDAxLjAyMS4wMDEuMDA5IDAgLjAxNy0uMDAxLjAyNS0uMDAxaDkuOTY5YzEuMzc5IDAgMi41IDEuMTIyIDIuNSAyLjV2MTBjMCAxLjM3OC0xLjEyMSAyLjUtMi41IDIuNXptMjcwLjUtNjYuNWMwLTEuMzc4IDEuMTIxLTIuNSAyLjUtMi41aDEwYzEuMzc5IDAgMi41IDEuMTIyIDIuNSAyLjV2NjRjMCAxLjM3OC0xLjEyMSAyLjUtMi41IDIuNWgtMTIuNXptLTE1IDEyLjV2NTRoLTI3LjJjLjExOC0uODE5LjItMS42NDkuMi0yLjV2LTEwYzAtOS42NDktNy44NTEtMTcuNS0xNy41LTE3LjVoLTUuMzkxbC0xMi4xNTItMjR6bTExLjk2OC0xNjVjLTEuMzM1IDYwLjg4My01MS4yNzIgMTEwLTExMi40NjggMTEwaC00Mi41Yy00LjE0MyAwLTcuNSAzLjM1OC03LjUgNy41czMuMzU3IDcuNSA3LjUgNy41aDQyLjVjLjQ2MiAwIC45MjEtLjAxMyAxLjM4Mi0uMDE4bDMyLjQxNCA2NC4wMThoLTE2Ni41OTJsMzIuNDI4LTY0LjA0NWMxLjExOS4wMjkgMi4yNDIuMDQ1IDMuMzY4LjA0NWgxOS41YzQuMTQzIDAgNy41LTMuMzU4IDcuNS03LjVzLTMuMzU3LTcuNS03LjUtNy41aC0xOS41Yy02MS4xOTYgMC0xMTEuMTM0LTQ5LjExNy0xMTIuNDY4LTExMHptLTI3Ljk2OC0yNjAuNWMwLTEuMzc4IDEuMTIxLTIuNSAyLjUtMi41aDI5YzEuMzc5IDAgMi41IDEuMTIyIDIuNSAyLjV2MTIuNWgtMzR6Ii8+PHBhdGggZD0ibTE1OC44OTcgMjA3LjUzNGMuODUuMzE0IDEuNzI5LjQ2NiAyLjYwMS40NjYgMi4xNDggMCA0LjI0My0uOTI0IDUuNjk2LTIuNjJsMTIuNjExLTE0LjcxM2M1LjgxMi02Ljc3OSAxNC4yNjUtMTAuNjY3IDIzLjE5NS0xMC42NjcgMTcuMDk0IDAgMzEtMTMuOTA3IDMxLTMxcy0xMy45MDYtMzEtMzEtMzFjLTI3LjAxOSAwLTQ5IDIxLjk4MS00OSA0OXYzMy41YzAgMy4xMzkgMS45NTQgNS45NDUgNC44OTcgNy4wMzR6bTEwLjEwMy00MC41MzRjMC0xOC43NDggMTUuMjUyLTM0IDM0LTM0IDguODIyIDAgMTYgNy4xNzggMTYgMTZzLTcuMTc4IDE2LTE2IDE2Yy0xMy4wMTkgMC0yNS4zNTggNS41NDMtMzQgMTUuMjM5eiIvPjxwYXRoIGQ9Im05MCAxNTBjOC45MyAwIDE3LjM4MyAzLjg4OCAyMy4xOTQgMTAuNjY4bDEyLjYxMSAxNC43MTNjMS40NTMgMS42OTYgMy41NDggMi42MiA1LjY5NiAyLjYyLjg3MSAwIDEuNzUxLS4xNTIgMi42MDEtLjQ2NiAyLjk0My0xLjA4OSA0Ljg5Ny0zLjg5NiA0Ljg5Ny03LjAzNHYtMzMuNTAxYzAtMjcuMDE5LTIxLjk4MS00OS00OS00OS0xNy4wOTQgMC0zMSAxMy45MDctMzEgMzFzMTMuOTA3IDMxIDMxLjAwMSAzMXptMC00N2MxOC43NDggMCAzNCAxNS4yNTIgMzQgMzR2MTMuMjM5Yy04LjY0Mi05LjY5Ni0yMC45ODEtMTUuMjM5LTM0LTE1LjIzOS04LjgyMiAwLTE2LTcuMTc4LTE2LTE2czcuMTc4LTE2IDE2LTE2eiIvPjwvc3ZnPg==" />
                        </div>
                    @break
                    @case('Tuberia')
                    <div class="relative bg-white py-6 px-6 rounded-3xl w-64 my-4 shadow-xl">
                        <div class=" text-white flex items-center absolute rounded-full py-4 px-4 shadow-xl bg-green-500 left-4 -top-6">
                            <!-- img  -->
                            <img width="35px" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIj8+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2aWV3Qm94PSIwIDAgNjQgNjQiIHdpZHRoPSI1MTIiIGhlaWdodD0iNTEyIj48ZyBpZD0iUGlwZS1JbmR1c3RyeS1XYXRlci1PaWwtR2FzIj48cGF0aCBkPSJNNjEsMTRINTMuODJBMy4wMSwzLjAxLDAsMCwwLDUxLDEySDQ5YTMuMDEsMy4wMSwwLDAsMC0yLjgyLDJINDNBMTcuMDI0LDE3LjAyNCwwLDAsMCwyNiwzMXYzLjE4QTMuMDEsMy4wMSwwLDAsMCwyNCwzN3YyYTMuMDEsMy4wMSwwLDAsMCwyLDIuODJWNDVhNSw1LDAsMCwxLTEwLDBWNDEuODJBMy4wMSwzLjAxLDAsMCwwLDE4LDM5VjM3YTMuMDEsMy4wMSwwLDAsMC0yLTIuODJWM2ExLDEsMCwwLDAtMS0xSDVBMSwxLDAsMCwwLDQsM1YzNC4xOEEzLjAxLDMuMDEsMCwwLDAsMiwzN3YyYTMuMDEsMy4wMSwwLDAsMCwyLDIuODJWNDVhMTcsMTcsMCwwLDAsMzQsMFY0MS44MkEzLjAxLDMuMDEsMCwwLDAsNDAsMzlWMzdhMy4wMSwzLjAxLDAsMCwwLTItMi44MlYzMWE1LDUsMCwwLDEsNS01aDMuMThBMy4wMSwzLjAxLDAsMCwwLDQ5LDI4aDJhMy4wMSwzLjAxLDAsMCwwLDIuODItMkg2MWExLDEsMCwwLDAsMS0xVjE1QTEsMSwwLDAsMCw2MSwxNFpNNiw0aDhWMzRINlpNNCwzOVYzN2ExLDEsMCwwLDEsMS0xSDE1YTEsMSwwLDAsMSwxLDF2MmExLDEsMCwwLDEtMSwxSDVBMSwxLDAsMCwxLDQsMzlabTMyLDZBMTUsMTUsMCwwLDEsNiw0NVY0Mmg4djNhNyw3LDAsMCwwLDE0LDBWNDJoOFptMi02YTEsMSwwLDAsMS0xLDFIMjdhMSwxLDAsMCwxLTEtMVYzN2ExLDEsMCwwLDEsMS0xSDM3YTEsMSwwLDAsMSwxLDFabTgtMTVINDNhNy4wMDgsNy4wMDgsMCwwLDAtNyw3djNIMjhWMzFBMTUuMDE4LDE1LjAxOCwwLDAsMSw0MywxNmgzWm02LDFhMSwxLDAsMCwxLTEsMUg0OWExLDEsMCwwLDEtMS0xVjE1YTEsMSwwLDAsMSwxLTFoMmExLDEsMCwwLDEsMSwxWm04LTFINTRWMTZoNloiLz48cGF0aCBkPSJNMTMuODExLDU1LjgzM0ExMi45MzksMTIuOTM5LDAsMCwwLDIxLDU4VjU2YTEwLjk1MiwxMC45NTIsMCwwLDEtNi4wODItMS44MzNaIi8+PHBhdGggZD0iTTIyLjgzNSw1NS44NDhsLjMzLDEuOTcyYTEyLjc4MiwxMi43ODIsMCwwLDAsMi4xNjgtLjU2bC0uNjY2LTEuODg1QTExLjA0OSwxMS4wNDksMCwwLDEsMjIuODM1LDU1Ljg0OFoiLz48L2c+PC9zdmc+Cg==" />
                        </div>
                    @break
                    @case('Griferia')
                    <div class="relative bg-white py-6 px-6 rounded-3xl w-64 my-4 shadow-xl">
                        <div class=" text-white flex items-center absolute rounded-full py-4 px-4 shadow-xl bg-blue-500 left-4 -top-6">
                            <!-- img  -->
                            <img width="35px" src="data:image/svg+xml;base64,PHN2ZyBpZD0iSWNvbnMiIGhlaWdodD0iNTEyIiB2aWV3Qm94PSIwIDAgNzQgNzQiIHdpZHRoPSI1MTIiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0ibTQ3LjM0NSA0MC4wNzNoLTM0LjM0NWExIDEgMCAwIDEgLTEtMXYtMTYuNDYzYTEgMSAwIDAgMSAxLTFoMzQuMzQ1YTEgMSAwIDAgMSAwIDJoLTMzLjM0NXYxNC40NjNoMzMuMzQ1YTEgMSAwIDAgMSAwIDJ6Ii8+PHBhdGggZD0ibTY3Ljk1OSA0OC4xNThhMSAxIDAgMCAxIC0xLTF2LTEzLjA5MWExMC40NjggMTAuNDY4IDAgMCAwIC0xMC40NTktMTAuNDU3aC05LjE1NWExIDEgMCAwIDEgMC0yaDkuMTU1YTEyLjQ3MiAxMi40NzIgMCAwIDEgMTIuNDU5IDEyLjQ1N3YxMy4wOTFhMSAxIDAgMCAxIC0xIDF6Ii8+PHBhdGggZD0ibTU1LjkyOCA0OC4xNThhMSAxIDAgMCAxIC0xLTF2LTQuMjI5YTIuODU5IDIuODU5IDAgMCAwIC0yLjg1Ni0yLjg1NmgtNC43MjdhMSAxIDAgMCAxIDAtMmg0LjcyN2E0Ljg2MSA0Ljg2MSAwIDAgMSA0Ljg1NiA0Ljg1NnY0LjIyOWExIDEgMCAwIDEgLTEgMXoiLz48cGF0aCBkPSJtNzEgNTUuNjQ3aC0xNy44NzFhMSAxIDAgMCAxIC0xLTF2LTcuNDg5YTEgMSAwIDAgMSAxLTFoMTcuODcxYTEgMSAwIDAgMSAxIDF2Ny40ODlhMSAxIDAgMCAxIC0xIDF6bS0xNi44NzEtMmgxNS44NzF2LTUuNDg5aC0xNS44NzF6Ii8+PHBhdGggZD0ibTM3LjU2MiAyMy42MWgtNi4wODZhMSAxIDAgMCAxIC0xLTF2LTEwLjg2MmExIDEgMCAxIDEgMiAwdjkuODYyaDQuMDg2di05Ljg2MmExIDEgMCAxIDEgMiAwdjEwLjg2MmExIDEgMCAwIDEgLTEgMXoiLz48cGF0aCBkPSJtMzQuNTE2IDEzLjkyOGE1LjU2IDUuNTYgMCAxIDEgNS41Ni01LjU2IDUuNTY3IDUuNTY3IDAgMCAxIC01LjU2IDUuNTZ6bTAtOS4xMmEzLjU2IDMuNTYgMCAxIDAgMy41NiAzLjU2IDMuNTY0IDMuNTY0IDAgMCAwIC0zLjU2LTMuNTZ6Ii8+PHBhdGggZD0ibTQ5LjUgMTUuMDM1YTYuNzQ5IDYuNzQ5IDAgMCAxIC0xLjEyMS0uMDk0bC0xMS4yODktMS45NDFhMSAxIDAgMSAxIC4zMzktMS45N2wxMS4yODMgMS45NGE0LjY2NSA0LjY2NSAwIDEgMCAuODEtOS4yNjMgNS4xMTYgNS4xMTYgMCAwIDAgLS44MjMuMDc3bC0xMS4yOSAxLjkxNmExIDEgMCAwIDEgLS4zMzUtMS45NzJsMTEuMy0xLjkyMmE3LjE2NCA3LjE2NCAwIDAgMSAxLjE0Ny0uMSA2LjY2NCA2LjY2NCAwIDAgMSAtLjAyMSAxMy4zMjl6Ii8+PHBhdGggZD0ibTE5LjUzNSAxNS4wMzVhNi42NjQgNi42NjQgMCAwIDEgLS4wMjUtMTMuMzI4IDcuMTE2IDcuMTE2IDAgMCAxIDEuMTM0LjFsMTEuMzEzIDEuOTI1YTEgMSAwIDAgMSAtLjMzNSAxLjk2OGwtMTEuMy0xLjkyMmE1LjA4NCA1LjA4NCAwIDAgMCAtLjgxMS0uMDc1IDQuNjY0IDQuNjY0IDAgMSAwIC44MTIgOS4yNjJsMTEuMjc3LTEuOTM1YTEgMSAwIDEgMSAuMzQxIDEuOTdsLTExLjI4MyAxLjk0YTYuNjYgNi42NiAwIDAgMSAtMS4xMjMuMDk1eiIvPjxwYXRoIGQ9Im02Mi4zNDIgNzIuMjkzYTUuMDM0IDUuMDM0IDAgMCAxIC01LjAyOC01LjAyOGMwLTIuNDE0IDMuNS03LjYwOCA0LjIwNi04LjYyNWExLjAzNyAxLjAzNyAwIDAgMSAxLjY0NSAwYy43IDEuMDE3IDQuMjA2IDYuMjExIDQuMjA2IDguNjI1YTUuMDM0IDUuMDM0IDAgMCAxIC01LjAyOSA1LjAyOHptMC0xMS4yNzdjLTEuNDUxIDIuMjY3LTMuMDI4IDUuMTQ2LTMuMDI4IDYuMjQ5YTMuMDI5IDMuMDI5IDAgMCAwIDYuMDU3IDBjMC0xLjEwNC0xLjU3Ny0zLjk4Mi0zLjAyOS02LjI0OXoiLz48cGF0aCBkPSJtOC45MzggNDVoLTUuOTM4YTEgMSAwIDAgMSAtMS0xdi0yN2ExIDEgMCAwIDEgMS0xaDUuOTM4YTUuMDY4IDUuMDY4IDAgMCAxIDUuMDYyIDUuMDYydjE4Ljg3NmE1LjA2OCA1LjA2OCAwIDAgMSAtNS4wNjIgNS4wNjJ6bS00LjkzOC0yaDQuOTM4YTMuMDY2IDMuMDY2IDAgMCAwIDMuMDYyLTMuMDYydi0xOC44NzZhMy4wNjYgMy4wNjYgMCAwIDAgLTMuMDYyLTMuMDYyaC00LjkzOHoiLz48L3N2Zz4=" />
                        </div>
                    @break
                    @case('Termo')
                    <div class="relative bg-white py-6 px-6 rounded-3xl w-64 my-4 shadow-xl">
                        <div class=" text-white flex items-center absolute rounded-full py-4 px-4 shadow-xl bg-yellow-500 left-4 -top-6">
                            <!-- img  -->
                        <img width="35px" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGc+DQoJPGc+DQoJCTxwYXRoIGQ9Ik0yMDQuOCw0NjAuOGgtMzQuMTMzYy00LjcxLDAtOC41MzMsMy44MjMtOC41MzMsOC41MzN2MzQuMTMzYzAsNC43MSwzLjgyMyw4LjUzMyw4LjUzMyw4LjUzM0gyMDQuOA0KCQkJYzQuNzEsMCw4LjUzMy0zLjgyMyw4LjUzMy04LjUzM3YtMzQuMTMzQzIxMy4zMzMsNDY0LjYyMywyMDkuNTEsNDYwLjgsMjA0LjgsNDYwLjh6IE0xOTYuMjY3LDQ5NC45MzNIMTc5LjJ2LTE3LjA2N2gxNy4wNjcNCgkJCVY0OTQuOTMzeiIvPg0KCTwvZz4NCjwvZz4NCjxnPg0KCTxnPg0KCQk8cGF0aCBkPSJNMjEzLjMzMyw0MjYuNjY3aC01MS4yYy00LjcxLDAtOC41MzMsMy44MjMtOC41MzMsOC41MzN2MzQuMTMzYzAsNC43MSwzLjgyMyw4LjUzMyw4LjUzMyw4LjUzM2g1MS4yDQoJCQljNC43MSwwLDguNTMzLTMuODIzLDguNTMzLTguNTMzVjQzNS4yQzIyMS44NjcsNDMwLjQ5LDIxOC4wNDQsNDI2LjY2NywyMTMuMzMzLDQyNi42Njd6IE0yMDQuOCw0NjAuOGgtMzQuMTMzdi0xNy4wNjdIMjA0LjgNCgkJCVY0NjAuOHoiLz4NCgk8L2c+DQo8L2c+DQo8Zz4NCgk8Zz4NCgkJPHBhdGggZD0iTTM2Ni45MzMsMEgxNDUuMDY3QzEyMS41NCwwLDEwMi40LDE5LjE0LDEwMi40LDQyLjY2N3YzNTguNGMwLDIzLjUyNiwxOS4xNCw0Mi42NjcsNDIuNjY3LDQyLjY2N2gyMjEuODY3DQoJCQljMjMuNTI2LDAsNDIuNjY3LTE5LjE0LDQyLjY2Ny00Mi42Njd2LTM1OC40QzQwOS42LDE5LjE0LDM5MC40NiwwLDM2Ni45MzMsMHogTTM5Mi41MzMsNDAxLjA2N2MwLDE0LjExNC0xMS40ODYsMjUuNi0yNS42LDI1LjYNCgkJCUgxNDUuMDY3Yy0xNC4xMTQsMC0yNS42LTExLjQ4Ni0yNS42LTI1LjZ2LTM1OC40YzAtMTQuMTE0LDExLjQ4Ni0yNS42LDI1LjYtMjUuNmgyMjEuODY3YzE0LjExNCwwLDI1LjYsMTEuNDg2LDI1LjYsMjUuNlY0MDEuMDY3DQoJCQl6Ii8+DQoJPC9nPg0KPC9nPg0KPGc+DQoJPGc+DQoJCTxwYXRoIGQ9Ik0zNDEuMzMzLDQ2MC44SDMwNy4yYy00LjcxLDAtOC41MzMsMy44MjMtOC41MzMsOC41MzN2MzQuMTMzYzAsNC43MSwzLjgyMyw4LjUzMyw4LjUzMyw4LjUzM2gzNC4xMzMNCgkJCWM0LjcxLDAsOC41MzMtMy44MjMsOC41MzMtOC41MzN2LTM0LjEzM0MzNDkuODY3LDQ2NC42MjMsMzQ2LjA0NCw0NjAuOCwzNDEuMzMzLDQ2MC44eiBNMzMyLjgsNDk0LjkzM2gtMTcuMDY3di0xNy4wNjdIMzMyLjgNCgkJCVY0OTQuOTMzeiIvPg0KCTwvZz4NCjwvZz4NCjxnPg0KCTxnPg0KCQk8cGF0aCBkPSJNMzQ5Ljg2Nyw0MjYuNjY3aC01MS4yYy00LjcxLDAtOC41MzMsMy44MjMtOC41MzMsOC41MzN2MzQuMTMzYzAsNC43MSwzLjgyMyw4LjUzMyw4LjUzMyw4LjUzM2g1MS4yDQoJCQljNC43MSwwLDguNTMzLTMuODIzLDguNTMzLTguNTMzVjQzNS4yQzM1OC40LDQzMC40OSwzNTQuNTc3LDQyNi42NjcsMzQ5Ljg2Nyw0MjYuNjY3eiBNMzQxLjMzMyw0NjAuOEgzMDcuMnYtMTcuMDY3aDM0LjEzM1Y0NjAuOA0KCQkJeiIvPg0KCTwvZz4NCjwvZz4NCjxnPg0KCTxnPg0KCQk8cGF0aCBkPSJNMjU2LDc2LjhjLTE4LjgyNSwwLTM0LjEzMywxNS4zMDktMzQuMTMzLDM0LjEzM3MxNS4zMDksMzQuMTMzLDM0LjEzMywzNC4xMzNzMzQuMTMzLTE1LjMwOSwzNC4xMzMtMzQuMTMzDQoJCQlTMjc0LjgyNSw3Ni44LDI1Niw3Ni44eiBNMjU2LDEyOGMtOS40MTIsMC0xNy4wNjctNy42NTQtMTcuMDY3LTE3LjA2N2MwLTkuNDEyLDcuNjU0LTE3LjA2NywxNy4wNjctMTcuMDY3DQoJCQlzMTcuMDY3LDcuNjU0LDE3LjA2NywxNy4wNjdDMjczLjA2NywxMjAuMzQ2LDI2NS40MTIsMTI4LDI1NiwxMjh6Ii8+DQoJPC9nPg0KPC9nPg0KPGc+DQoJPGc+DQoJCTxwYXRoIGQ9Ik0yNTYsMTEwLjkzM2MtNC43MSwwLTguNTMzLDMuODIzLTguNTMzLDguNTMzdjE3LjA2N2MwLDQuNzEsMy44MjMsOC41MzMsOC41MzMsOC41MzNzOC41MzMtMy44MjMsOC41MzMtOC41MzN2LTE3LjA2Nw0KCQkJQzI2NC41MzMsMTE0Ljc1NiwyNjAuNzEsMTEwLjkzMywyNTYsMTEwLjkzM3oiLz4NCgk8L2c+DQo8L2c+DQo8Zz4NCgk8Zz4NCgkJPHBhdGggZD0iTTI5OC42NjcsMjczLjA2N2gtODUuMzMzYy0xNC4xMTQsMC0yNS42LDExLjQ4Ni0yNS42LDI1LjZ2MjUuNmMwLDE0LjExNCwxMS40ODYsMjUuNiwyNS42LDI1LjZoODUuMzMzDQoJCQljMTQuMTE0LDAsMjUuNi0xMS40ODYsMjUuNi0yNS42di0yNS42QzMyNC4yNjcsMjg0LjU1MywzMTIuNzgxLDI3My4wNjcsMjk4LjY2NywyNzMuMDY3eiBNMzA3LjIsMzI0LjI2Nw0KCQkJYzAsNC43MDItMy44MzEsOC41MzMtOC41MzMsOC41MzNoLTg1LjMzM2MtNC43MDIsMC04LjUzMy0zLjgzMS04LjUzMy04LjUzM3YtMjUuNmMwLTQuNzAyLDMuODMxLTguNTMzLDguNTMzLTguNTMzaDg1LjMzMw0KCQkJYzQuNzAyLDAsOC41MzMsMy44MzEsOC41MzMsOC41MzNWMzI0LjI2N3oiLz4NCgk8L2c+DQo8L2c+DQo8Zz4NCgk8Zz4NCgkJPHBhdGggZD0iTTI4Ny42MzMsMzA5LjdjLTMuMzM3LTMuMzM2LTguNzMtMy4zMzYtMTIuMDY2LDBsLTI1LjYsMjUuNmMtMy4zMzcsMy4zMzctMy4zMzcsOC43MywwLDEyLjA2Ng0KCQkJYzEuNjY0LDEuNjY0LDMuODQ5LDIuNSw2LjAzMywyLjVzNC4zNjktMC44MzYsNi4wMzMtMi41bDI1LjYtMjUuNkMyOTAuOTcsMzE4LjQzLDI5MC45NywzMTMuMDM3LDI4Ny42MzMsMzA5Ljd6Ii8+DQoJPC9nPg0KPC9nPg0KPGc+DQoJPGc+DQoJCTxwYXRoIGQ9Ik00MDEuMDY3LDQyLjY2N0gxMTAuOTMzYy00LjcxLDAtOC41MzMsMy44MjMtOC41MzMsOC41MzNWMzg0YzAsNC43MSwzLjgyMyw4LjUzMyw4LjUzMyw4LjUzM2gyOTAuMTMzDQoJCQljNC43MSwwLDguNTMzLTMuODIzLDguNTMzLTguNTMzVjUxLjJDNDA5LjYsNDYuNDksNDA1Ljc3Nyw0Mi42NjcsNDAxLjA2Nyw0Mi42Njd6IE0zOTIuNTMzLDM3NS40NjdIMTE5LjQ2N1Y1OS43MzNoMjczLjA2Nw0KCQkJVjM3NS40Njd6Ii8+DQoJPC9nPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPC9zdmc+DQo=" />
                        </div>
                    @break
                @endswitch
                <div class="mt-8">
                    <p class="text-xl font-semibold my-2">{{$fonta->nombre}}</p>
                    <div class="flex space-x-2 text-blue-400 text-sm">
                        <!-- svg  -->
                        <svg xmlns="/tienda/fontaneria/www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <p>{{ $fonta->descripcion }}</p>
                    </div>
                    <div class="flex space-x-2 text-blue-400 text-sm my-3">
                        <!-- svg  -->
                        <svg xmlns="/tienda/fontaneria/www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <p>{{ $fonta->tiempo }}h No Incluidas al precio</p>
                    </div>
                    <div class="border-t-2"></div>

                    <div class="flex justify-between">
                        <div class="my-2">
                            <img width="90%" height="70px" src="{{ url('storage/fontanerias', [$fonta->foto]) }}" alt="">
                        </div>
                        <div class="my-2">
                            <p class="font-semibold text-base mb-2">Precio</p>
                            <div class="text-base text-blue-400 font-semibold">
                                <p>~{{ $fonta->precio}}€</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    {{ $fontaneria->Links() }}

</x-tienda-layout>
