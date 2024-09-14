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

            $train->azienda = $faker->company();
            $train->stazione_partenza = $faker->city() . ', ' . $faker->streetName();
            $train->stazione_arrivo = $faker->city() . ', ' . $faker->streetName();
            $train->orario_partenza = $faker->time('H:i');
            $train->orario_arrivo = $faker->time('H:i');
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
