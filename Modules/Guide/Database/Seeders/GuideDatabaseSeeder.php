<?php

namespace Modules\Guide\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Guide\Entities\Guide;

class GuideDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        Guide::factory(5)->create();

        // $this->call("OthersTableSeeder");
    }
}
