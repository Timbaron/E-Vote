<?php

namespace Database\Seeders;

use App\Models\Poll;
use App\Models\Result;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::factory()->count(5)->create();
        Poll::factory()->count(20)->create();
        Result::factory()->count(10)->create();
        // \App\Models\Poll::factory(20)->create();
    }
}
