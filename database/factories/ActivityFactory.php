<?php

use App\Models\Activity;
use Faker\Generator as Faker;

$factory->define(Activity::class, function (Faker $faker) {
return [
'key' => Str::slug($faker->sentence),
'value' => $faker->sentence,
];
});
