<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 50) as $index) {
            DB::table('clientes')->insert([
                'nombre' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'funcion' => $faker->jobTitle,
                'cargo' => $faker->company,
                'estatus' => $faker->boolean,
                'fecha_inicio' => $faker->date,
            ]);
        }
    }
}
