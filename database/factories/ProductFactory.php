<?php

namespace Database\Factories;

use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $product_code = IdGenerator::generate([
            'table' => 'products',
            'field' => 'product_code',
            'length' => 4,
            'prefix' => 'PC'
        ]);

        return [
            'product_name' => fake()->word(),
            'category_id' => fake()->randomElement([1, 2, 3, 4, 5]),
            'unit_id' => fake()->randomElement([1, 2, 3, 4, 5]),
            'product_code' => $product_code,
            'stock' => fake()->randomNumber(2),
            'buying_price' => fake()->randomNumber(2),
            'selling_price' => fake()->randomNumber(2),
        ];
    }
}
