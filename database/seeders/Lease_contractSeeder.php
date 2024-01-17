<?php

namespace Database\Seeders;

use App\Models\LeaseContract;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Lease_contractSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        LeaseContract::create([

            'name' => 'order1',
            'description' => 'in dit contract gaat het over het leasen van koffiemachine 1',
            'type' => 'maandelijks',
            'is_signed' => false,
            'customer_id' => 5,
        ]);
    }
}
