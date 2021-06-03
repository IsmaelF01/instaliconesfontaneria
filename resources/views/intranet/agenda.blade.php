@php
    use App\Models\Cita;
    use App\Models\Averia;
@endphp
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Agenda') }}
        </h2>
    </x-slot>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
          var calendarEl = document.getElementById('agenda');
          var calendar = new FullCalendar.Calendar(calendarEl, {
            // initialView: 'dayGridMonth',
            locale: 'es',

            headerToolbar:{
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth'
            },

            events: [

                //Citas en azul
                @php
                $citas = Cita::all();
                foreach ($citas as $cita) {
                    if ($cita->estado == 'Finalizado'){
                    @endphp
                    {
                        id: "<?php echo $cita['id'];?>",
                        title:"CITA TERMINA",
                        /*description:*/
                        start:"<?php echo $cita['fecha'];?>",
                        color: 'rgba(0, 255, 0, 0.800)',
                        textColor: '#000',
                    },
                    @php
                    }else{
                    @endphp
                    {
                        id: "<?php echo $cita['id'];?>",
                        title:"<?php echo ucwords($cita->user->name).'/'.$cita->hora;?>",
                        /*description:*/
                        start:"<?php echo $cita['fecha'];?>",
                        color: 'rgba(0, 0, 255, 0.800)',
                        textColor: '#ffffff',
                    },
                    @php
                    }
                }
                @endphp

                //Averias en rojo
                @php
                $averias = Averia::all();
                foreach ($averias as $averia) {
                    if ($averia->estado == 'Finalizado'){
                    @endphp
                    {
                        id: "<?php echo $averia['id'];?>",
                        title:"AVERIA TERMINADA",
                        /*description:*/
                        start:"<?php echo $averia['fecha'];?>",
                        color: 'rgba(0, 255, 0, 0.800)',
                        textColor: '#000',
                    },
                    @php
                    }else{
                    @endphp
                    {
                        id: "<?php echo $averia['id'];?>",
                        title:"<?php echo ucwords($averia->user->name).'/'.$averia->hora;?>",
                        /*description:*/
                        start:"<?php echo $averia['fecha'];?>",
                        color: 'rgba(255, 0, 0, 0.800)',
                        textColor: '#ffffff',
                    },
                    @php
                    }
                }
                @endphp
            ],

            dateClick:function(info){
                var año = info['date'].getFullYear();
                var mes = info['date'].getMonth()+1;
                var dia = info['date'].getDate();
                if(mes == '10' || mes == '11' || mes == '12')
                var fecha = año+'-'+mes+'-'+dia;
                else
                var fecha = año+'-0'+mes+'-'+dia;
                window.location.href = "http://localhost:8000/intranet/trabajador/agenda/"+fecha;

            }
          });
          calendar.render();
        });
      </script>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div id="agenda"></div>
            </div>
        </div>
    </div>
</x-app-layout>
