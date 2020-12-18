<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            [
                'tag' => 'Html/CSS',
                'niveau' => 90
            ],
            [
                'tag' => 'JavaScript',
                'niveau' => 80   

            ],
            [
                'tag' => 'Php/MySQL',
                'niveau' => 75

            ],
            [
                'tag' => 'Laravel',
                'niveau' => 80

            ],
            [
                'tag' => 'Bootstrap',
                'niveau' => 90

            ],
            [
                'tag' => 'Wordpress',
                'niveau' => 80

            ],
        ]);
    }
}
