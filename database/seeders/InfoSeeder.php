<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('infos')->insert([
            [
                'metier' => 'Developper,Freelance',
                'src' => 'moi.jpg',
                'date' => '15/02/1998',
                'phone' => '+32 489 09 97 17',
                'ville' => 'Bruxelles, BELGIQUE',
                'etat' => 'Valide',
            ],
        ]);
    }
}
