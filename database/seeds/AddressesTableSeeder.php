<?php

use Illuminate\Database\Seeder;

class AddressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $addresses = array(
            ['id_a'=>1,'id_l'=>1,'ulica'=>'Vodnjanska','broj'=>10,'grad'=>'Bitola'],
            ['id_a'=>2,'id_l'=>2,'ulica'=>'Nikola Rusinks','broj'=>20,'grad'=>'Skopje'],
            ['id_a'=>3,'id_l'=>3,'ulica'=>'Karposovo Vostanie','broj'=>30,'grad'=>'Kumanovo'],
            ['id_a'=>4,'id_l'=>4,'ulica'=>'Goce Delcev','broj'=>40,'grad'=>'Skopje'],
            ['id_a'=>5,'id_l'=>5,'ulica'=>'Jane Sandanski','broj'=>50,'grad'=>'Kicevo'],
        );
        DB::table('addresses')->insert($addresses);
    }
}
