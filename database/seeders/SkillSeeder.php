<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->insert([
            [
                'niveau' => 90
            ],
            [
                'niveau' => 80            
            ],
            [
                'niveau' => 75
            ],
            [
                'niveau' => 80
            ],
            [
                'niveau' => 90
            ],
            [
                'niveau' => 80
            ],
        ]);
    }
}
