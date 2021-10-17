<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

use Illuminate\Support\Facades\Http;
use App\Models\Participante;
use Illuminate\Support\Facades\DB;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $participantes = Participante::all();
        $riotid = DB::table('tokenriot')
            ->select('riot')
            ->pluck('riot');

        foreach($participantes as $ps  => $key){
            $usuario = Participante::find($key->id);
            $response = Http::get("https://la2.api.riotgames.com/lol/summoner/v4/summoners/by-name/$key->nicklol?api_key=".$riotid[0]);
            $datoid = json_decode($response->getBody());
            $usuario->iduser = $datoid->id;
            $usuario->save();
        }
        return redirect('/');

        $this->reportable(function (Throwable $e) {
            
        });
    }
}
