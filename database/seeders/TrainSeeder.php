<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 20; $i++) {
            $train = new Train();

            $train->azienda = $faker->randomElement(['italo', 'trenitalia', 'trenord']);
            $train->stazione_partenza = $faker->randomElement(['Roma termini', 'Torino Porta nuova', 'Torino Porta Susa', 'Milano', 'Bari', 'Aosta']);
            $train->stazione_arrivo = $faker->randomElement(['Roma termini', 'Torino Porta nuova', 'Torino Porta Susa', 'Milano', 'Bari', 'Aosta']);
            $train->orario_partenza = $faker->time('H:i:s');
            $train->orario_arrivo = $faker->time('H:i:s');
            $train->codice_treno = $faker->unique()->numberBetween(10000, 999999);
            $train->numero_carrozze = $faker->numberBetween(3, 10);
            $train->in_orario = $faker->boolean();
            $train->cancellato = $faker->boolean();

            $train->save();
        }

        //     $table->string('azienda');
        //     $table->string('stazione_partenza');
        //     $table->string('stazione_arrivo');
        //     $table->time('orario_partenza');
        //     $table->time('orario_arrivo');
        //     $table->string('codice_treno')->unique();
        //     $table->unsignedTinyInteger('numero_carrozze');
        //     $table->boolean('in_orario')->default(true);
        //     $table->boolean('cancellato')->default(false);
    }
}
