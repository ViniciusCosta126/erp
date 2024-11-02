<?php

namespace Database\Factories;

use App\Models\Categoria;
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
            'categoria_id' => Categoria::factory(),
            'nome' => $this->faker->word(),
            'descricao' => $this->faker->sentence(),
            'preco' => $this->faker->randomFloat(2, 10, 1000),
            'preco_custo' => $this->faker->randomFloat(2, 5, 500),
            'status' => $this->faker->boolean(),
            'quantidade_estoque' => $this->faker->numberBetween(1, 100),
            'quantidade_minima_estoque' => $this->faker->numberBetween(1, 10),
        ];
    }
}
