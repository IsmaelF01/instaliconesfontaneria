<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, string $role)
    {
        $id = Auth::id();
        $user = User::find($id);

        //Si no es admin comprobamos si los roles pueden entrar a las rutas
        if ($user->role->role != "admin") {
            //Si el rol no incide con la ruta mostramos error 403
            if ($role == 'trabajador' && $user->role->role != "trabajador") {
                return redirect('error');
            }

            if ($role == 'cliente' && $user->role->role != "cliente") {
                return view('error');
            }
            return $next($request);
        }

        //Cuando es admin salta el chekeo
        return $next($request);
    }
}
