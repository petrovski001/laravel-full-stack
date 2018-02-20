<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = array(
            ['id_kat'=>1,'ime'=>'Bitolski Jogurt','opis'=>'Jogurt od Bitola','kolicina'=>50,'slika'=>'bitolski-jogurt.png','cena'=>50,'rok'=>'2018-02-10','slug'=>'bitolskiJogurt'],
            ['id_kat'=>1,'ime'=>'Kaskaval','opis'=>'Bitolski Kaskaval','kolicina'=>50,'slika'=>'kaskaval.png','cena'=>50,'rok'=>'2018-05-10','slug'=>'kaskaval'],
            ['id_kat'=>1,'ime'=>'Ajran','opis'=>'Turski Specijalitet','kolicina'=>50,'slika'=>'ajran.jpg','cena'=>50,'rok'=>'2018-02-10','slug'=>'ajran'],
            ['id_kat'=>1,'ime'=>'Bitolski Mleko','opis'=>'Mleko od Bitola','kolicina'=>100,'slika'=>'bitolsko-mleko.jpg','cena'=>45,'rok'=>'2018-02-10','slug'=>'bitolskoMleko'],
            ['id_kat'=>2,'ime'=>'Kulen Lijanovic','opis'=>'Najvkusen kulen','kolicina'=>30,'slika'=>'kulen-lijanovic.png','cena'=>135,'rok'=>'2018-02-10','slug'=>'kulenLijanovic'],
            ['id_kat'=>2,'ime'=>'Kulen','opis'=>'Najvkusen kulen','kolicina'=>30,'slika'=>'kulen.jpg','cena'=>125,'rok'=>'2018-08-10','slug'=>'kulen'],
            ['id_kat'=>2,'ime'=>'Sunka','opis'=>'Najvkusna sunka','kolicina'=>30,'slika'=>'sunka.jpg','cena'=>150,'rok'=>'2018-08-10','slug'=>'sunka'],
            ['id_kat'=>2,'ime'=>'Virsli','opis'=>'Najvkusni virsli','kolicina'=>30,'slika'=>'virsli.jpg','cena'=>700,'rok'=>'2018-08-10','slug'=>'virsli'],
            ['id_kat'=>3,'ime'=>'Zelka','opis'=>'Ova e zelencuk','kolicina'=>12,'slika'=>'zelka.jpg','cena'=>12,'rok'=>'2018-08-10','slug'=>'kupus'],
            ['id_kat'=>3,'ime'=>'Krastavica','opis'=>'Zelencuk za salata','kolicina'=>12,'slika'=>'krastavica.jpg','cena'=>30,'rok'=>'2018-08-10','slug'=>'krastavica'],
            ['id_kat'=>3,'ime'=>'Domati','opis'=>'Zelencuk za salata','kolicina'=>35,'slika'=>'domati.png','cena'=>35,'rok'=>'2018-08-10','slug'=>'domati'],
            ['id_kat'=>3,'ime'=>'Brokula','opis'=>'Najzdraviot zelencuk','kolicina'=>12,'slika'=>'brokula.png','cena'=>12,'rok'=>'2018-08-10','slug'=>'brokula'],
            ['id_kat'=>4,'ime'=>'Portokal','opis'=>'Mediteransko ovosje','kolicina'=>46,'slika'=>'portokal.png','cena'=>33,'rok'=>'2018-03-10','slug'=>'portokal'],
            ['id_kat'=>4,'ime'=>'Jabolko','opis'=>'One apple a day, keeps the doctor away','kolicina'=>32,'slika'=>'jabolko.png','cena'=>35,'rok'=>'2018-03-10','slug'=>'jabolko'],
            ['id_kat'=>4,'ime'=>'Banana','opis'=>'Mediteransko ovosje','kolicina'=>45,'slika'=>'banana.png','cena'=>53,'rok'=>'2018-03-10','slug'=>'banana'],
            ['id_kat'=>4,'ime'=>'Lubenica','opis'=>'Letno i prevkusno ovosje','kolicina'=>46,'slika'=>'lubenica.jpg','cena'=>14,'rok'=>'2018-03-10','slug'=>'lubenica'],
            ['id_kat'=>5,'ime'=>'Sprite','opis'=>'Niskokaloricen pijalok','kolicina'=>73,'slika'=>'sprite.jpg','cena'=>45,'rok'=>'2018-03-10','slug'=>'sprite'],
            ['id_kat'=>5,'ime'=>'Pepsi','opis'=>'Odlicen','kolicina'=>43,'slika'=>'pepsi.jpg','cena'=>55,'rok'=>'2018-03-10','slug'=>'pepsi'],
            ['id_kat'=>5,'ime'=>'Fanta','opis'=>'Osvezitelen pijalok','kolicina'=>73,'slika'=>'fanta.jpg','cena'=>65,'rok'=>'2018-03-10','slug'=>'fanta'],
            ['id_kat'=>5,'ime'=>'Koka Kola','opis'=>'Najpopularen pijalok','kolicina'=>85,'slika'=>'kokaKola.jpg','cena'=>75,'rok'=>'2018-03-10','slug'=>'kokaKola'],


        );
        DB::table('products')->insert($products);
    }
}
