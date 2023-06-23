<?php

namespace Modules\Slider\Database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SliderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \Modules\Slider\Entities\Slider::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => fake()->title(),
            'image' => fake()->imageUrl(),
            'url' => fake()->url(),
            'priority' => fake()->randomNumber(2),
        ];
    }
}

