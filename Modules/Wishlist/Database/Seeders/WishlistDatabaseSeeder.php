<?php

namespace Modules\Wishlist\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Wishlist\Entities\Wishlist;

class WishlistDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        Wishlist::factory(5)->create();

        // $this->call("OthersTableSeeder");
    }
}
