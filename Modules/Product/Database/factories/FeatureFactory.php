<?php

namespace Modules\Product\Database\factories;

use App\Enums\EnumHelpers;
use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Product\Entities\Category;
use Modules\Product\Entities\Product;

class FeatureFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \Modules\Product\Entities\Feature::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => fake()->title(),
            'is_filter' => fake()->boolean(),
            'filter_items' => 'lcd،led،lamp',
            'filter_type' => fake()->randomElement(EnumHelpers::$FeatureFilterTypeEnum),
            'category_id' => Category::factory(),
        ];
    }
}

