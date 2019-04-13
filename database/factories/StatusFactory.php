<?php

use App\Models\Status;
use Faker\Generator as Faker;

$factory->define(Status::class, function (Faker $faker) {
return [
'key' => Str::slug($faker->sentence),
'value' => $faker->sentence,
];
});
