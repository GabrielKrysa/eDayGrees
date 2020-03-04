<?php

namespace App\Http\Middleware;

use App\Cadastro_cultivare;
use Closure;
use Illuminate\Support\Facades\Auth;

class CultivarsLimit
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Cadastro_cultivare::where('id_proprietario', Auth::user()->id)->count() < 3) {
            return $next($request);
        }else{
            return redirect('/relatorio')->with(['msg'=>'Você atingiu o limite de cultivares cadastrados!']);
        }
    }
}
