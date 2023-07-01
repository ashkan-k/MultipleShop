<?php

namespace Modules\Poster\Database\factories;

use App\Enums\EnumHelpers;
use Illuminate\Database\Eloquent\Factories\Factory;

class PosterFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \Modules\Poster\Entities\Poster::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'image' => fake()->imageUrl(),
            'link' => fake()->url(),
            'location' => fake()->randomElement(EnumHelpers::$PosterLocationEnum),
        ];
    }
}

