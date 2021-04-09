<?php

namespace Database\Seeders;

use App\Models\Restdata;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // $this->call(PeopleTableSeeder::class);
        $this->call(RestdataTableSeeder::class);
    }
}
