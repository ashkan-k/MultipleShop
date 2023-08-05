<?php

namespace Modules\Schema\Database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SchemaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \Modules\Schema\Entities\Schema::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
        ];
    }
}

