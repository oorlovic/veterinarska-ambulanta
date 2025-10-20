<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Veterinar;
use App\Models\Ljubimac;
use App\Models\Pregled;
use App\Models\Log;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Kreiramo admin korisnika
        User::create([
            'name' => 'Admin',
            'email' => 'admin@local',
            'password' => bcrypt('password'),
            'uloga' => 'admin'
        ]);

        // Kreiramo veterinara
        Veterinar::create([
            'ime' => 'Dr. Petar',
            'specijalizacija' => 'Opšta praksa',
            'email' => 'petar@local'
        ]);

        // Kreiramo ljubimca
        Ljubimac::create([
            'ime' => 'Maza',
            'vrsta' => 'Pas',
            'rasa' => 'Labrador',
            'starost' => 3,
            'datum_rodjenja' => '2022-05-01',
            'vlasnik_id' => 1
        ]);


        // Kreiramo pregled
        Pregled::create([
            'datum' => now(),
            'opis' => 'Redovan pregled',
            'ljubimac_id' => 1,
            'veterinar_id' => 1,
            'korisnik_id' => 1
        ]);

        // Kreiramo log
        Log::create([
            'korisnik_id' => 1,
            'akcija' => 'Inicijalni unos podataka',
            'datum' => now()
        ]);
    }
}
