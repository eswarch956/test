<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\HotelSeeder;
use Database\Seeders\RoomSeeder;
use Database\Seeders\ReservationSeeder;
use Database\Seeders\PhotoSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        $this->call(HotelSeeder::class);
        $this->call(RoomSeeder::class);
        $this->call(ReservationSeeder::class);
        $this->call(PhotoSeeder::class);
    }
}
