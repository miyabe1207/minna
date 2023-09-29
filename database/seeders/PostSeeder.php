<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
                'disease_name' => '病名１',
                'therapeutic_method' => '治療法１',
                'hospital_name' => '病院名１',
                'doctor_name' => '医師名１',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    }
}
