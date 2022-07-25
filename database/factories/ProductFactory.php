<?php

namespace Database\Factories;


use Illuminate\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str,Illuminate\Support\Arr;


class ProductFactory extends Factory
{



    protected $model = Product::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */


    public function definition()
    {

        $productSuffixes = ['Sweater', 'Pants', 'Shirt', 'Glasses', 'Hat', 'Socks'];
        $name = $this->faker->company . ' ' . Arr::random($productSuffixes);

        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'description' =>$this->faker->realText(320),
            'price' => $this->faker->numberBetween(10000, 1000000),
        ];
    }
}
