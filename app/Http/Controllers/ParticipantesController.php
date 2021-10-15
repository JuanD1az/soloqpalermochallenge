<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ParticipantesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $array = [];
        $arrayPrueba = [
            [
                'nombre' => 'juan',
                'id' => 'zuzUIOZ1iCdArcaYBFZQHlil4RL2T_xfT4eQnJfk55ED_A'
            ],
            [
                'nombre' => 'fakous',
                'id' => 'F-_PAzy7u4WRZbrFhCHyJnXg2nacHUb-JlyDnt7oit4pDQ'
            ]
        ];
        
        for($i=0;$i<count($arrayPrueba);$i++){
            $response = Http::get("https://la2.api.riotgames.com/lol/league/v4/entries/by-summoner/".$arrayPrueba[$i]['id']."?api_key=RGAPI-f688aa2d-09ea-4f9d-a0c7-6559abc992e4");
            $datos = json_decode($response->getBody());
            $array[$i] = $datos;
            $array[$i][5]['nombre']=$arrayPrueba[$i]['nombre'];
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
