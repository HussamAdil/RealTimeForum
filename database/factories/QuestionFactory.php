<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model\Question;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\Model\Category;
use App\User;

$factory->define(Question::class, function (Faker $faker) {
    $title = $faker->sentence;
    return [
        'title' => $title,
        'user_id' =>     function(){ return User::all()->random(); },
        'slug'  =>  str_slug($title) ,
        'body'  =>  $faker->text ,
        'category' =>  function (){ return Category::all()->random();},

    ];
});
