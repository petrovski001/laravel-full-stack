<?php

use Illuminate\Database\Seeder;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $people = array(
            ['ime'=>'Zharko','prezime'=>'Zharkovski','godini'=>31],
            ['ime'=>'Kristofer','prezime'=>'Kolumbo','godini'=>20],
            ['ime'=>'Mia','prezime'=>'Petrovska','godini'=>24],
            ['ime'=>'Marija','prezime'=>'Sklodovska-Kiri','godini'=>42],
            ['ime'=>'Petre','prezime'=>'Petrevski','godini'=>29]
        );
        DB::table('people')->insert($people);
    }
}
