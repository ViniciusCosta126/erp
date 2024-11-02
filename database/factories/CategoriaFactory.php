<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Categoria>
 */
class CategoriaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome_categoria' => $this->faker->words(3, true),
            'status' => $this->faker->boolean(),
            'descricao' => $this->faker->sentence(),
            'ordem' => $this->faker->numberBetween(1, 100),
        ];
    }
}
