<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Company::create([
            'name' => 'Tech_ict',
            'street' => 'venomstreet',
            'house_number' => 48,
            'zipcode' => '6536EY',
            'city' => 'new-york',
            'phonenumber' => '061376473',
            'contact_id' => '123',
            'bkr_checked_at' => now(),
        ]);

        Company::create([
            'name' => 'school123',
            'street' => 'lackbockstreet',
            'house_number' => 22,
            'zipcode' => '65444YY',
            'city' => 'new-jersey',
            'phonenumber' => '061452473',
            'contact_id' => '123',
            'bkr_checked_at' => now(),
        ]);
    }
}
