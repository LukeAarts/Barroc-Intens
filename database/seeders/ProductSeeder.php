<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([

            'name' => 'machine1',
            'description' => 'beschrijving machine 1',
            'price' => '5',
            'stock' => 8,
            'product_category_id' => 2

        ]);
    }
}
