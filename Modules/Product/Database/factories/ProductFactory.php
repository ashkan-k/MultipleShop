<?php

namespace Modules\Product\Database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Product\Entities\Brand;
use Modules\Product\Entities\Category;
use Modules\Product\Entities\Color;
use Modules\Product\Entities\Size;
use Modules\User\Entities\User;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \Modules\Product\Entities\Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => fake()->title(),
            'slug' => fake()->slug(),
            'is_active' => fake()->boolean(),
            'is_special' => fake()->boolean(),
            'description' => fake()->realText(),
            'en_description' => fake()->realText(),
            'view_count' => fake()->randomNumber(),
            'image' => fake()->imageUrl(),
            'price' => fake()->randomNumber(),
            'quantity' => fake()->randomNumber(),
            'discount_price' => fake()->randomNumber(),
            'discount_start_date' => fake()->date(),
            'discount_end_date' => fake()->date(),
            'user_id' => User::factory(),
            'category_id' => Category::factory(),
            'color_id' => Color::factory(),
            'size_id' => Size::factory(),
            'brand_id' => Brand::factory(),
        ];
    }
}

