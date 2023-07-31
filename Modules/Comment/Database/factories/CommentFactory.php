<?php

namespace Modules\Comment\Database\factories;

use App\Enums\EnumHelpers;
use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Article\Entities\Article;
use Modules\Blog\Entities\Blog;
use Modules\Comment\Entities\Comment;
use Modules\Place\Entities\Place;
use Modules\Product\Entities\Product;
use Modules\User\Entities\User;

class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \Modules\Comment\Entities\Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $commentable = $this->commentable();

        return [
            'title' => fake()->title(),
            'body' => fake()->text(),
            'negative_points' => fake()->realText(),
            'positive_points' => fake()->text(),
            'like_count' => fake()->randomNumber(),
            'user_id' => User::factory(),
            'commentable_id' => $commentable::factory(),
            'commentable_type' => $commentable,
            'status' => fake()->randomElement(EnumHelpers::$CommentStatusEnum),
            'suggest_score' => fake()->randomElement(EnumHelpers::$CommentSeggestToFriendEnum),
            'parent_id' => Comment::factory(),
        ];
    }

    public function commentable()
    {
        return $this->faker->randomElement([
            Product::class,
            Blog::class,
        ]);
    }
}

