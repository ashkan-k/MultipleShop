<?php

namespace Modules\Slider\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Slider\Entities\Slider;

class SliderDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        Slider::factory()->create();

        // $this->call("OthersTableSeeder");
    }
}
