<?php

namespace App\Http\Controllers;

use App\Models\Averia;
use App\Models\Cita;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $fecha)
    {
        if($request){
            $user = User::find(Auth::id());
            $query = trim($request->get('search'));
            $citas = Cita::where('fecha', 'LIKE', $fecha)->where('estado', 'LIKE', '%'.$query.'%')->orderBy('id', 'asc')->paginate(5);
            $averias = Averia::where('fecha', 'LIKE', $fecha)->where('estado', 'LIKE', '%'.$query.'%')->orderBy('id', 'asc')->paginate(5);

            return view("intranet.mostrar", ["citas" => $citas, "averias" => $averias, 'fecha' => $fecha]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_cita(Request $request, $id)
    {
            DB::table('citas')
                ->where('id', $id)
                ->update([
                    'estado' => 'Finalizado'
                    ]);

        return redirect('intranet/trabajador/agenda');
        // return redirect()->action([AgendaController::class, 'index']);
    }

    public function fecha_cita(Request $request, $id){
        DB::table('citas')
            ->where('id', $id)
            ->update([
                'fecha' => $request->fecha,
                'hora' => $request->hora,
                ]);

        echo ($request->fecha .' y '. $id);
        // return redirect()->action([AgendaController::class, 'index']);
    }

    public function update_averia(Request $request, $id)
    {
        $averia = Averia::find($id);
        if($averia->estado == 'Recibido'){
            DB::table('averias')
                ->where('id', $id)
                ->update([
                    'estado' => 'Preparado'
                    ]);
        }
        if($averia->estado == 'Preparado'){
            DB::table('averias')
                ->where('id', $id)
                ->update([
                    'estado' => 'Finalizado'
                    ]);
        }

        return redirect('intranet/trabajador/agenda');
        // return redirect()->action([AgendaController::class, 'index']);
    }

    public function fecha_averia(Request $request, $id){
        DB::table('averias')
            ->where('id', $id)
            ->update([
                'fecha' => $request->fecha,
                'hora' => $request->hora,
                ]);

        // echo ($request->fecha .' y '. $id);
        return redirect()->action([AgendaController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy_cita($id)
    {
        DB::table('citas')->where('id', '=', $id)->delete();
        return redirect()->action(
            [AgendaController::class, 'index']
        );
    }
    public function destroy_averia($id)
    {
        DB::table('averias')->where('id', '=', $id)->delete();
        return redirect()->action(
            [AgendaController::class, 'index']
        );
    }
}
