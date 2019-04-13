<?php

use App\Models\Task;
use Faker\Generator as Faker;

$factory->define(Task::class, function (Faker $faker) {
return [
'key' => Str::slug($faker->sentence),
'value' => $faker->sentence,
];
});
