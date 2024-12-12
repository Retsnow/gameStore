<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TableJeuxSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jeux')->insert([
            [
                'id' => 1,
                'nom' => 'Fortnite',
                'image' => 'https://full.life/media/magefan_blog/Fortnite_Reload.jpg',
                'video' => 'https://youtu.be/6jMkQooLNKc?si=_lQ4WEnhkrzkxGKV',
                'lien' => 'https://fortnite.com',
                'nb_download' => 16,
                'date_sortie' => 20170721,
                'genres_id' => 4
            ],
            [
                'id' => 2,
                'nom' => 'Need For Speed',
                'image' => 'https://images4.alphacoders.com/644/thumb-1920-644211.jpg',
                'video' => 'https://youtu.be/ha-0N1wdz1w?si=nuQ0F4k__ymL2RL1',
                'lien' => 'https://needforspeed.com',
                'nb_download' => 46,
                'date_sortie' => 20151002,
                'genres_id' => 3
            ],
            [
                'id' => 3,
                'nom' => 'Rainbow Six Siege',
                'image' => 'https://journalmetro.com/wp-content/uploads/2017/02/rainbow.jpg',
                'video' => 'https://www.youtube.com/watch?v=r7waDLS0qvs',
                'lien' => 'https://rainbowsix.com',
                'nb_download' => 2500,
                'date_sortie' => 20151201,
                'genres_id' => 1
            ],
            [
                'id' => 4,
                'nom' => 'COD Black Ops 6',
                'image' => 'https://gamingrespawn.com/wp-content/uploads/2024/11/BO6_LP-meta_image.jpg',
                'video' => 'https://www.youtube.com/watch?v=9yhkoKHaW9w',
                'lien' => 'https://callofduty.com',
                'nb_download' => 315,
                'date_sortie' => 20241025,
                'genres_id' => 1
            ],
            [
                'id' => 5,
                'nom' => 'Grand Theft Auto V',
                'image' => 'https://www.godisageek.com/wp-content/uploads/GTA-V-Background1.jpg',
                'video' => 'https://www.youtube.com/watch?v=N-xHcvug3WI',
                'lien' => 'https://gtav.com',
                'nb_download' => 673,
                'date_sortie' => 20130917,
                'genres_id' => 2
            ]

        ]);
    }
}
