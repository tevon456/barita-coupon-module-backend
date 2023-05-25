<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\SecuritiesTableSeeder;
use Database\Seeders\StatusCodesTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(StatusCodesTableSeeder::class);
        $this->call(SecuritiesTableSeeder::class);
    }
}
