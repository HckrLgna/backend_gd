<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContratoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 5) as $index) {
            DB::table('contrato')->insert([
                'nombre' => $faker->name,
                'descripcion' => $faker->realText(20),
                'fecha_creacion' => $faker->date,
                'version' => $faker->numberBetween(1,10),
                'ubicacion_almacenamiento' => $faker->filePath(),
                'user_id' => 1
            ]);
        }
    }
}
