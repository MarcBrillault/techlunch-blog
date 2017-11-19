<?php

use App\Post;
use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    $timestamp = time() - rand(0, 1000) * 3600 * 24;
    $date      = Carbon::createFromTimestamp($timestamp);

    return [
        'title'      => $faker->sentence(rand(2, 4)),
        'image'      => $faker->image(),
        'text'       => $faker->sentences(rand(10, 50), true),
        'created_at' => $date,
    ];
});
