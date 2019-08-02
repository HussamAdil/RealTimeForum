<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    $word = $faker->Word ;
    return [
       'name' => $word ,
       'slug' => str_slug($word)
    ];
});
