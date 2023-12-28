<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clientes')->insert([
            'nombre' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'funcion' => Str::random(8),
            'cargo' => Str::random(6),
            'estatus' => true,
            'fecha_inicio' => now(),
        ]);
    }
}
