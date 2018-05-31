<?php

use App\Category;
use App\Country;
use App\Restaurant;
use Faker\Generator as Faker;

$factory->define(Restaurant::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName . ' restaurant',
        'phone' => $faker->phoneNumber,
        'address1' => $faker->address,
        'address2' => $faker->address,
        'suburb' => $faker->city,
        'seats' => $faker->randomNumber(2),
        'state' => $faker->regexify('[A-Z]{3}'),
        'country_id' => Country::first()->id,
        'category_id' => Category::first()->id,
    ];
});
