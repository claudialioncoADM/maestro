<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Contato as ContatoModel;

class Contato extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ContatoModel::factory()->count(3)->create();
    }
}
