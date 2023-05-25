<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class StatusCodesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $statuses = [
            "PENDING", "ACTIVE", "CANCELLED"
        ];

        foreach ($statuses as $status) {
            DB::table('status_codes')->insert([
                'status_name' => $status,
            ]);
        }
    }
}
