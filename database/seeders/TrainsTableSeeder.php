<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 100; $i++) {
            $train = new Train();
            $train->azienda = $faker->company();
            $train->stazione_di_partenza = $faker->city();
            $train->stazione_di_arrivo = $faker->city();
            $train->data_di_partenza = $faker->dateTimeBetween('-1 month', '+1 month');
            $train->orario_di_partenza = $faker->time();
            $train->orario_di_arrivo = $faker->time();
            $train->codice_treno = $faker->bothify('??-#####');
            $train->numero_carrozze = $faker->numberBetween(1, 100);
            $train->costo = $faker->randomFloat(2, 10, 99);
            $train->in_orario = $faker->boolean();
            $train->cancellato = $faker->boolean();
            $train->save();
        }
    }
}
