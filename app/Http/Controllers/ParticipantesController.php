<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Participante;
use Illuminate\Support\Facades\DB;

class ParticipantesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $participantes = Participante::all();
        $riotid = DB::table('tokenriot')
            ->select('riot')
            ->pluck('riot');
        $array = [];
        foreach($participantes as $p => $key){
            $array[$key->id] = Participante::find($key->id);
            $response = Http::get("https://la2.api.riotgames.com/lol/league/v4/entries/by-summoner/$key->iduser?api_key=".$riotid[0]);
            $datos = json_decode($response->getBody());
            if(is_array($datos) == false){
                return redirect('actualizar');
            }else{
            $array[$key->id] = $datos;
            $array[$key->id][5]['nombre']=$key->nickname;
            $array[$key->id][5]['opgg']=$key->opgg;

            $response2 = Http::get("https://la2.api.riotgames.com/lol/spectator/v4/active-games/by-summoner/$key->iduser?api_key=".$riotid[0]);
            $datos2 = json_decode($response2->getBody());
                if(count((array)$datos2) == 1){
                    $array[$key->id][5]['actividad']='Inactivo';
                }else{
                    $array[$key->id][5]['actividad']='Activo';
                }
            }
        }
    
        return view('welcome')->with('array',$array);
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
        //
    }
}
