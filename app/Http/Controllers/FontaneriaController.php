<?php

namespace App\Http\Controllers;

use App\Models\Fontaneria;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class FontaneriaController extends Controller
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
        $fontaneria = Fontaneria::where('categoria', 'LIKE', '%'.$query.'%')->orderBy('id', 'asc')->paginate(5);
        return view("intranet.fontaneria", ["fontaneria" => $fontaneria, "user" => $user]);
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
        $entrada = $request->all();

        $nombre = $entrada['nombre'] . "-" . $request->file('foto')->getClientOriginalName();
        $request->foto->storeAs('public/img/fontanerias/', $nombre);


        $fontaneria = new Fontaneria;
        $fontaneria->nombre = $request->nombre;
        $fontaneria->foto = $nombre;
        $fontaneria->descripcion = $request->descripcion;
        $fontaneria->categoria = $request->categoria;
        $fontaneria->precio = $request->precio;
        $fontaneria->tiempo = $request->tiempo;
        $fontaneria->user_id = Auth::id();
        $fontaneria->save();

        return redirect()->action([FontaneriaController::class, 'index']);
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
        DB::table('fontanerias')
            ->where('id', $id)
            ->update([
                'descripcion' => $request->descripcion,
                'precio' => $request->precio,
                ]);

        return redirect()->action([FontaneriaController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $todo = Fontaneria::where('id', $id)->first();
        Storage::delete('public/img/fontanerias/'.$todo->foto);
        DB::table('fontanerias')->where('id', '=', $id)->delete();
        return redirect()->action(
            [FontaneriaController::class, 'index']
        );
    }
}
