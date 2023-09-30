<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class SymptomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('symptoms')->insert([
                'status' => "頭痛",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    }
}
