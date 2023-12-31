<?php

namespace Modules\Product\Database\factories;

use App\Enums\EnumHelpers;
use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Product\Entities\Feature;
use Modules\Product\Entities\Product;

class ProductFeatureFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \Modules\Product\Entities\ProductFeature::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'value' => fake()->shuffleString(),
            'place' => fake()->randomElement(EnumHelpers::$ProductFeatureTypeTypeEnum),
            'product_id' => Product::factory(),
            'feature_id' => Feature::factory(),
        ];
    }
}

