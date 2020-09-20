<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'referencia' => '1234',
            'producto' => 'Mouse',
            'cantidad' => '20',
            'precio_unitario' => '24000',
            'precio_total' => '540000'
        ];
    }
}
