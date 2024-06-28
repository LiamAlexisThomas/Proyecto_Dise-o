<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\cliente;
use App\Models\diseñador;
use App\Models\proyecto;
use App\Models\material;
use App\Models\contrato;
use App\Models\pago;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\cliente::factory(10)->create();
        \App\Models\diseñador::factory(10)->create();
        \App\Models\material::factory(10)->create();
        \App\Models\proyecto::factory(10)->create();
        \App\Models\contrato::factory(10)->create();
        \App\Models\pago::factory(10)->create();


        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
