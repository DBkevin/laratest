<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        //
        'title'=>$faker->title,
        'content'=>$faker->text(),
        'view'=>random_int(0,100),
        'created_at'=>now(),
        'updated_at'=>now(),

    ];
});
