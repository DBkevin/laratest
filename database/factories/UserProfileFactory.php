<?php

use Faker\Generator as Faker;

$factory->define(App\UserProfile::class, function (Faker $faker) {
    return [
        //
        'bio'=>$faker->text(),
        'city'=>$faker->city(),
        'hobby'=>$faker->word(),
    ];
});
