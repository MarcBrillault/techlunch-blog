<?php

use App\Post;
use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    $timestamp = time() - rand(0, 5000) * 3600 * 24;
    $date      = Carbon::createFromTimestamp($timestamp);

    return [
        'title'      => $faker->realText(50),
        'image'      => $faker->image(resource_path('assets/images/TMP')),
        'lead'       => $faker->sentence(),
        'text'       => implode(PHP_EOL . PHP_EOL, $faker->sentences(rand(10, 50))),
        'created_at' => $date,
    ];
});
