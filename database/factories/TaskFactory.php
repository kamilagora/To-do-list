<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\Task;
use Faker\Generator as Faker;

$factory->define(Task::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(
            $faker->numberBetween(3, 8)
        ),
        'content' => $faker->sentence(
            $faker->numberBetween(8, 16)
        ),
        'status' => $faker->randomElement(
            Task::getAvailableStatuses()
        )
    ];
});
