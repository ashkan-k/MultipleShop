<?php

namespace Modules\Blog\Database\factories;

use App\Enums\EnumHelpers;
use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Blog\Entities\BlogCategory;
use Modules\Product\Entities\Category;
use Modules\User\Entities\User;

class BlogFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \Modules\Blog\Entities\Blog::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'category_id' => BlogCategory::factory(),
            'title' => fake()->title(),
            'slug' => fake()->shuffleString(),
            'text' => fake()->text(),
            'image' => fake()->imageUrl(),
            'like_count' => fake()->randomNumber(),
            'view_count' => fake()->randomNumber(),
            'status' => fake()->randomElement(EnumHelpers::$BlogStatusEnum),
            'schema_type' => fake()->randomElement(EnumHelpers::$GoogleShcemaEnum),
        ];
    }
}

