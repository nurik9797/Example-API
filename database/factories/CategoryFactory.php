<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Category;


class CategoryFactory extends Factory
{

    
    protected $model = Category::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = trim(explode(' ', $this->faker->jobTitle())[0]);
        return [
            'name' => $name,
            'slug' => Str::slug($name),
        ];
    }
}
