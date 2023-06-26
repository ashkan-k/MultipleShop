<?php

namespace Modules\Coupon\Database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\User\Entities\User;

class CouponFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \Modules\Coupon\Entities\Coupon::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'code' => fake()->text(),
            'percent' => fake()->randomNumber(),
            'uses_number' => fake()->randomNumber(),
            'expiration' => fake()->date(),
            'user_id' => User::factory(),
        ];
    }
}

