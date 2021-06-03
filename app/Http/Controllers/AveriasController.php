<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use App\Models\Averia;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class AveriasController extends Controller
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
        $averias = Averia::where('estado', 'LIKE', '%'.$query.'%')->where('user_id', '=', Auth::id())->orderBy('id', 'asc')->paginate(5);
        return view("tienda.averias", ["averias" => $averias, "user" => $user]);
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
        $averia = new Averia;
        $averia->estado = "Recibido";
        $averia->descripcion = $request->descripcion;
        $averia->direccion = $request->direccion;
        $averia->ciudad = $request->ciudad;
        $averia->user_id = Auth::id();
        $averia->save();

        // Mail::to('reformasymontaje.pedroflores@gmail.com')->queue(new MessageReceived($averia));

        return redirect()->action([AveriasController::class, 'index']);
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
        DB::table('averias')->where('id', '=', $id)->delete();
        return redirect()->action(
            [AveriasController::class, 'index']
        );
    }
}
