<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produto>
 */
class ProdutoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titulo' => fake()->word(),
            'descricao' => fake()->sentence(),
            'preco' => fake()->randomFloat(),
            'estoque' => fake()->numberBetween(2,0,1000),

        ];
        // return [
        //     'titulo' => 'garrafa',
        //     'descricao' => 'garrafa termica',
        //     'preco' => 60,
        //     'estoque' => 55,

        // ];
    }
}
