<?php

namespace Database\Seeders;

use App\Models\MaintenanceErrorPlanned;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MaintenanceErrorPlannedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MaintenanceErrorPlanned::create([
            'title' => 'hebjeetenvoormij',
            'start_date' => '2024-01-09',
            'end_date' => '2024-05-09',

        ]);
    }
}
