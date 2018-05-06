<?php

use Illuminate\Database\Seeder;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
            'title' => 'Monty Python and  the Holy Grail'),
            'release_year' => 1975,
        ]);
        DB::table('movies')->insert([
            'title' => 'Rounders'),
            'release_year' => 1998,
        ]);
        DB::table('movies')->insert([
            'title' => 'Swingers'),
            'release_year' => 1996,
        ]);
        DB::table('movies')->insert([
            'title' => 'Teenage Mutant Ninja Turtles'),
            'release_year' => 1990,
        ]);       
        DB::table('movies')->insert([
            'title' => 'LA Confidential'),
            'release_year' => 1997,
        ]);
    }
}
