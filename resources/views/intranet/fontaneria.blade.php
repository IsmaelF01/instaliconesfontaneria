<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Fontaneria') }}
        </h2>
        <div class="m-3">
            <button style="float: right; margin-top: -40px" onclick="document.getElementById('myModal').showModal()"
                class="bg-white text-gray-800 font-bold rounded border-b-2 border-blue-500 hover:border-blue-600 hover:bg-blue-500 hover:text-white shadow-md py-2 px-6 inline-flex">
                <span class="mr-2">New Trabajo</span>
                <img style="width: 25px" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGc+DQoJPGc+DQoJCTxwYXRoIGQ9Ik00MzguOTczLDQxMS43MThjLTE0LjU5OCwwLTI2LjQ3NSwxMS44NzYtMjYuNDc1LDI2LjQ3NWMwLDE0LjU5OCwxMS44NzYsMjYuNDc0LDI2LjQ3NSwyNi40NzQNCgkJCWMxNC41OTgsMCwyNi40NzQtMTEuODc2LDI2LjQ3NC0yNi40NzRDNDY1LjQ0Nyw0MjMuNTk1LDQ1My41NzEsNDExLjcxOCw0MzguOTczLDQxMS43MTh6IE00MzguOTcyLDQ0OC45NzcNCgkJCWMtNS45NDYsMC0xMC43ODQtNC44MzgtMTAuNzg0LTEwLjc4NGMwLTUuOTQ2LDQuODM4LTEwLjc4NCwxMC43ODQtMTAuNzg0YzUuOTQ2LDAsMTAuNzg0LDQuODM4LDEwLjc4NCwxMC43ODQNCgkJCVM0NDQuOTE4LDQ0OC45NzcsNDM4Ljk3Miw0NDguOTc3eiIvPg0KCTwvZz4NCjwvZz4NCjxnPg0KCTxnPg0KCQk8cGF0aCBkPSJNNTEwLjMwMyw0MzYuODJjLTAuNS0xOS4zODMtOC43MDQtMzcuMjExLTIzLjEwMi01MC4xOThMMzI5LjI0OSwyNDQuMTU3bDEzOS42NTgtMTM5LjY1OA0KCQkJYzAuOTE4LTAuMjc0LDEuODI1LTAuNjE1LDIuNy0xLjA3N0w1MDEuODUsODcuNDZjNC4xNzgtMi4yMDYsNi45OC02LjE1Miw3LjY4NS0xMC44MjNjMC43MDYtNC42NzItMC44MDUtOS4yNjgtNC4xNDYtMTIuNjEyDQoJCQlsLTM0LjA1Mi0zNC4wNTFjLTMuMzQyLTMuMzQxLTcuOTM1LTQuODUyLTEyLjYxMS00LjE0NmMtNC42NzEsMC43MDUtOC42MTYsMy41MDctMTAuODIzLDcuNjg2TDQzMS45NCw2My43NTUNCgkJCWMtMC40NjYsMC44ODMtMC44MjQsMS43OTYtMS4wOTksMi43MjNsLTY1LjkyLDY1LjkyYy0zLjA2NCwzLjA2NS0zLjA2NCw4LjAzMSwwLDExLjA5NmMzLjA2NSwzLjA2Miw4LjAzMSwzLjA2MiwxMS4wOTYsMA0KCQkJbDYwLjQ5Mi02MC40OTNsMTUuODUzLDE1Ljg1M2wtMTU0LjcsMTU0LjdsLTE1Ljg1My0xNS44NTNsNjcuNTI1LTY3LjUyNGMzLjA2NC0zLjA2NSwzLjA2NC04LjAzMSwwLTExLjA5Ng0KCQkJYy0zLjA2NS0zLjA2Mi04LjAzMS0zLjA2Mi0xMS4wOTYsMGwtNDguOTk0LDQ4Ljk5NGwtNTMuMzIyLTQ4LjA5NGMxNS4xMTgtNDMuNTE2LDQuMTctOTEuOTMxLTI4LjYyNS0xMjQuNzI1DQoJCQlDMTczLjcwNiwxLjY2NSwxMjMuMzE0LTkuMDQsNzguOTE2LDcuOTg3Yy0yLjQ4MSwwLjk1Mi00LjMxMiwzLjA5NC00Ljg2NCw1LjY5M3MwLjI0Nyw1LjMwMSwyLjEyNiw3LjE4bDYxLjU5Miw2MS41OTMNCgkJCWMxLjgyMiwxLjgyMiwyLjgyNyw0LjI0NSwyLjgyNyw2LjgyMmMwLDIuNTc3LTEuMDA0LDUtMi44MjcsNi44MjNsLTM5Ljk5OSwzOS45OTljLTEuODIyLDEuODIzLTQuMjQ1LDIuODI3LTYuODIyLDIuODI3DQoJCQljLTIuNTc3LDAtNS0xLjAwMy02LjgyMy0yLjgyN0wyMi41MzMsNzQuNTA0Yy0xLjg4LTEuODc5LTQuNTgtMi42NzgtNy4xOC0yLjEyNmMtMi41OTksMC41NTMtNC43NDEsMi4zODMtNS42OTMsNC44NjQNCgkJCWMtMTcuMDI3LDQ0LjM5Ni02LjMyMiw5NC43ODgsMjcuMjcsMTI4LjM4MWMzMS45OTEsMzEuOTksNzkuNDY4LDQzLjI1MywxMjIuMjk5LDI5LjQxNGw0MS4yMjcsNDUuMDgzDQoJCQljLTEuOTgxLDMuODcxLTQuNTU3LDcuNDgxLTcuNzM0LDEwLjY1OGMtMTEuODg0LDExLjg4NC0yOS42OTUsMTUuNjI4LTQ1LjM4LDkuNTRjLTIuODk5LTEuMTI4LTYuMTg4LTAuNDM0LTguMzg4LDEuNzY1DQoJCQlsLTk2LjA1OSw5Ni4wNTljLTI2LjAwNCwyNi4wMDUtMjYuMDA0LDY4LjMxNywwLDk0LjMyQzU1LjQ5NCw1MDUuMDYzLDcyLjI0Myw1MTIsOTAuMDU4LDUxMmMxNy44MTQsMCwzNC41NjQtNi45MzcsNDcuMTYxLTE5LjUzNA0KCQkJbDk2LjA1OS05Ni4wNThjMi4xOTgtMi4xOTksMi44OTEtNS40ODksMS43NjUtOC4zODhjLTYuMDg5LTE1LjY4NC0yLjM0NS0zMy40OTcsOS41MzgtNDUuMzgxDQoJCQljMTEuODg2LTExLjg4NCwyOS42OTgtMTUuNjI4LDQ1LjM4Mi05LjU0YzIuOTAxLDEuMTI4LDYuMTg4LDAuNDMyLDguMzg4LTEuNzY1bDE4LjEyLTE4LjEyYzUuNDU2LTUuNDU2LDguNDYtMTIuNzExLDguNDYtMjAuNDI2DQoJCQljMC03LjcxNS0zLjAwNC0xNC45Ny04LjQ2LTIwLjQyNmwtNy43MTMtNy43MTNsOS4zODMtOS4zODNsMTU4LjU1MiwxNDMuMDA3YzExLjE3MiwxMC4wNzcsMTcuNTM5LDIzLjkxMSwxNy45MjYsMzguOTUxDQoJCQljMC4zODcsMTUuMDQtNS4yNTksMjkuMTgzLTE1Ljg5OCwzOS44MjFjLTEwLjU4OCwxMC41OS0yNC42OTUsMTYuMjI2LTM5LjYzNiwxNS45MDNjLTE0Ljk3MS0wLjMzNC0yOC43ODEtNi42MDQtMzguODg2LTE3LjY1NQ0KCQkJTDI4Mi4zMSwzNDYuMzc4Yy0yLjkyNy0zLjE5OS03Ljg4Ny0zLjQxOS0xMS4wODQtMC40OTVjLTMuMTk3LDIuOTI1LTMuNDE5LDcuODg3LTAuNDk1LDExLjA4NGwxMTcuODg4LDEyOC45MTUNCgkJCWMxMy4wMjQsMTQuMjQxLDMwLjgyMiwyMi4zMjEsNTAuMTE1LDIyLjc1MmMwLjU0LDAuMDEyLDEuMDc5LDAuMDE4LDEuNjE4LDAuMDE4YzE4LjY4OCwwLDM2LjE5OS03LjI0OSw0OS40NjQtMjAuNTEyDQoJCQlDNTAzLjUyNiw0NzQuNDI5LDUxMC44MDEsNDU2LjIwMyw1MTAuMzAzLDQzNi44MnogTTQ0Ni4xNDksNzAuNDVsMTUuMDE5LTI4LjQ1NGwzMi4xOTksMzIuMTk5bC0yOC40NTQsMTUuMDE5TDQ0Ni4xNDksNzAuNDV6DQoJCQkgTTE2Ny4zMjQsMjIwLjYzOWMtMi4xNi0yLjM2LTUuNTM0LTMuMTc0LTguNTMyLTIuMDU2Yy0zOC4zNjMsMTQuMzEtODEuODQ1LDQuODY4LTExMC43NjgtMjQuMDUyDQoJCQljLTI2LjI2Mi0yNi4yNjMtMzYuNDM4LTY0LjMzNy0yNy40NzEtOTkuODE1bDUyLjQ3Nyw1Mi40NzdjNC43ODcsNC43ODYsMTEuMTUsNy40MjEsMTcuOTE4LDcuNDIxczEzLjEzMS0yLjYzNSwxNy45MTctNy40MjENCgkJCWwzOS45OTktMzkuOTk5YzQuNzg2LTQuNzg3LDcuNDIxLTExLjE1LDcuNDIxLTE3LjkxOHMtMi42MzUtMTMuMTMxLTcuNDIxLTE3LjkxN0w5Ni4zODgsMTguODgNCgkJCWMzNS40NzUtOC45NzEsNzMuNTUzLDEuMjA4LDk5LjgxNCwyNy40NzFjMjkuNjU5LDI5LjY1NywzOC43NzMsNzQuMDAzLDIzLjIyMiwxMTIuOTc4Yy0xLjIxNywzLjA0OS0wLjQwNyw2LjUzNCwyLjAzMiw4LjczMw0KCQkJbDU2LjY3OSw1MS4xMjJsLTcuNDIyLDcuNDIyTDI2MywyMTguODkzYy01LjQ1Ni01LjQ1Ni0xMi43MTEtOC40Ni0yMC40MjYtOC40NmMtNy43MTUsMC0xNC45NywzLjAwNC0yMC40MjYsOC40NmwtMTguMTIsMTguMTINCgkJCWMtMi4xOTgsMi4xOTktMi44OTEsNS40ODktMS43NjUsOC4zODhjMi4wODcsNS4zNzUsMi45OTIsMTAuOTk3LDIuODM3LDE2LjU0OEwxNjcuMzI0LDIyMC42Mzl6IE0zMDUuMzc0LDMwMi4xMTlsLTE0LjY4MiwxNC42ODMNCgkJCWMtMjAuMTkyLTUuODIxLTQyLjE2NC0wLjI5OS01Ny4yMDUsMTQuNzQxaC0wLjAwMWMtMTUuMDQsMTUuMDQxLTIwLjU2MywzNy4wMS0xNC43NCw1Ny4yMDZsLTkyLjYyMiw5Mi42Mg0KCQkJYy05LjYzNCw5LjYzNC0yMi40NDIsMTQuOTQtMzYuMDY1LDE0Ljk0cy0yNi40MzMtNS4zMDYtMzYuMDY1LTE0Ljk0Yy0xOS44ODctMTkuODg2LTE5Ljg4Ny01Mi4yNDQsMC03Mi4xMzFsOTIuNjIxLTkyLjYyMQ0KCQkJYzIwLjE5NCw1LjgyNCw0Mi4xNjMsMC4yOTgsNTcuMjA1LTE0Ljc0MmMxNS4wNC0xNS4wNDEsMjAuNTY0LTM3LjAxLDE0Ljc0MS01Ny4yMDVsMTQuNjgzLTE0LjY4Mg0KCQkJYzUuMTQ0LTUuMTQ2LDEzLjUxNy01LjE0NiwxOC42NjEsMGwxMy4yNjEsMTMuMjYxbDI2Ljk0NywyNi45NDdsMTMuMjYxLDEzLjI2MUMzMTAuNTIsMjg4LjYwMywzMTAuNTIsMjk2Ljk3NSwzMDUuMzc0LDMwMi4xMTl6Ig0KCQkJLz4NCgk8L2c+DQo8L2c+DQo8Zz4NCgk8Zz4NCgkJPHBhdGggZD0iTTE2Mi4zMjYsMzQ2LjI0OWMtMy4wNjUtMy4wNjMtOC4wMzEtMy4wNjMtMTEuMDk2LDBsLTc0LjMxOCw3NC4zMThjLTMuMDY0LDMuMDY1LTMuMDY0LDguMDMxLDAsMTEuMDk2DQoJCQljMS41MzIsMS41MzEsMy41NDEsMi4yOTcsNS41NDgsMi4yOTdjMi4wMDcsMCw0LjAxNi0wLjc2Niw1LjU0OC0yLjI5N2w3NC4zMTgtNzQuMzE4DQoJCQlDMTY1LjM4OSwzNTQuMjgsMTY1LjM4OSwzNDkuMzEzLDE2Mi4zMjYsMzQ2LjI0OXoiLz4NCgk8L2c+DQo8L2c+DQo8Zz4NCgk8Zz4NCgkJPHBhdGggZD0iTTE4OS43ODUsMzczLjcwOGMtMy4wNjQtMy4wNjMtOC4wMzEtMy4wNjMtMTEuMDk2LDBsLTc0LjMxOCw3NC4zMTdjLTMuMDY0LDMuMDY1LTMuMDY0LDguMDMxLDAsMTEuMDk2DQoJCQljMS41MzIsMS41MzEsMy41NCwyLjI5Nyw1LjU0OCwyLjI5N2MyLjAwNywwLDQuMDE2LTAuNzY2LDUuNTQ4LTIuMjk3bDc0LjMxOC03NC4zMTcNCgkJCUMxOTIuODQ5LDM4MS43MzksMTkyLjg0OSwzNzYuNzczLDE4OS43ODUsMzczLjcwOHoiLz4NCgk8L2c+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8L3N2Zz4NCg==" />
            </button>
        </div>
        <dialog id="myModal" class="h-auto w-11/12 md:w-1/2 p-5  bg-white rounded-md ">

            <div class="flex flex-col w-full h-auto ">
                <!-- Header -->
                <div class="flex w-full h-auto justify-center items-center">
                    <div
                        class="flex w-10/12 h-auto py-3 justify-center items-center text-2xl font-bold">
                        <img src="/img/favicom.png" alt="" width="20%" style="margin-left: 50px">

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
                <div
                    class="flex w-full h-auto py-10 px-2 justify-center items-center bg-gray-200 rounded text-center text-gray-500">
                    <div class=" flex items-center justify-center">

                        <form action="/intranet/trabajador/fontaneria/store" method="POST" id="form"
                            class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" enctype="multipart/form-data">
                            <h1 class="block text-gray-700 font-bold mb-2 text-xl text-center">
                                QUESTIONNAIRE TO ADD A JOBS</h1>
                            @csrf
                            <br>
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2"
                                    for="name">
                                    Nombre
                                </label>
                                <input
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    name="nombre" id="nombre" type="text"
                                    placeholder="Ingresa tu Nombre" required>
                            </div>

                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2"
                                    for="name">
                                    Descripcion
                                </label>
                                <input
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    name="descripcion" id="descripcion" type="text"
                                    placeholder="Ingresa tu descripcion" required>
                            </div>

                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2"
                                    for="name">
                                    Precio
                                </label>
                                <input
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    name="precio" id="precio" type="text"
                                    placeholder="Ingresa el Precio" required>
                            </div>

                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2"
                                    for="name">
                                    Tiempo
                                </label>
                                <input
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    name="tiempo" id="tiempo" type="text"
                                    placeholder="Ingresa el tiempo que durara" required>
                            </div>

                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2"
                                    for="name">
                                    Categoria
                                </label>
                                <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                name="categoria" id="categoria" type="text" required>
                                <option selected disabled hidden>Seleccione</option>
                                <option value="Griferia">Griferia</option>
                                <option value="Tuberia">Tuberia</option>
                                <option value="Sanitario">Sanitario</option>
                                <option value="Termo">Termo</option>
                            </select>
                            </div>

                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2"
                                    for="name">
                                    Foto
                                </label>
                                <input type="file" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-900 leading-tight focus:outline-none focus:shadow-outline"
                                name="foto" id="foto" required accept="image/*">
                            </div>


                            <div class="flex items-right justify-between">
                                <button id="submit"
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                                    type="submit">
                                    Create <img src="/img/mas.svg" alt=""
                                        style="float: right; margin-left: 5px">
                                </button>
                            </div>

                            <div class="mb-4">


                        </form>

                    </div>
                    <script src="https://kit.fontawesome.com/1e268974cb.js" crossorigin="anonymous">
                    </script>
                    <script src="assets/js/helpers.js"></script>
                </div>
                <!-- End of Modal Content-->
            </div>
        </dialog>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form action="/intranet/trabajador/fontaneria">
                    @csrf
                    <div class="relative text-gray-600" style="position: absolute; right: 80px;">
                        <input type="search" name="search" placeholder="Search: Categoria"
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
                <table class="w-full text-md bg-white shadow-md rounded mb-4">
                    <tbody>
                        <tr class="border-b">
                            <th class="text-left p-3 px-5">Nombre</th>
                            <th class="text-left p-3 px-5">Categoria</th>
                            <th class="text-left p-3 px-5">Descripcion</th>
                            <th class="text-left p-3 px-5">Precio</th>
                            <th class="text-left p-3 px-5">Tiempo</th>
                            <th class="text-left p-3 px-5">Foto</th>
                            <th></th>
                        </tr>
                        @foreach ($fontaneria as $fonta)
                            <tr class="border-b hover:bg-orange-100 bg-gray-100">
                                <td class="p-3 px-5" style="width: 150px">{{ $fonta->nombre }}</td>
                                <td class="p-3 px-5" style="width: 100px">{{ $fonta->categoria }}</td>
                                <td class="p-3 px-5" style="width: 300px">{{ $fonta->descripcion }}</td>
                                <td class="p-3 px-5" style="width: 100px">{{ $fonta->precio }}€</td>
                                <td class="p-3 px-5" style="width: 100px">{{ $fonta->tiempo }} h</td>
                                <td class="p-3 px-5" style="width: 250px"><img src=" {{ url('storage/fontanerias', [$fonta->foto]) }}" alt=".." width="60%" style="height: 70px"></td>
                                <td class="p-3 px-5 flex justify-end">
                                    <div style="margin-top: 20px">
                                    {{-- <a href="/intranet/restaurante/{{ $fonta->id }}/pedido">
                                    <button style=" margin-left: -85px; margin-right: 10px" type="button" class="focus:outline-none text-white text-sm py-1 px-2 rounded-md bg-blue-500 hover:bg-blue-600 hover:shadow-lg">
                                        Orders
                                        <img style="width: 20px; float: right; margin-left: 2px" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIj8+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiBpZD0iTGF5ZXJfMSIgZGF0YS1uYW1lPSJMYXllciAxIiB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgd2lkdGg9IjUxMiIgaGVpZ2h0PSI1MTIiPjx0aXRsZT5Db21tZXJjaWFsIGRlbGl2ZXJ5IDwvdGl0bGU+PHBhdGggZD0iTTQ3Mi45MTYsMjI0SDQ0OC4wMDdhMjQuNTM0LDI0LjUzNCwwLDAsMC0yMy40MTctMThIMzk4VjE0MC45NzZhNi44Niw2Ljg2LDAsMCwwLTMuMzQ2LTYuMDYyTDIwNy4wNzcsMjYuNTcyYTYuOTI3LDYuOTI3LDAsMCwwLTYuOTYyLDBMMTIuNDgsMTM0LjkxNEE2Ljk4MSw2Ljk4MSwwLDAsMCw5LDE0MC45NzZWMzU3LjY2MWE3LDcsMCwwLDAsMy41LDYuMDYyTDIwMC4xNTQsNDcyLjA2NWE3LDcsMCwwLDAsMy41LjkzOCw3LjM2MSw3LjM2MSwwLDAsMCwzLjYtLjkzOEwzMDYsNDE1LjEwOHY0MS4xNzRBMjkuNjQyLDI5LjY0MiwwLDAsMCwzMzUuODkxLDQ4Nkg0NzIuOTE2QTI5LjgwNywyOS44MDcsMCwwLDAsNTAzLDQ1Ni4yODJ2LTIwMi4xQTMwLjIsMzAuMiwwLDAsMCw0NzIuOTE2LDIyNFptLTQ4LjA3Ny00QTEwLjE2MSwxMC4xNjEsMCwwLDEsNDM1LDIzMC4xNjF2LjY3OEExMC4xNjEsMTAuMTYxLDAsMCwxLDQyNC44MzksMjQxSDM4NC4xNjFBMTAuMTYxLDEwLjE2MSwwLDAsMSwzNzQsMjMwLjgzOXYtLjY3OEExMC4xNjEsMTAuMTYxLDAsMCwxLDM4NC4xNjEsMjIwWk0yMDMuNjU0LDQwLjcxN2w3Ny45NzQsNDUuMDE4TDEwNy45ODYsMTg1Ljk4NywzMC4wMTMsMTQwLjk2OVpNMTk3LDQ1My44NzgsMjMsMzUzLjYxOVYxNTMuMDg1TDE5NywyNTMuMzQ0Wm02LjY1NC0yMTIuNjU4LTgxLjY2OC00Ny4xNTFMMjk1LjYyOCw5My44MTgsMzc3LjMsMTQwLjk2OVpNMzA2LDI1NC4xODJWMzk4Ljk0M2wtOTUsNTQuOTM1VjI1My4zNDRMMzg0LDE1My4wODVWMjA2aC4yMTdBMjQuNTMzLDI0LjUzMywwLDAsMCwzNjAuOCwyMjRIMzM1Ljg5MUEzMC4wMzcsMzAuMDM3LDAsMCwwLDMwNiwyNTQuMTgyWm0xODMsMjAyLjFBMTUuNzkzLDE1Ljc5MywwLDAsMSw0NzIuOTE2LDQ3MkgzMzUuODkxQTE1LjYyOCwxNS42MjgsMCwwLDEsMzIwLDQ1Ni4yODJ2LTIwMi4xQTE2LjAyMiwxNi4wMjIsMCwwLDEsMzM1Ljg5MSwyMzhoMjUuMTgyYTIzLjk0NCwyMy45NDQsMCwwLDAsMjMuMTQ0LDE3SDQyNC41OWEyMy45NDIsMjMuOTQyLDAsMCwwLDIzLjE0My0xN2gyNS4xODNBMTYuMTg2LDE2LjE4NiwwLDAsMSw0ODksMjU0LjE4MloiLz48cGF0aCBkPSJNMzQzLjk0OSwzMjVoNy4zMjdhNyw3LDAsMSwwLDAtMTRIMzUxVjI5MmgxOS4zMDdhNi43MzksNi43MzksMCwwLDAsNi42NTUsNC43MjdBNy4wMTksNy4wMTksMCwwLDAsMzg0LDI4OS43NDN2LTQuNzFBNy4wOTMsNy4wOTMsMCwwLDAsMzc2LjkyNCwyNzhIMzQzLjk0OUE2Ljk4NSw2Ljk4NSwwLDAsMCwzMzcsMjg1LjAzM3YzMi45NzVBNi45NSw2Ljk1LDAsMCwwLDM0My45NDksMzI1WiIvPjxwYXRoIGQ9Ik0zNDQsMzg5aDMzYTcsNywwLDAsMCw3LTdWMzQ5YTcsNywwLDAsMC03LTdIMzQ0YTcsNywwLDAsMC03LDd2MzNBNyw3LDAsMCwwLDM0NCwzODlabTctMzNoMTl2MTlIMzUxWiIvPjxwYXRoIGQ9Ik0zNTEuMjc3LDQzOUgzNTFWNDIwaDE4LjkyOWE3LjAzNyw3LjAzNywwLDAsMCwxNC4wNzEuMDE0di02Ljc0NUE3LjMsNy4zLDAsMCwwLDM3Ni45MjQsNDA2SDM0My45NDlBNy4xOTEsNy4xOTEsMCwwLDAsMzM3LDQxMy4yNjl2MzIuOTc1QTYuNzUyLDYuNzUyLDAsMCwwLDM0My45NDksNDUzaDcuMzI4YTcsNywwLDEsMCwwLTE0WiIvPjxwYXRoIGQ9Ik0zOTMuMDQxLDI4Ni41OTJsLTIwLjUsMjAuNS02LjIzNi02LjIzN2E3LDcsMCwxLDAtOS45LDkuOWwxMS4xODcsMTEuMTg2YTcsNywwLDAsMCw5LjksMGwyNS40NTItMjUuNDUyYTcsNywwLDAsMC05LjktOS45WiIvPjxwYXRoIGQ9Ik0zOTMuMDQxLDQxNS44NDFsLTIwLjUsMjAuNS02LjIzNi02LjIzN2E3LDcsMCwxLDAtOS45LDkuOWwxMS4xODcsMTEuMTg2YTcsNywwLDAsMCw5LjksMGwyNS40NTItMjUuNDUyYTcsNywwLDAsMC05LjktOS45WiIvPjxwYXRoIGQ9Ik00NjQuODU3LDI5NUg0MjAuODkxYTcsNywwLDAsMCwwLDE0aDQzLjk2NmE3LDcsMCwwLDAsMC0xNFoiLz48cGF0aCBkPSJNNDY0Ljg1NywzNTlINDIwLjg5MWE3LDcsMCwwLDAsMCwxNGg0My45NjZhNyw3LDAsMCwwLDAtMTRaIi8+PHBhdGggZD0iTTQ2NC44NTcsNDIzSDQyMC44OTFhNyw3LDAsMCwwLDAsMTRoNDMuOTY2YTcsNywwLDAsMCwwLTE0WiIvPjwvc3ZnPgo=" />
                                    </button></a> --}}

                                    <button onclick="document.getElementById('update').showModal()" style="margin-right: 10px;" type="button" class="focus:outline-none text-white text-sm py-1 px-2 rounded-md bg-yellow-500 hover:bg-yellow-600 hover:shadow-lg">
                                        Update
                                        <img style="width: 20px; float: right; margin-left: 2px" src="data:image/svg+xml;base64,PHN2ZyBpZD0iQ2FwYV8xIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCA1MTIgNTEyIiBoZWlnaHQ9IjUxMiIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHdpZHRoPSI1MTIiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGc+PHBhdGggZD0ibTM4OC45MjIgMzI1LjI4MmM0LjA4My03LjgwMyA3LjQ1My0xNS45MTcgMTAuMDg2LTI0LjI4MmgxNi45OTJjOC4yODQgMCAxNS02LjcxNiAxNS0xNXYtNjBjMC04LjI4NC02LjcxNi0xNS0xNS0xNWgtMTYuOTkyYy0yLjYzMy04LjM2NS02LjAwMy0xNi40NzktMTAuMDg2LTI0LjI4MmwxMi4wMzUtMTIuMDM1YzUuODU4LTUuODU4IDUuODU4LTE1LjM1NSAwLTIxLjIxM2wtNDIuNDI3LTQyLjQyN2MtNS44NTctNS44NTgtMTUuMzU1LTUuODU4LTIxLjIxMyAwbC0xMi4wMzUgMTIuMDM1Yy03LjgwMi00LjA4Mi0xNS45MTgtNy40NTQtMjQuMjgyLTEwLjA4NnYtMTYuOTkyYzAtOC4yODQtNi43MTYtMTUtMTUtMTVoLTYwYy04LjI4NCAwLTE1IDYuNzE2LTE1IDE1djE2Ljk5MmMtOC4zNjQgMi42MzMtMTYuNDggNi4wMDQtMjQuMjgyIDEwLjA4NmwtMTIuMDM1LTEyLjAzNWMtMi44MTItMi44MTMtNi42MjgtNC4zOTQtMTAuNjA2LTQuMzk0cy03Ljc5NCAxLjU4MS0xMC42MDYgNC4zOTRsLTQyLjQyNiA0Mi40MjdjLTUuODU4IDUuODU4LTUuODU4IDE1LjM1NSAwIDIxLjIxM2wxMi4wMzQgMTIuMDM1Yy00LjA4MyA3LjgwMy03LjQ1MyAxNS45MTctMTAuMDg2IDI0LjI4M2gtMTYuOTkzYy04LjI4NCAwLTE1IDYuNzE2LTE1IDE1djYwYzAgOC4yODQgNi43MTYgMTUgMTUgMTVoMTYuOTkyYzIuNjMzIDguMzY2IDYuMDAzIDE2LjQ4IDEwLjA4NiAyNC4yODNsLTEyLjAzNCAxMi4wMzRjLTUuODU4IDUuODU4LTUuODU4IDE1LjM1NSAwIDIxLjIxM2w0Mi40MjYgNDIuNDI3YzIuODEyIDIuODEzIDYuNjI4IDQuMzk0IDEwLjYwNiA0LjM5NHM3Ljc5NC0xLjU4MSAxMC42MDYtNC4zOTRsMTIuMDM1LTEyLjAzNWM3LjgwMiA0LjA4MiAxNS45MTggNy40NTMgMjQuMjgyIDEwLjA4NnYxNi45OTFjMCA4LjI4NCA2LjcxNiAxNSAxNSAxNWg2MGM4LjI4NCAwIDE1LTYuNzE2IDE1LTE1di0xNi45OTJjOC4zNjUtMi42MzMgMTYuNDc5LTYuMDA0IDI0LjI4Mi0xMC4wODZsMTIuMDM1IDEyLjAzNWM1Ljg1NyA1Ljg1OCAxNS4zNTUgNS44NTggMjEuMjEzIDBsNDIuNDI3LTQyLjQyN2M1Ljg1OC01Ljg1OCA1Ljg1OC0xNS4zNTUgMC0yMS4yMTN6bS0xNi4wMS00Mi42MDZjLTIuOTgxIDEzLjEyMi04LjE2NSAyNS42MDQtMTUuNDA3IDM3LjEtMy43MzIgNS45MjctMi44NjcgMTMuNjQ4IDIuMDg2IDE4LjYwMWw5LjU0NyA5LjU0Ny0yMS4yMTQgMjEuMjEzLTkuNTQ3LTkuNTQ2Yy00Ljk1Mi00Ljk1My0xMi42NzYtNS44MTktMTguNjAxLTIuMDg1LTExLjQ5NyA3LjI0MS0yMy45NzkgMTIuNDI1LTM3LjEwMSAxNS40MDctNi44MjggMS41NTItMTEuNjc1IDcuNjIzLTExLjY3NSAxNC42Mjd2MTMuNDZoLTMwdi0xMy40NjFjMC03LjAwMy00Ljg0Ny0xMy4wNzUtMTEuNjc2LTE0LjYyNy0xMy4xMjEtMi45ODItMjUuNjA0LTguMTY1LTM3LjEwMS0xNS40MDYtNS45MjgtMy43MzMtMTMuNjQ4LTIuODY4LTE4LjYwMSAyLjA4NWwtOS41NDcgOS41NDYtMjEuMjEzLTIxLjIxMyA5LjU0Ni05LjU0NmM0Ljk1My00Ljk1MyA1LjgxOC0xMi42NzQgMi4wODYtMTguNjAxLTcuMjQxLTExLjQ5Ni0xMi40MjUtMjMuOTc4LTE1LjQwNy0zNy4xMDEtMS41NTItNi44My03LjYyMy0xMS42NzYtMTQuNjI3LTExLjY3NmgtMTMuNDZ2LTMwaDEzLjQ2MWM3LjAwNCAwIDEzLjA3NS00Ljg0NyAxNC42MjctMTEuNjc2IDIuOTgxLTEzLjEyMiA4LjE2NS0yNS42MDQgMTUuNDA3LTM3LjEgMy43MzItNS45MjcgMi44NjctMTMuNjQ4LTIuMDg2LTE4LjYwMWwtOS41NDYtOS41NDYgMjEuMjEzLTIxLjIxMyA5LjU0NyA5LjU0NmM0Ljk1MiA0Ljk1NCAxMi42NzYgNS44MTkgMTguNjAxIDIuMDg1IDExLjQ5Ny03LjI0MSAyMy45NzktMTIuNDI0IDM3LjEwMS0xNS40MDYgNi44MjktMS41NTIgMTEuNjc2LTcuNjI0IDExLjY3Ni0xNC42Mjd2LTEzLjQ2MmgzMHYxMy40NjFjMCA3LjAwNCA0Ljg0NyAxMy4wNzUgMTEuNjc2IDE0LjYyNyAxMy4xMjEgMi45ODEgMjUuNjAzIDguMTY1IDM3LjEwMSAxNS40MDcgNS45MjcgMy43MzMgMTMuNjQ3IDIuODY3IDE4LjYwMS0yLjA4NWw5LjU0Ny05LjU0NiAyMS4yMTQgMjEuMjEzLTkuNTQ3IDkuNTQ3Yy00Ljk1MyA0Ljk1My01LjgxOCAxMi42NzQtMi4wODYgMTguNjAxIDcuMjQyIDExLjQ5NiAxMi40MjYgMjMuOTc4IDE1LjQwNyAzNy4xIDEuNTUyIDYuODMgNy42MjMgMTEuNjc2IDE0LjYyNyAxMS42NzZoMTMuNDU5djMwaC0xMy40NjFjLTcuMDA0LS4wMDEtMTMuMDc1IDQuODQ2LTE0LjYyNyAxMS42NzV6Ii8+PHBhdGggZD0ibTI1NiAxNjFjLTUyLjM4MyAwLTk1IDQyLjYxNy05NSA5NXM0Mi42MTcgOTUgOTUgOTUgOTUtNDIuNjE3IDk1LTk1LTQyLjYxNy05NS05NS05NXptMCAxNjBjLTM1Ljg0MSAwLTY1LTI5LjE1OS02NS02NXMyOS4xNTktNjUgNjUtNjUgNjUgMjkuMTU5IDY1IDY1LTI5LjE1OSA2NS02NSA2NXoiLz48cGF0aCBkPSJtNDY2LjQxMiA0MTEuNDEzaC02Ljk1OGMzNC4wNzUtNDQuNDE4IDUyLjU0Ni05OC40OTEgNTIuNTQ2LTE1NS40MTMgMC02OC4zOC0yNi42MjktMTMyLjY2Ny03NC45OC0xODEuMDItNDguMzUzLTQ4LjM1MS0xMTIuNjQtNzQuOTgtMTgxLjAyLTc0Ljk4LTM0LjU1NCAwLTY4LjA4MSA2Ljc3MS05OS42NTEgMjAuMTI0LTcuNjMgMy4yMjctMTEuMTk4IDEyLjAyOS03Ljk3MiAxOS42NTggMy4yMjggNy42MyAxMi4wMjQgMTEuMTk4IDE5LjY1OSA3Ljk3MiAyNy44NTItMTEuNzgxIDU3LjQ0Ny0xNy43NTQgODcuOTY0LTE3Ljc1NCAxMjQuNjE3IDAgMjI2IDEwMS4zODMgMjI2IDIyNiAwIDQ2Ljk1My0xNC4yMzQgOTEuNzExLTQwLjYzOSAxMjkuMzcyLS41MzctNy43OTctNy4wMTUtMTMuOTU5LTE0Ljk0OC0xMy45NTktOC4yODQgMC0xNSA2LjcxNi0xNSAxNXY0MGMwIDguMjg0IDYuNzE2IDE1IDE1IDE1aDM5Ljk5OWM4LjI4NCAwIDE1LTYuNzE2IDE1LTE1cy02LjcxNi0xNS0xNS0xNXoiLz48cGF0aCBkPSJtMzQzLjk2NCA0NjQuMjQ2Yy0yNy44NTIgMTEuNzgxLTU3LjQ0NyAxNy43NTQtODcuOTY0IDE3Ljc1NC0xMjQuNjE3IDAtMjI2LTEwMS4zODMtMjI2LTIyNiAwLTQ2Ljk1NyAxNC4yMjktOTEuNzI0IDQwLjYzOS0xMjkuMzg4LjUyOSA3LjgwNCA3LjAxIDEzLjk3NSAxNC45NDggMTMuOTc1IDguMjg0IDAgMTUtNi43MTYgMTUtMTV2LTQwYzAtOC4yODQtNi43MTYtMTUtMTUtMTVoLTQwYy04LjI4NCAwLTE1IDYuNzE2LTE1IDE1czYuNzE2IDE1IDE1IDE1aDYuOTY1Yy0zNC4wNzggNDQuNDE3LTUyLjU1MiA5OC40OS01Mi41NTIgMTU1LjQxMyAwIDY4LjM4IDI2LjYyOSAxMzIuNjY3IDc0Ljk4IDE4MS4wMiA0OC4zNTMgNDguMzUxIDExMi42NCA3NC45OCAxODEuMDIgNzQuOTggMzQuNTU0IDAgNjguMDgxLTYuNzcxIDk5LjY1MS0yMC4xMjQgNy42My0zLjIyNyAxMS4xOTgtMTIuMDI5IDcuOTcyLTE5LjY1OC0zLjIyNy03LjYzMS0xMi4wMjYtMTEuMi0xOS42NTktNy45NzJ6Ii8+PC9nPjwvc3ZnPg==" />
                                    </button>

                                    <a href="/intranet/trabajador/fontaneria/{{ $fonta->id }}/delete">
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
                {{ $fontaneria->Links() }}


                    <dialog id="update"="h-auto w-11/12 md:w-1/2 p-5  bg-white rounded-md ">
                        <div class="flex flex-col w-full h-auto ">
                            <!-- Header -->
                            <div class="flex w-full h-auto justify-center items-center">
                                <div
                                    class="flex w-10/12 h-auto py-3 justify-center items-center text-2xl font-bold">
                                    <img src="/img/favicom.png" alt="" width="20%" style="margin-left: 50px">

                                </div>
                                <div onclick="document.getElementById('update').close();"
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
                            <div
                                class="flex w-full h-auto py-10 px-2 justify-center items-center bg-gray-200 rounded text-center text-gray-500">
                                <div class=" flex items-center justify-center">
                                    @if (isset($fonta->id))
                                    <form action="/intranet/trabajador/fontaneria/{{$fonta->id}}/update" method="POST" id="form"
                                        class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" enctype="multipart/form-data">
                                        <h1 class="block text-gray-700 font-bold mb-2 text-xl text-center">
                                            QUESTIONNAIRE TO UPDATE OF FONTANERIA</h1>
                                        @csrf
                                        <br>

                                        <div class="mb-4">
                                            <label class="block text-gray-700 text-sm font-bold mb-2"
                                                for="name">
                                                Descripcion
                                            </label>
                                            <textarea cols="10" rows="10" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                            name="descripcion" id="descripcion" type="text"
                                            placeholder="Cambia la descripcion" required></textarea>
                                        </div>

                                        <div class="mb-4">
                                            <label class="block text-gray-700 text-sm font-bold mb-2"
                                                for="name">
                                                Precio
                                            </label>
                                            <input
                                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                name="precio" id="precio" type="text"
                                                placeholder="Cambia el precio" required>
                                        </div>

                                        <div class="flex items-right justify-between">
                                            <button id="submit"
                                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                                                type="submit">
                                                Create <img src="/img/mas.svg" alt=""
                                                    style="float: right; margin-left: 5px">
                                            </button>
                                        </div>

                                        <div class="mb-4">


                                    </form>
                                    @endif
                                </div>
                                <script src="https://kit.fontawesome.com/1e268974cb.js" crossorigin="anonymous">
                                </script>
                                <script src="assets/js/helpers.js"></script>
                            </div>
                            <!-- End of Modal Content-->
                        </div>
                    </dialog>

            </div>
        </div>
    </div>
</x-app-layout>
