<?php

use App\Models\Status;
use Illuminate\Database\Seeder;

class StatussTableSeeder extends Seeder
{
    public function run()
    {
        factory(Status::class,10)->create();
}
}
