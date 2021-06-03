<x-tienda-layout>
    <style>
        body {
            font-family: 'Nunito';
        }
        h3{
            color: red;
            border-bottom-style: dotted;
            border-bottom-color: black;
            text-align: center;
            font-weight: 900;
            font-size:20px;
        }

        p{
            text-align: center;
            color: blue;
        }
    </style>
    <h1 style="width: 30%; border-bottom: double red 10px; margin-left: 35%; text-align: center; font-size:30px; color:blue; margin-bottom:10px"><b> Instalacion de Fontaneria<br/><span style="color:black">Reformas y Montajes </span></b></h1>
    <div id="contenedor" style="float: left; margin-left: 15%; margin-top: -25px;">
        <h3>Ciudad</h3>
        <p>Garrucha Almería</p>
        <h3>Direccion</h3>
        <p>Calle Altas Yeseras, 52</p>
        <h3>Telefono</h3>
        <p> 663 110 476</p>
        <h3>Logo de la oficina </h3>
        <img src="{{ url('/img/logo.png')}}" class="img-responsive" width="255" alt="" style="margin-bottom: 90px; height: 200px;">
    </div>
    <div id="map" style="height: 350px; width: 50%; float: right; margin-right: 15%"></div>

    <script>
        function iniciarMap() {
            var coord = {
                lat: 37.177065790052175,
                lng: -1.825231730391331
            };
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 18,
                center: coord
            });
            var marker = new google.maps.Marker({
                position: coord,
                map: map
            });
        }

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnEvgtI-X_pjfdXcLuad_VMBmDRXrVtxQ&callback=iniciarMap"> </script>
</x-tienda-layout>
