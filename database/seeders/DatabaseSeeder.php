<?php

namespace Database\Seeders;

use App\Models\Restdata;
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
        $this->call(PeopleTableSeeder::class);
        $this->call(RestdatatableSeeder::class);
    }
}
