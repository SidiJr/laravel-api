<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Carro;

class CarroSeeder extends Seeder
{
    public function run(): void
    {
        Carro::create([
            'modelo' => 'Civic',
            'marca' => 'Honda',
            'ano' => 2020
        ]);
        Carro::create([
            'modelo' => 'Corolla',
            'marca' => 'Toyota',
            'ano' => 2019
        ]);
    }
}
