<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\Speaker;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory(10)->create();

        $events = Event::factory(10)->create();

        $events->each(function ($event) {
            $event->speakers()->saveMany(Speaker::factory(3)->make());
        });
    }
}
