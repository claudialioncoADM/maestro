<?php

namespace Database\Seeders;

use App\Http\Controllers\Produto;
use App\Models\Produto as ModelsProduto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdutoSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ModelsProduto::factory()->count(5)->create();
    }
}
