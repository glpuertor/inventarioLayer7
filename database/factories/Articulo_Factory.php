<?php

namespace Database\Factories;
use App\Models\Articulo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */

class ArticuloFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $models = model::class;
    protected $articulo = Articulo::class;
    public function definition(): array
    {

        return [
            'nombre' => $this->faker->sentence(),
            'cantidad' => 1,
            'description' => $this->faker->randomElement(['articulos de super', 'articulo tipo 4', 'juguete']),
            'user_id' => 1,
            'precio' => $this->faker->randomElement([200, 300, 500]),
        ];
    }
}
