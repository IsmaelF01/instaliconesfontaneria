<x-tienda-layout>
    <h3 class="mb-4 text-lg font-semibold text-gray-900" style="margin-left: 5%; float: left;">Citas</h3>
        <div class="m-3">
            <button style="position: absolute; top: 80px; right: 70px" onclick="document.getElementById('myModal').showModal()"
                class="bg-white text-gray-800 font-bold rounded border-b-2 border-blue-500 hover:border-blue-600 hover:bg-blue-500 hover:text-white shadow-md py-2 px-6 inline-flex">
                <span class="mr-2">New Cita</span>
                <img style="width: 25px" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGc+DQoJPGc+DQoJCTxwYXRoIGQ9Ik00MzguOTczLDQxMS43MThjLTE0LjU5OCwwLTI2LjQ3NSwxMS44NzYtMjYuNDc1LDI2LjQ3NWMwLDE0LjU5OCwxMS44NzYsMjYuNDc0LDI2LjQ3NSwyNi40NzQNCgkJCWMxNC41OTgsMCwyNi40NzQtMTEuODc2LDI2LjQ3NC0yNi40NzRDNDY1LjQ0Nyw0MjMuNTk1LDQ1My41NzEsNDExLjcxOCw0MzguOTczLDQxMS43MTh6IE00MzguOTcyLDQ0OC45NzcNCgkJCWMtNS45NDYsMC0xMC43ODQtNC44MzgtMTAuNzg0LTEwLjc4NGMwLTUuOTQ2LDQuODM4LTEwLjc4NCwxMC43ODQtMTAuNzg0YzUuOTQ2LDAsMTAuNzg0LDQuODM4LDEwLjc4NCwxMC43ODQNCgkJCVM0NDQuOTE4LDQ0OC45NzcsNDM4Ljk3Miw0NDguOTc3eiIvPg0KCTwvZz4NCjwvZz4NCjxnPg0KCTxnPg0KCQk8cGF0aCBkPSJNNTEwLjMwMyw0MzYuODJjLTAuNS0xOS4zODMtOC43MDQtMzcuMjExLTIzLjEwMi01MC4xOThMMzI5LjI0OSwyNDQuMTU3bDEzOS42NTgtMTM5LjY1OA0KCQkJYzAuOTE4LTAuMjc0LDEuODI1LTAuNjE1LDIuNy0xLjA3N0w1MDEuODUsODcuNDZjNC4xNzgtMi4yMDYsNi45OC02LjE1Miw3LjY4NS0xMC44MjNjMC43MDYtNC42NzItMC44MDUtOS4yNjgtNC4xNDYtMTIuNjEyDQoJCQlsLTM0LjA1Mi0zNC4wNTFjLTMuMzQyLTMuMzQxLTcuOTM1LTQuODUyLTEyLjYxMS00LjE0NmMtNC42NzEsMC43MDUtOC42MTYsMy41MDctMTAuODIzLDcuNjg2TDQzMS45NCw2My43NTUNCgkJCWMtMC40NjYsMC44ODMtMC44MjQsMS43OTYtMS4wOTksMi43MjNsLTY1LjkyLDY1LjkyYy0zLjA2NCwzLjA2NS0zLjA2NCw4LjAzMSwwLDExLjA5NmMzLjA2NSwzLjA2Miw4LjAzMSwzLjA2MiwxMS4wOTYsMA0KCQkJbDYwLjQ5Mi02MC40OTNsMTUuODUzLDE1Ljg1M2wtMTU0LjcsMTU0LjdsLTE1Ljg1My0xNS44NTNsNjcuNTI1LTY3LjUyNGMzLjA2NC0zLjA2NSwzLjA2NC04LjAzMSwwLTExLjA5Ng0KCQkJYy0zLjA2NS0zLjA2Mi04LjAzMS0zLjA2Mi0xMS4wOTYsMGwtNDguOTk0LDQ4Ljk5NGwtNTMuMzIyLTQ4LjA5NGMxNS4xMTgtNDMuNTE2LDQuMTctOTEuOTMxLTI4LjYyNS0xMjQuNzI1DQoJCQlDMTczLjcwNiwxLjY2NSwxMjMuMzE0LTkuMDQsNzguOTE2LDcuOTg3Yy0yLjQ4MSwwLjk1Mi00LjMxMiwzLjA5NC00Ljg2NCw1LjY5M3MwLjI0Nyw1LjMwMSwyLjEyNiw3LjE4bDYxLjU5Miw2MS41OTMNCgkJCWMxLjgyMiwxLjgyMiwyLjgyNyw0LjI0NSwyLjgyNyw2LjgyMmMwLDIuNTc3LTEuMDA0LDUtMi44MjcsNi44MjNsLTM5Ljk5OSwzOS45OTljLTEuODIyLDEuODIzLTQuMjQ1LDIuODI3LTYuODIyLDIuODI3DQoJCQljLTIuNTc3LDAtNS0xLjAwMy02LjgyMy0yLjgyN0wyMi41MzMsNzQuNTA0Yy0xLjg4LTEuODc5LTQuNTgtMi42NzgtNy4xOC0yLjEyNmMtMi41OTksMC41NTMtNC43NDEsMi4zODMtNS42OTMsNC44NjQNCgkJCWMtMTcuMDI3LDQ0LjM5Ni02LjMyMiw5NC43ODgsMjcuMjcsMTI4LjM4MWMzMS45OTEsMzEuOTksNzkuNDY4LDQzLjI1MywxMjIuMjk5LDI5LjQxNGw0MS4yMjcsNDUuMDgzDQoJCQljLTEuOTgxLDMuODcxLTQuNTU3LDcuNDgxLTcuNzM0LDEwLjY1OGMtMTEuODg0LDExLjg4NC0yOS42OTUsMTUuNjI4LTQ1LjM4LDkuNTRjLTIuODk5LTEuMTI4LTYuMTg4LTAuNDM0LTguMzg4LDEuNzY1DQoJCQlsLTk2LjA1OSw5Ni4wNTljLTI2LjAwNCwyNi4wMDUtMjYuMDA0LDY4LjMxNywwLDk0LjMyQzU1LjQ5NCw1MDUuMDYzLDcyLjI0Myw1MTIsOTAuMDU4LDUxMmMxNy44MTQsMCwzNC41NjQtNi45MzcsNDcuMTYxLTE5LjUzNA0KCQkJbDk2LjA1OS05Ni4wNThjMi4xOTgtMi4xOTksMi44OTEtNS40ODksMS43NjUtOC4zODhjLTYuMDg5LTE1LjY4NC0yLjM0NS0zMy40OTcsOS41MzgtNDUuMzgxDQoJCQljMTEuODg2LTExLjg4NCwyOS42OTgtMTUuNjI4LDQ1LjM4Mi05LjU0YzIuOTAxLDEuMTI4LDYuMTg4LDAuNDMyLDguMzg4LTEuNzY1bDE4LjEyLTE4LjEyYzUuNDU2LTUuNDU2LDguNDYtMTIuNzExLDguNDYtMjAuNDI2DQoJCQljMC03LjcxNS0zLjAwNC0xNC45Ny04LjQ2LTIwLjQyNmwtNy43MTMtNy43MTNsOS4zODMtOS4zODNsMTU4LjU1MiwxNDMuMDA3YzExLjE3MiwxMC4wNzcsMTcuNTM5LDIzLjkxMSwxNy45MjYsMzguOTUxDQoJCQljMC4zODcsMTUuMDQtNS4yNTksMjkuMTgzLTE1Ljg5OCwzOS44MjFjLTEwLjU4OCwxMC41OS0yNC42OTUsMTYuMjI2LTM5LjYzNiwxNS45MDNjLTE0Ljk3MS0wLjMzNC0yOC43ODEtNi42MDQtMzguODg2LTE3LjY1NQ0KCQkJTDI4Mi4zMSwzNDYuMzc4Yy0yLjkyNy0zLjE5OS03Ljg4Ny0zLjQxOS0xMS4wODQtMC40OTVjLTMuMTk3LDIuOTI1LTMuNDE5LDcuODg3LTAuNDk1LDExLjA4NGwxMTcuODg4LDEyOC45MTUNCgkJCWMxMy4wMjQsMTQuMjQxLDMwLjgyMiwyMi4zMjEsNTAuMTE1LDIyLjc1MmMwLjU0LDAuMDEyLDEuMDc5LDAuMDE4LDEuNjE4LDAuMDE4YzE4LjY4OCwwLDM2LjE5OS03LjI0OSw0OS40NjQtMjAuNTEyDQoJCQlDNTAzLjUyNiw0NzQuNDI5LDUxMC44MDEsNDU2LjIwMyw1MTAuMzAzLDQzNi44MnogTTQ0Ni4xNDksNzAuNDVsMTUuMDE5LTI4LjQ1NGwzMi4xOTksMzIuMTk5bC0yOC40NTQsMTUuMDE5TDQ0Ni4xNDksNzAuNDV6DQoJCQkgTTE2Ny4zMjQsMjIwLjYzOWMtMi4xNi0yLjM2LTUuNTM0LTMuMTc0LTguNTMyLTIuMDU2Yy0zOC4zNjMsMTQuMzEtODEuODQ1LDQuODY4LTExMC43NjgtMjQuMDUyDQoJCQljLTI2LjI2Mi0yNi4yNjMtMzYuNDM4LTY0LjMzNy0yNy40NzEtOTkuODE1bDUyLjQ3Nyw1Mi40NzdjNC43ODcsNC43ODYsMTEuMTUsNy40MjEsMTcuOTE4LDcuNDIxczEzLjEzMS0yLjYzNSwxNy45MTctNy40MjENCgkJCWwzOS45OTktMzkuOTk5YzQuNzg2LTQuNzg3LDcuNDIxLTExLjE1LDcuNDIxLTE3LjkxOHMtMi42MzUtMTMuMTMxLTcuNDIxLTE3LjkxN0w5Ni4zODgsMTguODgNCgkJCWMzNS40NzUtOC45NzEsNzMuNTUzLDEuMjA4LDk5LjgxNCwyNy40NzFjMjkuNjU5LDI5LjY1NywzOC43NzMsNzQuMDAzLDIzLjIyMiwxMTIuOTc4Yy0xLjIxNywzLjA0OS0wLjQwNyw2LjUzNCwyLjAzMiw4LjczMw0KCQkJbDU2LjY3OSw1MS4xMjJsLTcuNDIyLDcuNDIyTDI2MywyMTguODkzYy01LjQ1Ni01LjQ1Ni0xMi43MTEtOC40Ni0yMC40MjYtOC40NmMtNy43MTUsMC0xNC45NywzLjAwNC0yMC40MjYsOC40NmwtMTguMTIsMTguMTINCgkJCWMtMi4xOTgsMi4xOTktMi44OTEsNS40ODktMS43NjUsOC4zODhjMi4wODcsNS4zNzUsMi45OTIsMTAuOTk3LDIuODM3LDE2LjU0OEwxNjcuMzI0LDIyMC42Mzl6IE0zMDUuMzc0LDMwMi4xMTlsLTE0LjY4MiwxNC42ODMNCgkJCWMtMjAuMTkyLTUuODIxLTQyLjE2NC0wLjI5OS01Ny4yMDUsMTQuNzQxaC0wLjAwMWMtMTUuMDQsMTUuMDQxLTIwLjU2MywzNy4wMS0xNC43NCw1Ny4yMDZsLTkyLjYyMiw5Mi42Mg0KCQkJYy05LjYzNCw5LjYzNC0yMi40NDIsMTQuOTQtMzYuMDY1LDE0Ljk0cy0yNi40MzMtNS4zMDYtMzYuMDY1LTE0Ljk0Yy0xOS44ODctMTkuODg2LTE5Ljg4Ny01Mi4yNDQsMC03Mi4xMzFsOTIuNjIxLTkyLjYyMQ0KCQkJYzIwLjE5NCw1LjgyNCw0Mi4xNjMsMC4yOTgsNTcuMjA1LTE0Ljc0MmMxNS4wNC0xNS4wNDEsMjAuNTY0LTM3LjAxLDE0Ljc0MS01Ny4yMDVsMTQuNjgzLTE0LjY4Mg0KCQkJYzUuMTQ0LTUuMTQ2LDEzLjUxNy01LjE0NiwxOC42NjEsMGwxMy4yNjEsMTMuMjYxbDI2Ljk0NywyNi45NDdsMTMuMjYxLDEzLjI2MUMzMTAuNTIsMjg4LjYwMywzMTAuNTIsMjk2Ljk3NSwzMDUuMzc0LDMwMi4xMTl6Ig0KCQkJLz4NCgk8L2c+DQo8L2c+DQo8Zz4NCgk8Zz4NCgkJPHBhdGggZD0iTTE2Mi4zMjYsMzQ2LjI0OWMtMy4wNjUtMy4wNjMtOC4wMzEtMy4wNjMtMTEuMDk2LDBsLTc0LjMxOCw3NC4zMThjLTMuMDY0LDMuMDY1LTMuMDY0LDguMDMxLDAsMTEuMDk2DQoJCQljMS41MzIsMS41MzEsMy41NDEsMi4yOTcsNS41NDgsMi4yOTdjMi4wMDcsMCw0LjAxNi0wLjc2Niw1LjU0OC0yLjI5N2w3NC4zMTgtNzQuMzE4DQoJCQlDMTY1LjM4OSwzNTQuMjgsMTY1LjM4OSwzNDkuMzEzLDE2Mi4zMjYsMzQ2LjI0OXoiLz4NCgk8L2c+DQo8L2c+DQo8Zz4NCgk8Zz4NCgkJPHBhdGggZD0iTTE4OS43ODUsMzczLjcwOGMtMy4wNjQtMy4wNjMtOC4wMzEtMy4wNjMtMTEuMDk2LDBsLTc0LjMxOCw3NC4zMTdjLTMuMDY0LDMuMDY1LTMuMDY0LDguMDMxLDAsMTEuMDk2DQoJCQljMS41MzIsMS41MzEsMy41NCwyLjI5Nyw1LjU0OCwyLjI5N2MyLjAwNywwLDQuMDE2LTAuNzY2LDUuNTQ4LTIuMjk3bDc0LjMxOC03NC4zMTcNCgkJCUMxOTIuODQ5LDM4MS43MzksMTkyLjg0OSwzNzYuNzczLDE4OS43ODUsMzczLjcwOHoiLz4NCgk8L2c+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8L3N2Zz4NCg==" />
            </button>
        </div>
        <dialog id="myModal" class="h-auto w-11/12 md:w-1/2 p-5 rounded-md ">

            <div class="flex flex-col w-full h-auto ">
                <!-- Header -->
                <div class="flex w-full h-auto justify-center items-center">
                    <div class="flex justify-center py-4">
                        <div class="flex bg-purple-500 rounded-full md:p-4 p-2 border-2 border-purple-300">
                            <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}"
                                alt="{{ Auth::user()->name }}" />
                        </div>
                    </div>
                    <div onclick="document.getElementById('myModal').close();"
                        class="flex w-1/12 h-auto justify-center cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-x">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </div>
                    <!--Header End-->
                </div>
                <!-- Modal Content-->

                <div class=" flex items-center justify-center">

                    <form action="/tienda/citas/store" method="POST" id="form"
                        class=" shadow-md rounded px-8 pt-6 pb-8 mb-4" enctype="multipart/form-data">
                        @csrf
                        <div class="bg-white grid rounded-lg w-11/12 md:w-9/12 lg:w-1/2">
                            <div class="flex justify-center">
                                <div class="flex">
                                    <h1 class="text-gray-600 font-bold md:text-2xl text-xl">Informe Citas</h1>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 mt-5 mx-7">
                                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Fontaneria</label>
                                <select id="fontaneria" name="fontaneria"  class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                                        <option value="default" disabled selected>Seleccione un Trabajo</option>
                                    @foreach ($fontaneria as $fonta)
                                        <option value="{{$fonta->id}}">{{$fonta->nombre}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="grid grid-cols-1 mt-5 mx-7">
                                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Descripcion</label>
                                <textarea class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" name="descripcion" id="descripcion" cols="10" rows="10" placeholder="Descripcion ..."></textarea>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
                                <div class="grid grid-cols-1">
                                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Direccion</label>
                                    <input
                                        class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                        type="text" id="direccion" name="direccion" placeholder="Calle ..." required/>
                                </div>
                                <div class="grid grid-cols-1">
                                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Ciudad</label>
                                    <input
                                        class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                        type="text" id="ciudad" name="ciudad" placeholder="Ciudad ..." required/>
                                </div>
                            </div>

                            <div id="google_maps" class="google_maps" style="height: 1px; width: 500px; margin-top: 20px; margin-left: 50px"></div>

                            <div class='flex items-center justify-center  md:gap-8 gap-4 pt-5 pb-5'>
                                <button
                                    class='w-auto bg-gray-500 hover:bg-gray-700 rounded-lg shadow-xl font-medium text-white px-4 py-2' type="reset">Borrar</button>
                                <button
                                    class='w-auto bg-purple-500 hover:bg-purple-700 rounded-lg shadow-xl font-medium text-white px-4 py-2' type="submit">Create</button>
                            </div>
                        </div>

                    </form>

                    <script src="https://kit.fontawesome.com/1e268974cb.js" crossorigin="anonymous">
                    </script>
                    <script src="assets/js/helpers.js"></script>
                </div>
                <!-- End of Modal Content-->
            </div>
        </dialog>
    </form>

    <form action="/tienda/citas">
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
    </form>
        <div style="width: 90%; margin-left: 5%; margin-top: 70px">
            <table class="w-full text-md bg-white shadow-md rounded mb-4">
                <tbody>
                    <tr class="border-b">
                        <th class="text-left p-3 px-5">Estado</th>
                        <th class="text-left p-3 px-5">Descripcion</th>
                        <th class="text-left p-3 px-5">Pedido</th>
                        <th class="text-left p-3 px-5">Fecha</th>
                        <th class="text-left p-3 px-5">Hora</th>
                        <th class="text-left p-3 px-5">Direccion</th>
                        <th class="text-left p-3 px-5">Ciudad</th>
                        <th></th>
                    </tr>
                    @foreach ($citas as $cita)
                        <tr class="border-b hover:bg-orange-100 bg-gray-100">
                            <td class="p-3 px-5" style="width: 100px">{{ $cita->estado }}</td>
                            <td class="p-3 px-5" style="width: 250px">{{ $cita->descripcion }}</td>
                            <td class="p-3 px-5" style="width: 250px">{{ $cita->fontaneria->nombre }}</td>
                            @if (isset($cita->fecha))
                                    <td class="p-3 px-5" style="width: 100px">{{ $cita->fecha }}</td>
                            @else
                                    <td class="p-3 px-5" style="width: 100px"><img width="40%" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjUxMnB0IiB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgd2lkdGg9IjUxMnB0IiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxwYXRoIGQ9Im01MDQuNSAyNTZjMCAxMzcuMjQyMTg4LTExMS4yNTc4MTIgMjQ4LjUtMjQ4LjUgMjQ4LjVzLTI0OC41LTExMS4yNTc4MTItMjQ4LjUtMjQ4LjUgMTExLjI1NzgxMi0yNDguNSAyNDguNS0yNDguNSAyNDguNSAxMTEuMjU3ODEyIDI0OC41IDI0OC41em0wIDAiIGZpbGw9IiNmZjkyOWYiLz48cGF0aCBkPSJtMjI5Ljk4MDQ2OSAxNDUuMzE2NDA2YzUxLjEyNS0zOS40NTMxMjUgNzYuNzUzOTA2LTk1LjU4OTg0NCA4OC40MTQwNjItMTI5LjkxNzk2OC0xOS45Mzc1LTUuMTU2MjUtNDAuODQzNzUtNy44OTg0MzgtNjIuMzk0NTMxLTcuODk4NDM4LTEzNy4yNDIxODggMC0yNDguNSAxMTEuMjU3ODEyLTI0OC41IDI0OC41czExMS4yNTc4MTIgMjQ4LjUgMjQ4LjUgMjQ4LjVjMTAuMjg1MTU2IDAgMjAuNDI5Njg4LS42MjUgMzAuMzg2NzE5LTEuODM5ODQ0LTEwOC4wMDM5MDctOTAuNjU2MjUtMTI0LjE2Nzk2OS0xODMuNzQ2MDk0LTExNy4wOTc2NTctMjQ4LjgyODEyNSA0LjY2MDE1Ny00Mi44ODY3MTkgMjYuNTQyOTY5LTgyLjE1NjI1IDYwLjY5MTQwNy0xMDguNTE1NjI1em0wIDAiIGZpbGw9IiNmZjczN2QiLz48cGF0aCBkPSJtMzMxLjY5MTQwNiAyNDIuOTA2MjUgNTcuNTk3NjU2LTU3LjU5NzY1NmMxNy4yMTQ4NDQtMTcuMjE0ODQ0IDE3LjIxNDg0NC00NS4zODI4MTMgMC02Mi41OTM3NS0xNy4yMTQ4NDMtMTcuMjE0ODQ0LTQ1LjM4MjgxMi0xNy4yMTQ4NDQtNjIuNTk3NjU2IDBsLTU3LjU5NzY1NiA1Ny41OTc2NTZjLTcuMjMwNDY5IDcuMjMwNDY5LTE4Ljk1MzEyNSA3LjIzMDQ2OS0yNi4xODc1IDBsLTU3LjU5NzY1Ni01Ny41OTc2NTZjLTE3LjIxMDkzOC0xNy4yMTQ4NDQtNDUuMzc4OTA2LTE3LjIxNDg0NC02Mi41OTM3NSAwLTE3LjIxNDg0NCAxNy4yMTA5MzctMTcuMjE0ODQ0IDQ1LjM3ODkwNiAwIDYyLjU5Mzc1bDU3LjU5NzY1NiA1Ny41OTc2NTZjNy4yMzA0NjkgNy4yMzA0NjkgNy4yMzA0NjkgMTguOTU3MDMxIDAgMjYuMTg3NWwtNTcuNTk3NjU2IDU3LjU5NzY1NmMtMTcuMjE0ODQ0IDE3LjIxNDg0NC0xNy4yMTQ4NDQgNDUuMzgyODEzIDAgNjIuNTkzNzUgMTcuMjE0ODQ0IDE3LjIxNDg0NCA0NS4zODI4MTIgMTcuMjE0ODQ0IDYyLjU5Mzc1IDBsNTcuNTk3NjU2LTU3LjU5NzY1NmM3LjIzNDM3NS03LjIzMDQ2OSAxOC45NTcwMzEtNy4yMzA0NjkgMjYuMTg3NSAwbDU3LjU5NzY1NiA1Ny41OTc2NTZjMTcuMjE0ODQ0IDE3LjIxNDg0NCA0NS4zODI4MTMgMTcuMjE0ODQ0IDYyLjU5NzY1NiAwIDE3LjIxNDg0NC0xNy4yMTA5MzcgMTcuMjE0ODQ0LTQ1LjM3ODkwNiAwLTYyLjU5Mzc1bC01Ny41OTc2NTYtNTcuNTk3NjU2Yy03LjIzNDM3NS03LjIzMDQ2OS03LjIzNDM3NS0xOC45NTcwMzEgMC0yNi4xODc1em0wIDAiIGZpbGw9IiNmZmYiLz48cGF0aCBkPSJtMjE4LjA4MjAzMSAxNTUuNDg0Mzc1LTMyLjc3MzQzNy0zMi43NzM0MzdjLTE3LjIxMDkzOC0xNy4yMTQ4NDQtNDUuMzc4OTA2LTE3LjIxNDg0NC02Mi41OTM3NSAwLTE3LjIxNDg0NCAxNy4yMTQ4NDMtMTcuMjE0ODQ0IDQ1LjM4MjgxMiAwIDYyLjU5NzY1Nmw0OS43NTc4MTIgNDkuNzU3ODEyYzcuMDQyOTY5LTMwLjQwMjM0NCAyMi44OTA2MjUtNTguMTMyODEyIDQ1LjYwOTM3NS03OS41ODIwMzF6bTAgMCIgZmlsbD0iI2JkZmFmZiIvPjxwYXRoIGQ9Im0xODUuMzA4NTk0IDM4OS4yODUxNTYgNS43MjY1NjItNS43MjI2NTZjLTE3LTM2Ljc1MzkwNi0yMi45OTYwOTQtNzEuNTI3MzQ0LTIzLjE3MTg3NS0xMDIuMDIzNDM4bC00NS4xNTIzNDMgNDUuMTUyMzQ0Yy0xNy4yMTQ4NDQgMTcuMjE0ODQ0LTE3LjIxNDg0NCA0NS4zODI4MTMgMCA2Mi41OTM3NSAxNy4yMTQ4NDMgMTcuMjE0ODQ0IDQ1LjM4MjgxMiAxNy4yMTQ4NDQgNjIuNTk3NjU2IDB6bTAgMCIgZmlsbD0iI2NjZjhmZiIvPjxwYXRoIGQ9Im0yNTYgNTEyYy02OC4zNzg5MDYgMC0xMzIuNjY3OTY5LTI2LjYyODkwNi0xODEuMDE5NTMxLTc0Ljk4MDQ2OS00OC4zNTE1NjMtNDguMzUxNTYyLTc0Ljk4MDQ2OS0xMTIuNjQwNjI1LTc0Ljk4MDQ2OS0xODEuMDE5NTMxczI2LjYyODkwNi0xMzIuNjY3OTY5IDc0Ljk4MDQ2OS0xODEuMDE5NTMxYzQ4LjM1MTU2Mi00OC4zNTE1NjMgMTEyLjY0MDYyNS03NC45ODA0NjkgMTgxLjAxOTUzMS03NC45ODA0NjkgNDUuNjYwMTU2IDAgOTAuNDgwNDY5IDEyLjE3MTg3NSAxMjkuNjIxMDk0IDM1LjE5NTMxMiAzNy45ODgyODEgMjIuMzQ3NjU3IDY5Ljc2OTUzMSA1NC4zMDQ2ODggOTEuOTAyMzQ0IDkyLjQxMDE1NyAyLjA4MjAzMSAzLjU4MjAzMS44NjMyODEgOC4xNzE4NzUtMi43MTg3NSAxMC4yNTM5MDYtMy41ODIwMzIgMi4wODIwMzEtOC4xNzE4NzYuODYzMjgxLTEwLjI1MzkwNy0yLjcxODc1LTIwLjgzOTg0My0zNS44ODI4MTMtNTAuNzYxNzE5LTY1Ljk3MjY1Ni04Ni41MzEyNS04Ny4wMTU2MjUtMzYuODM5ODQzLTIxLjY3MTg3NS03OS4wMzEyNS0zMy4xMjUtMTIyLjAxOTUzMS0zMy4xMjUtNjQuMzc1IDAtMTI0Ljg5NDUzMSAyNS4wNjY0MDYtMTcwLjQxNDA2MiA3MC41ODU5MzgtNDUuNTE5NTMyIDQ1LjUxOTUzMS03MC41ODU5MzggMTA2LjAzOTA2Mi03MC41ODU5MzggMTcwLjQxNDA2MnMyNS4wNjY0MDYgMTI0Ljg5NDUzMSA3MC41ODU5MzggMTcwLjQxNDA2MmM0NS41MTk1MzEgNDUuNTE5NTMyIDEwNi4wMzkwNjIgNzAuNTg1OTM4IDE3MC40MTQwNjIgNzAuNTg1OTM4czEyNC44OTQ1MzEtMjUuMDY2NDA2IDE3MC40MTQwNjItNzAuNTg1OTM4YzQ1LjUxOTUzMi00NS41MTk1MzEgNzAuNTg1OTM4LTEwNi4wMzkwNjIgNzAuNTg1OTM4LTE3MC40MTQwNjIgMC0zMS42MzI4MTItNi4wMzEyNS02Mi4zNzg5MDYtMTcuOTI5Njg4LTkxLjM4NjcxOS0xLjU3MDMxMi0zLjgzMjAzMS4yNjE3MTktOC4yMTQ4NDMgNC4wOTM3NS05Ljc4NTE1NiAzLjgzMjAzMi0xLjU3NDIxOSA4LjIxNDg0NC4yNjE3MTkgOS43ODUxNTcgNC4wOTM3NSAxMi42NDA2MjUgMzAuODIwMzEzIDE5LjA1MDc4MSA2My40ODQzNzUgMTkuMDUwNzgxIDk3LjA3ODEyNSAwIDY4LjM3ODkwNi0yNi42Mjg5MDYgMTMyLjY2Nzk2OS03NC45ODA0NjkgMTgxLjAxOTUzMS00OC4zNTE1NjIgNDguMzUxNTYzLTExMi42NDA2MjUgNzQuOTgwNDY5LTE4MS4wMTk1MzEgNzQuOTgwNDY5em0wIDAiLz48cGF0aCBkPSJtMzIxLjM4NjcxOSAzOTQuNTg5ODQ0LTU3LjU5NzY1Ny01Ny41OTc2NTZjLTQuMjkyOTY4LTQuMjkyOTY5LTExLjI4NTE1Ni00LjI5Njg3Ni0xNS41NzgxMjQgMGwtNTcuNTk3NjU3IDU3LjU5NzY1NmMtMjAuMTgzNTkzIDIwLjE4MzU5NC01My4wMjM0MzcgMjAuMTgzNTk0LTczLjIwMzEyNSAwLTIwLjE4MzU5NC0yMC4xODM1OTQtMjAuMTgzNTk0LTUzLjAyMzQzOCAwLTczLjIwMzEyNSAyLjkyOTY4OC0yLjkyOTY4OCA3LjY3NTc4Mi0yLjkyOTY4OCAxMC42MDU0NjkgMCAyLjkyOTY4NyAyLjkyOTY4NyAyLjkyOTY4NyA3LjY3NTc4MSAwIDEwLjYwNTQ2OS02LjkxMDE1NiA2LjkxMDE1Ni0xOS4xNzE4NzUgMzMuNzc3MzQzIDAgNTEuOTg4MjgxIDE5LjE3MTg3NSAxOC4yMTQ4NDMgNDUuMDgyMDMxIDYuOTEwMTU2IDUxLjk4ODI4MSAwbDU3LjU5NzY1Ni01Ny41OTc2NTdjMTAuMTQ0NTMyLTEwLjE0MDYyNCAyNi42NTIzNDQtMTAuMTQwNjI0IDM2Ljc5Mjk2OSAwbDU3LjU5NzY1NyA1Ny41OTc2NTdjNi45MTAxNTYgNi45MTAxNTYgMzIuMjg1MTU2IDIwLjczNDM3NSA1MS45OTIxODcgMCAyMi4yMTQ4NDQtMjMuMzY3MTg4IDYuOTEwMTU2LTQ1LjA3ODEyNSAwLTUxLjk4ODI4MWwtNTcuNTk3NjU2LTU3LjU5NzY1N2MtMTAuMTQ0NTMxLTEwLjE0NDUzMS0xMC4xNDQ1MzEtMjYuNjQ4NDM3IDAtMzYuNzkyOTY5bDU3LjU5NzY1Ni01Ny41OTc2NTZjNi45MTAxNTYtNi45MTAxNTYgMTkuMzA0Njg3LTMyLjc3NzM0NCAwLTUxLjk5MjE4Ny0yMi44NTE1NjMtMjIuNzQ2MDk0LTQ1LjA4MjAzMS02LjkwNjI1LTUxLjk5MjE4NyAwbC01Ny41OTc2NTcgNTcuNTk3NjU2Yy0xMC4xNDA2MjUgMTAuMTQ0NTMxLTI2LjY0ODQzNyAxMC4xNDQ1MzEtMzYuNzkyOTY5IDBsLTU3LjU5NzY1Ni01Ny41OTc2NTZjLTYuOTA2MjUtNi45MDYyNS0zMC4zNDM3NS0xOS41NDI5NjktNTEuOTg4MjgxIDAtMjEuNjQ4NDM3IDE5LjU0Njg3NS02LjkxMDE1NiA0NS4wODIwMzEgMCA1MS45OTIxODdsNTcuNTk3NjU2IDU3LjU5NzY1NmMxMC4xNDQ1MzEgMTAuMTQ0NTMyIDEwLjE0NDUzMSAyNi42NDg0MzggMCAzNi43OTI5NjlsLTM1LjQ2NDg0MyAzNS40NjA5MzhjLTIuOTI5Njg4IDIuOTI5Njg3LTcuNjc1NzgyIDIuOTI5Njg3LTEwLjYwNTQ2OSAwLTIuOTI5Njg4LTIuOTI5Njg4LTIuOTI5Njg4LTcuNjc1NzgxIDAtMTAuNjA1NDY5bDM1LjQ2NDg0My0zNS40NjA5MzhjNC4yOTI5NjktNC4yOTY4NzQgNC4yOTI5NjktMTEuMjg1MTU2IDAtMTUuNTgyMDMxbC01Ny41OTc2NTYtNTcuNTk3NjU2Yy0yMC4xODM1OTQtMjAuMTc5Njg3LTIwLjE4MzU5NC01My4wMTk1MzEgMC03My4yMDMxMjVzNTMuMDE5NTMyLTIwLjE4MzU5NCA3My4yMDMxMjUgMGw1Ny41OTc2NTcgNTcuNTk3NjU2YzQuMjk2ODc0IDQuMjk2ODc1IDExLjI4NTE1NiA0LjI5Njg3NSAxNS41NzgxMjQgMGw1Ny42MDE1NjMtNTcuNTk3NjU2YzIwLjE3OTY4Ny0yMC4xNzk2ODggNTMuMDE5NTMxLTIwLjE3OTY4OCA3My4yMDMxMjUgMCAyMC4xNzk2ODggMjAuMTgzNTk0IDIwLjE3OTY4OCA1My4wMjM0MzggMCA3My4yMDMxMjVsLTU3LjYwMTU2MiA1Ny42MDE1NjNjLTQuMjkyOTY5IDQuMjkyOTY4LTQuMjkyOTY5IDExLjI4MTI1IDAgMTUuNTc4MTI0bDU3LjU5NzY1NiA1Ny41OTc2NTdjMjAuMTgzNTk0IDIwLjE4MzU5MyAyMC4xODM1OTQgNTMuMDE5NTMxIDAgNzMuMjAzMTI1LTEwLjA4OTg0NCAxMC4wOTM3NS00My4wMTE3MTkgMjkuODU5Mzc1LTczLjIwMzEyNSAwem0wIDAiLz48L3N2Zz4=" /></td>
                            @endif
                            @if (isset($cita->hora))
                                    <td class="p-3 px-5" style="width: 100px">{{ $cita->hora }}</td>
                            @else
                                    <td class="p-3 px-5" style="width: 100px"><img width="40%" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjUxMnB0IiB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgd2lkdGg9IjUxMnB0IiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxwYXRoIGQ9Im01MDQuNSAyNTZjMCAxMzcuMjQyMTg4LTExMS4yNTc4MTIgMjQ4LjUtMjQ4LjUgMjQ4LjVzLTI0OC41LTExMS4yNTc4MTItMjQ4LjUtMjQ4LjUgMTExLjI1NzgxMi0yNDguNSAyNDguNS0yNDguNSAyNDguNSAxMTEuMjU3ODEyIDI0OC41IDI0OC41em0wIDAiIGZpbGw9IiNmZjkyOWYiLz48cGF0aCBkPSJtMjI5Ljk4MDQ2OSAxNDUuMzE2NDA2YzUxLjEyNS0zOS40NTMxMjUgNzYuNzUzOTA2LTk1LjU4OTg0NCA4OC40MTQwNjItMTI5LjkxNzk2OC0xOS45Mzc1LTUuMTU2MjUtNDAuODQzNzUtNy44OTg0MzgtNjIuMzk0NTMxLTcuODk4NDM4LTEzNy4yNDIxODggMC0yNDguNSAxMTEuMjU3ODEyLTI0OC41IDI0OC41czExMS4yNTc4MTIgMjQ4LjUgMjQ4LjUgMjQ4LjVjMTAuMjg1MTU2IDAgMjAuNDI5Njg4LS42MjUgMzAuMzg2NzE5LTEuODM5ODQ0LTEwOC4wMDM5MDctOTAuNjU2MjUtMTI0LjE2Nzk2OS0xODMuNzQ2MDk0LTExNy4wOTc2NTctMjQ4LjgyODEyNSA0LjY2MDE1Ny00Mi44ODY3MTkgMjYuNTQyOTY5LTgyLjE1NjI1IDYwLjY5MTQwNy0xMDguNTE1NjI1em0wIDAiIGZpbGw9IiNmZjczN2QiLz48cGF0aCBkPSJtMzMxLjY5MTQwNiAyNDIuOTA2MjUgNTcuNTk3NjU2LTU3LjU5NzY1NmMxNy4yMTQ4NDQtMTcuMjE0ODQ0IDE3LjIxNDg0NC00NS4zODI4MTMgMC02Mi41OTM3NS0xNy4yMTQ4NDMtMTcuMjE0ODQ0LTQ1LjM4MjgxMi0xNy4yMTQ4NDQtNjIuNTk3NjU2IDBsLTU3LjU5NzY1NiA1Ny41OTc2NTZjLTcuMjMwNDY5IDcuMjMwNDY5LTE4Ljk1MzEyNSA3LjIzMDQ2OS0yNi4xODc1IDBsLTU3LjU5NzY1Ni01Ny41OTc2NTZjLTE3LjIxMDkzOC0xNy4yMTQ4NDQtNDUuMzc4OTA2LTE3LjIxNDg0NC02Mi41OTM3NSAwLTE3LjIxNDg0NCAxNy4yMTA5MzctMTcuMjE0ODQ0IDQ1LjM3ODkwNiAwIDYyLjU5Mzc1bDU3LjU5NzY1NiA1Ny41OTc2NTZjNy4yMzA0NjkgNy4yMzA0NjkgNy4yMzA0NjkgMTguOTU3MDMxIDAgMjYuMTg3NWwtNTcuNTk3NjU2IDU3LjU5NzY1NmMtMTcuMjE0ODQ0IDE3LjIxNDg0NC0xNy4yMTQ4NDQgNDUuMzgyODEzIDAgNjIuNTkzNzUgMTcuMjE0ODQ0IDE3LjIxNDg0NCA0NS4zODI4MTIgMTcuMjE0ODQ0IDYyLjU5Mzc1IDBsNTcuNTk3NjU2LTU3LjU5NzY1NmM3LjIzNDM3NS03LjIzMDQ2OSAxOC45NTcwMzEtNy4yMzA0NjkgMjYuMTg3NSAwbDU3LjU5NzY1NiA1Ny41OTc2NTZjMTcuMjE0ODQ0IDE3LjIxNDg0NCA0NS4zODI4MTMgMTcuMjE0ODQ0IDYyLjU5NzY1NiAwIDE3LjIxNDg0NC0xNy4yMTA5MzcgMTcuMjE0ODQ0LTQ1LjM3ODkwNiAwLTYyLjU5Mzc1bC01Ny41OTc2NTYtNTcuNTk3NjU2Yy03LjIzNDM3NS03LjIzMDQ2OS03LjIzNDM3NS0xOC45NTcwMzEgMC0yNi4xODc1em0wIDAiIGZpbGw9IiNmZmYiLz48cGF0aCBkPSJtMjE4LjA4MjAzMSAxNTUuNDg0Mzc1LTMyLjc3MzQzNy0zMi43NzM0MzdjLTE3LjIxMDkzOC0xNy4yMTQ4NDQtNDUuMzc4OTA2LTE3LjIxNDg0NC02Mi41OTM3NSAwLTE3LjIxNDg0NCAxNy4yMTQ4NDMtMTcuMjE0ODQ0IDQ1LjM4MjgxMiAwIDYyLjU5NzY1Nmw0OS43NTc4MTIgNDkuNzU3ODEyYzcuMDQyOTY5LTMwLjQwMjM0NCAyMi44OTA2MjUtNTguMTMyODEyIDQ1LjYwOTM3NS03OS41ODIwMzF6bTAgMCIgZmlsbD0iI2JkZmFmZiIvPjxwYXRoIGQ9Im0xODUuMzA4NTk0IDM4OS4yODUxNTYgNS43MjY1NjItNS43MjI2NTZjLTE3LTM2Ljc1MzkwNi0yMi45OTYwOTQtNzEuNTI3MzQ0LTIzLjE3MTg3NS0xMDIuMDIzNDM4bC00NS4xNTIzNDMgNDUuMTUyMzQ0Yy0xNy4yMTQ4NDQgMTcuMjE0ODQ0LTE3LjIxNDg0NCA0NS4zODI4MTMgMCA2Mi41OTM3NSAxNy4yMTQ4NDMgMTcuMjE0ODQ0IDQ1LjM4MjgxMiAxNy4yMTQ4NDQgNjIuNTk3NjU2IDB6bTAgMCIgZmlsbD0iI2NjZjhmZiIvPjxwYXRoIGQ9Im0yNTYgNTEyYy02OC4zNzg5MDYgMC0xMzIuNjY3OTY5LTI2LjYyODkwNi0xODEuMDE5NTMxLTc0Ljk4MDQ2OS00OC4zNTE1NjMtNDguMzUxNTYyLTc0Ljk4MDQ2OS0xMTIuNjQwNjI1LTc0Ljk4MDQ2OS0xODEuMDE5NTMxczI2LjYyODkwNi0xMzIuNjY3OTY5IDc0Ljk4MDQ2OS0xODEuMDE5NTMxYzQ4LjM1MTU2Mi00OC4zNTE1NjMgMTEyLjY0MDYyNS03NC45ODA0NjkgMTgxLjAxOTUzMS03NC45ODA0NjkgNDUuNjYwMTU2IDAgOTAuNDgwNDY5IDEyLjE3MTg3NSAxMjkuNjIxMDk0IDM1LjE5NTMxMiAzNy45ODgyODEgMjIuMzQ3NjU3IDY5Ljc2OTUzMSA1NC4zMDQ2ODggOTEuOTAyMzQ0IDkyLjQxMDE1NyAyLjA4MjAzMSAzLjU4MjAzMS44NjMyODEgOC4xNzE4NzUtMi43MTg3NSAxMC4yNTM5MDYtMy41ODIwMzIgMi4wODIwMzEtOC4xNzE4NzYuODYzMjgxLTEwLjI1MzkwNy0yLjcxODc1LTIwLjgzOTg0My0zNS44ODI4MTMtNTAuNzYxNzE5LTY1Ljk3MjY1Ni04Ni41MzEyNS04Ny4wMTU2MjUtMzYuODM5ODQzLTIxLjY3MTg3NS03OS4wMzEyNS0zMy4xMjUtMTIyLjAxOTUzMS0zMy4xMjUtNjQuMzc1IDAtMTI0Ljg5NDUzMSAyNS4wNjY0MDYtMTcwLjQxNDA2MiA3MC41ODU5MzgtNDUuNTE5NTMyIDQ1LjUxOTUzMS03MC41ODU5MzggMTA2LjAzOTA2Mi03MC41ODU5MzggMTcwLjQxNDA2MnMyNS4wNjY0MDYgMTI0Ljg5NDUzMSA3MC41ODU5MzggMTcwLjQxNDA2MmM0NS41MTk1MzEgNDUuNTE5NTMyIDEwNi4wMzkwNjIgNzAuNTg1OTM4IDE3MC40MTQwNjIgNzAuNTg1OTM4czEyNC44OTQ1MzEtMjUuMDY2NDA2IDE3MC40MTQwNjItNzAuNTg1OTM4YzQ1LjUxOTUzMi00NS41MTk1MzEgNzAuNTg1OTM4LTEwNi4wMzkwNjIgNzAuNTg1OTM4LTE3MC40MTQwNjIgMC0zMS42MzI4MTItNi4wMzEyNS02Mi4zNzg5MDYtMTcuOTI5Njg4LTkxLjM4NjcxOS0xLjU3MDMxMi0zLjgzMjAzMS4yNjE3MTktOC4yMTQ4NDMgNC4wOTM3NS05Ljc4NTE1NiAzLjgzMjAzMi0xLjU3NDIxOSA4LjIxNDg0NC4yNjE3MTkgOS43ODUxNTcgNC4wOTM3NSAxMi42NDA2MjUgMzAuODIwMzEzIDE5LjA1MDc4MSA2My40ODQzNzUgMTkuMDUwNzgxIDk3LjA3ODEyNSAwIDY4LjM3ODkwNi0yNi42Mjg5MDYgMTMyLjY2Nzk2OS03NC45ODA0NjkgMTgxLjAxOTUzMS00OC4zNTE1NjIgNDguMzUxNTYzLTExMi42NDA2MjUgNzQuOTgwNDY5LTE4MS4wMTk1MzEgNzQuOTgwNDY5em0wIDAiLz48cGF0aCBkPSJtMzIxLjM4NjcxOSAzOTQuNTg5ODQ0LTU3LjU5NzY1Ny01Ny41OTc2NTZjLTQuMjkyOTY4LTQuMjkyOTY5LTExLjI4NTE1Ni00LjI5Njg3Ni0xNS41NzgxMjQgMGwtNTcuNTk3NjU3IDU3LjU5NzY1NmMtMjAuMTgzNTkzIDIwLjE4MzU5NC01My4wMjM0MzcgMjAuMTgzNTk0LTczLjIwMzEyNSAwLTIwLjE4MzU5NC0yMC4xODM1OTQtMjAuMTgzNTk0LTUzLjAyMzQzOCAwLTczLjIwMzEyNSAyLjkyOTY4OC0yLjkyOTY4OCA3LjY3NTc4Mi0yLjkyOTY4OCAxMC42MDU0NjkgMCAyLjkyOTY4NyAyLjkyOTY4NyAyLjkyOTY4NyA3LjY3NTc4MSAwIDEwLjYwNTQ2OS02LjkxMDE1NiA2LjkxMDE1Ni0xOS4xNzE4NzUgMzMuNzc3MzQzIDAgNTEuOTg4MjgxIDE5LjE3MTg3NSAxOC4yMTQ4NDMgNDUuMDgyMDMxIDYuOTEwMTU2IDUxLjk4ODI4MSAwbDU3LjU5NzY1Ni01Ny41OTc2NTdjMTAuMTQ0NTMyLTEwLjE0MDYyNCAyNi42NTIzNDQtMTAuMTQwNjI0IDM2Ljc5Mjk2OSAwbDU3LjU5NzY1NyA1Ny41OTc2NTdjNi45MTAxNTYgNi45MTAxNTYgMzIuMjg1MTU2IDIwLjczNDM3NSA1MS45OTIxODcgMCAyMi4yMTQ4NDQtMjMuMzY3MTg4IDYuOTEwMTU2LTQ1LjA3ODEyNSAwLTUxLjk4ODI4MWwtNTcuNTk3NjU2LTU3LjU5NzY1N2MtMTAuMTQ0NTMxLTEwLjE0NDUzMS0xMC4xNDQ1MzEtMjYuNjQ4NDM3IDAtMzYuNzkyOTY5bDU3LjU5NzY1Ni01Ny41OTc2NTZjNi45MTAxNTYtNi45MTAxNTYgMTkuMzA0Njg3LTMyLjc3NzM0NCAwLTUxLjk5MjE4Ny0yMi44NTE1NjMtMjIuNzQ2MDk0LTQ1LjA4MjAzMS02LjkwNjI1LTUxLjk5MjE4NyAwbC01Ny41OTc2NTcgNTcuNTk3NjU2Yy0xMC4xNDA2MjUgMTAuMTQ0NTMxLTI2LjY0ODQzNyAxMC4xNDQ1MzEtMzYuNzkyOTY5IDBsLTU3LjU5NzY1Ni01Ny41OTc2NTZjLTYuOTA2MjUtNi45MDYyNS0zMC4zNDM3NS0xOS41NDI5NjktNTEuOTg4MjgxIDAtMjEuNjQ4NDM3IDE5LjU0Njg3NS02LjkxMDE1NiA0NS4wODIwMzEgMCA1MS45OTIxODdsNTcuNTk3NjU2IDU3LjU5NzY1NmMxMC4xNDQ1MzEgMTAuMTQ0NTMyIDEwLjE0NDUzMSAyNi42NDg0MzggMCAzNi43OTI5NjlsLTM1LjQ2NDg0MyAzNS40NjA5MzhjLTIuOTI5Njg4IDIuOTI5Njg3LTcuNjc1NzgyIDIuOTI5Njg3LTEwLjYwNTQ2OSAwLTIuOTI5Njg4LTIuOTI5Njg4LTIuOTI5Njg4LTcuNjc1NzgxIDAtMTAuNjA1NDY5bDM1LjQ2NDg0My0zNS40NjA5MzhjNC4yOTI5NjktNC4yOTY4NzQgNC4yOTI5NjktMTEuMjg1MTU2IDAtMTUuNTgyMDMxbC01Ny41OTc2NTYtNTcuNTk3NjU2Yy0yMC4xODM1OTQtMjAuMTc5Njg3LTIwLjE4MzU5NC01My4wMTk1MzEgMC03My4yMDMxMjVzNTMuMDE5NTMyLTIwLjE4MzU5NCA3My4yMDMxMjUgMGw1Ny41OTc2NTcgNTcuNTk3NjU2YzQuMjk2ODc0IDQuMjk2ODc1IDExLjI4NTE1NiA0LjI5Njg3NSAxNS41NzgxMjQgMGw1Ny42MDE1NjMtNTcuNTk3NjU2YzIwLjE3OTY4Ny0yMC4xNzk2ODggNTMuMDE5NTMxLTIwLjE3OTY4OCA3My4yMDMxMjUgMCAyMC4xNzk2ODggMjAuMTgzNTk0IDIwLjE3OTY4OCA1My4wMjM0MzggMCA3My4yMDMxMjVsLTU3LjYwMTU2MiA1Ny42MDE1NjNjLTQuMjkyOTY5IDQuMjkyOTY4LTQuMjkyOTY5IDExLjI4MTI1IDAgMTUuNTc4MTI0bDU3LjU5NzY1NiA1Ny41OTc2NTdjMjAuMTgzNTk0IDIwLjE4MzU5MyAyMC4xODM1OTQgNTMuMDE5NTMxIDAgNzMuMjAzMTI1LTEwLjA4OTg0NCAxMC4wOTM3NS00My4wMTE3MTkgMjkuODU5Mzc1LTczLjIwMzEyNSAwem0wIDAiLz48L3N2Zz4=" /></td>
                            @endif
                            <td class="p-3 px-5" style="width: 175px">{{ $cita->direccion }}</td>
                            <td class="p-3 px-5" style="width: 100px">{{ $cita->ciudad }}</td>
                            <td class="p-3 px-5 flex justify-end">
                                <div style="margin-top: 20px">
                                <a href="citas/{{ $cita->id }}/delete">
                                <button style="margin-right: 10px" type="button" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">

                                    <img style="width: 20px; float: right; margin-left: 2px" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjUxMnB0IiB2aWV3Qm94PSItNDcgMCA1MTIgNTEyIiB3aWR0aD0iNTEycHQiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0ibTQxNi44NzUgMTE0LjQ0MTQwNi0xMS4zMDQ2ODgtMzMuODg2NzE4Yy00LjMwNDY4Ny0xMi45MDYyNS0xNi4zMzk4NDMtMjEuNTc4MTI2LTI5Ljk0MTQwNi0yMS41NzgxMjZoLTk1LjAxMTcxOHYtMzAuOTMzNTkzYzAtMTUuNDYwOTM4LTEyLjU3MDMxMy0yOC4wNDI5NjktMjguMDI3MzQ0LTI4LjA0Mjk2OWgtODcuMDA3ODEzYy0xNS40NTMxMjUgMC0yOC4wMjczNDMgMTIuNTgyMDMxLTI4LjAyNzM0MyAyOC4wNDI5Njl2MzAuOTMzNTkzaC05NS4wMDc4MTNjLTEzLjYwNTQ2OSAwLTI1LjY0MDYyNSA4LjY3MTg3Ni0yOS45NDUzMTMgMjEuNTc4MTI2bC0xMS4zMDQ2ODcgMzMuODg2NzE4Yy0yLjU3NDIxOSA3LjcxNDg0NC0xLjI2OTUzMTIgMTYuMjU3ODEzIDMuNDg0Mzc1IDIyLjg1NTQ2OSA0Ljc1MzkwNiA2LjU5NzY1NiAxMi40NDUzMTIgMTAuNTM5MDYzIDIwLjU3ODEyNSAxMC41MzkwNjNoMTEuODE2NDA2bDI2LjAwNzgxMyAzMjEuNjA1NDY4YzEuOTMzNTk0IDIzLjg2MzI4MiAyMi4xODM1OTQgNDIuNTU4NTk0IDQ2LjEwOTM3NSA0Mi41NTg1OTRoMjA0Ljg2MzI4MWMyMy45MjE4NzUgMCA0NC4xNzU3ODEtMTguNjk1MzEyIDQ2LjEwNTQ2OS00Mi41NjI1bDI2LjAwNzgxMi0zMjEuNjAxNTYyaDYuNTQyOTY5YzguMTMyODEyIDAgMTUuODI0MjE5LTMuOTQxNDA3IDIwLjU3ODEyNS0xMC41MzUxNTcgNC43NTM5MDYtNi41OTc2NTYgNi4wNTg1OTQtMTUuMTQ0NTMxIDMuNDg0Mzc1LTIyLjg1OTM3NXptLTI0OS4zMjAzMTItODQuNDQxNDA2aDgzLjA2MjV2MjguOTc2NTYyaC04My4wNjI1em0xNjIuODA0Njg3IDQzNy4wMTk1MzFjLS42Nzk2ODcgOC40MDIzNDQtNy43OTY4NzUgMTQuOTgwNDY5LTE2LjIwMzEyNSAxNC45ODA0NjloLTIwNC44NjMyODFjLTguNDA2MjUgMC0xNS41MjM0MzgtNi41NzgxMjUtMTYuMjAzMTI1LTE0Ljk4MDQ2OWwtMjUuODE2NDA2LTMxOS4xODM1OTNoMjg4Ljg5ODQzN3ptLTI5OC41NjY0MDYtMzQ5LjE4MzU5MyA5LjI2OTUzMS0yNy43ODkwNjNjLjIxMDkzOC0uNjQwNjI1LjgwODU5NC0xLjA3MDMxMyAxLjQ4NDM3NS0xLjA3MDMxM2gzMzMuMDgyMDMxYy42NzU3ODIgMCAxLjI2OTUzMi40Mjk2ODggMS40ODQzNzUgMS4wNzAzMTNsOS4yNjk1MzEgMjcuNzg5MDYzem0wIDAiLz48cGF0aCBkPSJtMjgyLjUxNTYyNSA0NjUuOTU3MDMxYy4yNjU2MjUuMDE1NjI1LjUyNzM0NC4wMTk1MzEuNzkyOTY5LjAxOTUzMSA3LjkyNTc4MSAwIDE0LjU1MDc4MS02LjIxMDkzNyAxNC45NjQ4NDQtMTQuMjE4NzVsMTQuMDg1OTM3LTI3MC4zOTg0MzdjLjQyOTY4Ny04LjI3MzQzNy01LjkyOTY4Ny0xNS4zMzIwMzEtMTQuMTk5MjE5LTE1Ljc2MTcxOS04LjI5Mjk2OC0uNDQxNDA2LTE1LjMyODEyNSA1LjkyNTc4Mi0xNS43NjE3MTggMTQuMTk5MjE5bC0xNC4wODIwMzIgMjcwLjM5ODQzN2MtLjQyOTY4NyA4LjI3MzQzOCA1LjkyNTc4MiAxNS4zMzIwMzIgMTQuMTk5MjE5IDE1Ljc2MTcxOXptMCAwIi8+PHBhdGggZD0ibTEyMC41NjY0MDYgNDUxLjc5Mjk2OWMuNDM3NSA3Ljk5NjA5MyA3LjA1NDY4OCAxNC4xODM1OTMgMTQuOTY0ODQ0IDE0LjE4MzU5My4yNzM0MzggMCAuNTU0Njg4LS4wMDc4MTIuODMyMDMxLS4wMjM0MzcgOC4yNjk1MzEtLjQ0OTIxOSAxNC42MDkzNzUtNy41MTk1MzEgMTQuMTYwMTU3LTE1Ljc5Mjk2OWwtMTQuNzUzOTA3LTI3MC4zOTg0MzdjLS40NDkyMTktOC4yNzM0MzgtNy41MTk1MzEtMTQuNjEzMjgxLTE1Ljc5Mjk2OS0xNC4xNjAxNTctOC4yNjk1MzEuNDQ5MjE5LTE0LjYwOTM3NCA3LjUxOTUzMi0xNC4xNjAxNTYgMTUuNzkyOTY5em0wIDAiLz48cGF0aCBkPSJtMjA5LjI1MzkwNiA0NjUuOTc2NTYyYzguMjg1MTU2IDAgMTUtNi43MTQ4NDMgMTUtMTV2LTI3MC4zOTg0MzdjMC04LjI4NTE1Ni02LjcxNDg0NC0xNS0xNS0xNXMtMTUgNi43MTQ4NDQtMTUgMTV2MjcwLjM5ODQzN2MwIDguMjg1MTU3IDYuNzE0ODQ0IDE1IDE1IDE1em0wIDAiLz48L3N2Zz4=" />
                                </button></a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $citas->Links() }}
        </div>



    {{-- <script type="text/javascript">
        if(!!navigator.geolocation){
            navigator.geolocation.getCurrentPosition(position, error, options);
        }else{
            document.getElementById("google_maps").innerHTML = "Su navegador no soporta geolocalización";
        }
        function position(geolocationPostion){
                var coords = geolocationPostion.coords;

                document.getElementById("latitud").value = coords.latitude;
                document.getElementById("longitud").value = coords.longitude;
        }

        var direccion = document.getElementById('direccion')+ ", "+ document.getElementById('ciudad');


        function iniciarMap(){
            var coord = {
                lat: 37.1780855,
                lng: -1.8243453
                // lat: document.getElementByClassName("latitud").value,
                // lng: document.getElementByClassName("longitud").value
            };
            var map = new google.maps.Map(document.getElementById('google_maps'), {
                zoom: 18,
                center: coord
            });
            var marker = new google.maps.Marker({
                position: coord,
                map: map
            });
        }

        var options = {
            EnableHighAccuracy:true,
            Timeout:500,
            MaximunAge:0,
        }

        function error(err){
            alert(err.message);
        }

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnEvgtI-X_pjfdXcLuad_VMBmDRXrVtxQ&callback=iniciarMap"> </script> --}}
</x-tienda-layout>
