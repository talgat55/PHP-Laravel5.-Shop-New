<?php

use Faker\Generator as Faker;

factory(App\Products::class, 12)->create()->each(function (Faker $faker) {
    return [
        'name' => $faker->name,
        'slug' => $faker->unique()->slug,
        'quantity' => $faker->randomDigit,
        'category_id' => '1',
        'price' => $faker->randomNumber(2),
        'description' =>  $faker->text( 200) ,
    ];
});