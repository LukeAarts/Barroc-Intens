<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\LeaseContract;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            CompanySeeder::class,
            UserSeeder::class,
            ProductSeeder::class,
            ProductCategorySeeder::class,
            Lease_contractSeeder::class,
            MaintenanceSeeder::class,
            MaterialSeeder::class,
            InvoiceSeeder::class,
            ProductInvoiceSeeder::class,

        ]);
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
