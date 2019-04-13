<?php

use App\Models\Activity;
use Illuminate\Database\Seeder;

class ActivitysTableSeeder extends Seeder
{
    public function run()
    {
        factory(Activity::class,50)->create();
}
}
