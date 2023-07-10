<?php

namespace Modules\Comment\Database\factories;

use App\Enums\EnumHelpers;
use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Comment\Entities\Comment;
use Modules\User\Entities\User;

class CommentPointFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \Modules\Comment\Entities\CommentPoint::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'type' => fake()->randomElement(EnumHelpers::$CommentUserPointEnum),
            'user_id' => User::factory(),
            'comment_id' => Comment::factory(),
        ];
    }
}

