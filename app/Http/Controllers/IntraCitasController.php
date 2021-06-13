<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class IntraCitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request){
            $user = User::find(Auth::id());
            $query = trim($request->get('search'));
            $citas = Cita::where('estado', 'LIKE', '%'.$query.'%')->orderBy('id', 'asc')->paginate(5);
            return view("intranet.citas", ["citas" => $citas]);
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
    public function update(Request $request, $id)
    {
        $cita = Cita::find($id);
        if($cita->estado == 'Recibido'){
            DB::table('citas')
                ->where('id', $id)
                ->update([
                    'estado' => 'Preparado'
                    ]);
        }
        if($cita->estado == 'Preparado'){
            DB::table('citas')
                ->where('id', $id)
                ->update([
                    'estado' => 'Finalizado'
                    ]);
        }

        return redirect()->action([IntraCitasController::class, 'index']);
    }

    public function fecha_cita(Request $request, $id){
        DB::table('citas')
            ->where('id', $id)
            ->update([
                'estado' => 'Preparado',
                'fecha' => $request->fecha,
                'hora' => $request->hora,
                ]);

        return redirect()->action([IntraCitasController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('citas')->where('id', '=', $id)->delete();
        return redirect()->action(
            [IntraCitasController::class, 'index']
        );
    }
}
