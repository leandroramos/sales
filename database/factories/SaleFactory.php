<?php

use App\Seller;
use App\Customer;
use Faker\Generator as Faker;

$factory->define(App\Sale::class, function (Faker $faker) {
    return [
        'price'     => $faker->randomNumber(6),
        
        'seller_id' => function () {
            return Seller::orderByRaw("RAND()")->take(1)->first()->id;
        }
    ];
});
