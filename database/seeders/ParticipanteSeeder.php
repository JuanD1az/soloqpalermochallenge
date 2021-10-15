<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Participante;

class ParticipanteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $participante = new ParticipanteSeeder();
        $participante->nickname = '';
        $participante->iduser = '';
        $participante->save();

        $participante = new ParticipanteSeeder();
        $participante->nickname = '';
        $participante->iduser = '';
        $participante->save();

        $participante = new ParticipanteSeeder();
        $participante->nickname = 'dsadasdas';
        $participante->iduser = '';
        $participante->save();

        $participante = new ParticipanteSeeder();
        $participante->nickname = '';
        $participante->iduser = '';
        $participante->save();

        $participante = new ParticipanteSeeder();
        $participante->nickname = '';
        $participante->iduser = '';
        $participante->save();

        $participante = new ParticipanteSeeder();
        $participante->nickname = '';
        $participante->iduser = '';
        $participante->save();

        $participante = new ParticipanteSeeder();
        $participante->nickname = '';
        $participante->iduser = '';
        $participante->save();
    }
}