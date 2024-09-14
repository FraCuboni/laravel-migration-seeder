<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Package;

class TravelPackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        for ($i = 0; $i < 20; $i++) {
            $package = new Package();

            $package->azienda = $faker->company();
            $package->stazione_partenza = $faker->city() . ', ' . $faker->streetName();
            $package->stazione_arrivo = $faker->city() . ', ' . $faker->streetName();
            $package->data_partenza = $faker->dateTime();
            $package->data_arrivo = $faker->dateTime();
            $package->prezzo = $faker->randomFloat(2, 10, 1000);
            $package->descrizione = $faker->realTextBetween($minNbChars = 160, $maxNbChars = 200, $indexSize = 2);


            $package->save();
        }

        // $table->string('azienda');
        //     $table->string('stazione_partenza');
        //     $table->string('stazione_arrivo');
        //     $table->dateTime('data_partenza', $precision = 0);
        //     $table->dateTime('data_arrivo', $precision = 0);
        //     $table->float('prezzo', 8, 2);
        //     $table->string('descrizione');


        // $train->azienda = $faker->randomElement(['italo', 'trenitalia', 'trenord']);
        // $train->stazione_partenza = $faker->randomElement(['Roma termini', 'Torino Porta nuova', 'Torino Porta Susa', 'Milano', 'Bari', 'Aosta']);
        // $train->stazione_arrivo = $faker->randomElement(['Roma termini', 'Torino Porta nuova', 'Torino Porta Susa', 'Milano', 'Bari', 'Aosta']);
        // $train->orario_partenza = $faker->time('H:i');
        // $train->orario_arrivo = $faker->time('H:i');
        // $train->codice_treno = $faker->unique()->numberBetween(10000, 999999);
        // $train->numero_carrozze = $faker->numberBetween(3, 10);
        // $train->in_orario = $faker->boolean();
        // $train->cancellato = $faker->boolean();
    }
}
