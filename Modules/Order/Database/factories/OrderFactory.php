<?php

namespace Modules\Order\Database\factories;

use App\Enums\EnumHelpers;
use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Payment\Entities\Payment;
use Modules\Product\Entities\Color;
use Modules\Product\Entities\Product;
use Modules\Product\Entities\Size;
use Modules\User\Entities\User;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \Modules\Order\Entities\Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'product_id' => Product::factory(),
            'payment_id' => Payment::factory(),
            'size_id' => Size::factory(),
            'color_id' => Color::factory(),
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'phone' => fake()->phoneNumber(),
            'address' => fake()->text(),
            'postal_code' => fake()->postcode(),
            'count' => fake()->randomNumber(),
            'status' => fake()->randomElement(EnumHelpers::$PaymentStatusEnum),
            'payment_type' => fake()->randomElement(EnumHelpers::$PaymentTypeEnum),
        ];
    }
}

