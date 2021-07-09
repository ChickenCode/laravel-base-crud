<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comic;
use Faker\Generator as Faker;

$factory->define(Comic::class, function (Faker $faker) {
    return [
        

        "title" => $faker->name(),
        "description"=>$faker->realText(100),
        "thumb"=> $faker->imageUrl(640, 480, 'sports', true),
        "price"=>$faker->numberBetween(4, 50),
        "series"=>$faker->sentence($nbWords = 3, $variableNbWords = true),
        "sale_date"=>$faker->date($format = 'Y-m-d', $max = 'now'),
        "type"=>$faker->word()
    ];
});
