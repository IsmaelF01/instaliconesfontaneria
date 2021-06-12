<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use App\Models\Fontaneria;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = User::find(Auth::id());
        $query = trim($request->get('search'));
        $citas = Cita::where('estado', 'LIKE', '%'.$query.'%')->where('user_id', '=', Auth::id())->orderBy('id', 'asc')->paginate(5);
        $fontaneria = Fontaneria::all();
        return view("tienda.citas", ["citas" => $citas, "user" => $user, "fontaneria" => $fontaneria]);
    }

    public function index_pedido(Request $request, $id)
    {
        $user = User::find(Auth::id());
        $query = trim($request->get('search'));
        $citas = Cita::where('estado', 'LIKE', '%'.$query.'%')->where('user_id', '=', Auth::id())->orderBy('id', 'asc')->paginate(5);
        $fontaneria = Fontaneria::find($id);
        return view("tienda.citas", ["citas" => $citas, "user" => $user, "fontaneria" => $fontaneria]);
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
        $cita = new Cita;
        $cita->estado = "Recibido";
        $cita->descripcion = $request->descripcion;
        $cita->direccion = $request->direccion;
        $cita->ciudad = $request->ciudad;
        $cita->fontaneria_id = $request->fontaneria;
        $cita->user_id = Auth::id();
        $cita->save();

        // return view('error', ["request" => $request]);
        return redirect()->action([CitasController::class, 'index']);
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
        //
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
            [CitasController::class, 'index']
        );
    }
}
