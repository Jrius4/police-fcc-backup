<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class PlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('players')->insert([
            [
            'first_name' => Str::random(10),
            'last_name' => Str::random(10),
            'nationality' => Str::random(10),
            'dob' => Str::random(10),
            'age' => Str::random(10),
            'shirt_no' => Str::random(10),
            'position' => Str::random(10),
            'strongest_foot' => Str::random(10),
            'former_club' => Str::random(10),
            'bio' => Str::random(10),
            ],
            [
                'first_name' => Str::random(10),
                'last_name' => Str::random(10),
                'nationality' => Str::random(10),
                'dob' => Str::random(10),
                'age' => Str::random(10),
                'shirt_no' => Str::random(10),
                'position' => Str::random(10),
                'strongest_foot' => Str::random(10),
                'former_club' => Str::random(10),
                'bio' => Str::random(10),
            ],
            [
                'first_name' => Str::random(10),
                'last_name' => Str::random(10),
                'nationality' => Str::random(10),
                'dob' => Str::random(10),
                'age' => Str::random(10),
                'shirt_no' => Str::random(10),
                'position' => Str::random(10),
                'strongest_foot' => Str::random(10),
                'former_club' => Str::random(10),
                'bio' => Str::random(10),
            ],
            [
                'first_name' => Str::random(10),
                'last_name' => Str::random(10),
                'nationality' => Str::random(10),
                'dob' => Str::random(10),
                'age' => Str::random(10),
                'shirt_no' => Str::random(10),
                'position' => Str::random(10),
                'strongest_foot' => Str::random(10),
                'former_club' => Str::random(10),
                'bio' => Str::random(10),
            ]
        ]);
    }
}
