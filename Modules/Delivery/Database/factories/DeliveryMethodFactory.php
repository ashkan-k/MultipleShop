<?php

namespace Modules\Delivery\Database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DeliveryMethodFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \Modules\Delivery\Entities\DeliveryMethod::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => fake()->title(),
            'amount' => fake()->randomNumber(),
        ];
    }
}

