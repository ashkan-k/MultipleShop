<?php

namespace Modules\PageBuilder\Database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PageBuilderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \Modules\PageBuilder\Entities\PageBuilder::class;

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
            'slug' => fake()->slug(),
            'en_slug' => fake()->slug(),
            'image' => fake()->imageUrl(),
            'is_special' => fake()->boolean(),
        ];
    }
}

