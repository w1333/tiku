<?php

use Faker\Generator as Faker;

$factory->define(\App\Courses::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(5),
        "pic"=>"i1.jpg",
    ];
});
