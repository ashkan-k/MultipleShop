<?php

namespace Modules\Product\Database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Product\Entities\Category;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \Modules\Product\Entities\Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => fake()->title(),
            'en_title' => fake()->title(),
            'icon_name' => fake()->title(),
            'slug' => fake()->slug(),
            'en_slug' => fake()->slug(),
            'image' => fake()->imageUrl(),
            'is_special' => fake()->boolean(),
            'is_best' => fake()->boolean(),
            'parent_id' => Category::factory(),
        ];
    }
}

