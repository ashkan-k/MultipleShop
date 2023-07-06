<?php

namespace Modules\Guide\Database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class GuideFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \Modules\Guide\Entities\Guide::class;

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
            'link' => fake()->url(),
            'image' => fake()->imageUrl(),
        ];
    }
}

