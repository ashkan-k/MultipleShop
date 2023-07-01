<?php

namespace Modules\Poster\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Poster\Entities\Poster;

class PosterDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        Poster::factory(5)->create();

        // $this->call("OthersTableSeeder");
    }
}
