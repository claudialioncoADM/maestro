<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Http\Controllers\Contato;
use App\Models\Contato as ModelsContato;
use Illuminate\Database\Seeder;

use Database\Seeders\Contato as ContatoSeed;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            //ContatoSeed::class
            ProdutoSeed::class
        ]);
    }
}
