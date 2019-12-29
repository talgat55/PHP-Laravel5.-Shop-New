<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(ProductsTableSeeder::class);

        // Re enable all mass assignment restrictions
        Model::reguard();

    }
}
