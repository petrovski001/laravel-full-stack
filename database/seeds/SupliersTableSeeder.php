<?php

use Illuminate\Database\Seeder;

class SupliersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $suppliers = array(
            ['id_d'=>1,'id_l'=>2,'id_v'=>1,'plata'=>15000,'reon'=>'Skopje'],
            ['id_d'=>2,'id_l'=>3,'id_v'=>2,'plata'=>15000,'reon'=>'Ohrid']
        );
        DB::table('suppliers')->insert($suppliers);
    }
}
