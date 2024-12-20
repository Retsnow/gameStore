<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TableUsagersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('usagers')->insert([
            [
                'id' => 1,
                'mail' => 'j.b@edu.cegeptr.qc.ca',
                'nom' => 'Beausoleil',
                'prenom' => 'Jeremy',
                'statut' => 'admin'
            ],
            [
                'id' => 2,
                'mail' => 'max@edu.cegeptr.qc.ca',
                'nom' => 'Beaupre',
                'prenom' => 'Max',
                'statut' => 'etudiant'
            ],
            [
                'id' => 3,
                'mail' => 'matto@edu.cegeptr.qc.ca',
                'nom' => 'Judge',
                'prenom' => 'Mathew',
                'statut' => 'usager'
            ]

            ]);
    }
}
