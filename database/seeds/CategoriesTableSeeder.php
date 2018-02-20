<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = array(
            ['ime'=>'Mlecni Proizvodi', 'slug'=>'mlecniProizvodi'],
            ['ime'=>'Suvomesnati', 'slug'=>'suvomesnati'],
            ['ime'=>'Zelencuk', 'slug'=>'zelencuk'],
            ['ime'=>'Ovosje', 'slug'=>'ovosje'],
            ['ime'=>'Gazirani Pijaloci', 'slug'=>'gazirani'],
            ['ime'=>'Drugo', 'slug'=>'drugo']
        );
        DB::table('categories')->insert($categories);
    }
}
