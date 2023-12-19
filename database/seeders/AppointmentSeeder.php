<?php

namespace Database\Seeders;

use App\Models\Appointment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AppointmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Appointment::create([
            'title' => 'hebjeetenvoormij',
            'start_date' => '2024-01-09',
            'end_date' => '2024-05-09',

        ]);
    }
}
