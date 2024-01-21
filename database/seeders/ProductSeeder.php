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

        Product::create([

            'name' => 'machine2',
            'description' => 'beschrijving machine 2',
            'price' => '2.50',
            'stock' => 18,
            'product_category_id' => 2

        ]);

        Product::create([

            'name' => 'machine3',
            'description' => 'beschrijving machine 3',
            'price' => '15',
            'stock' => 10,
            'product_category_id' => 2

        ]);

        Product::create([

            'name' => 'machine4',
            'description' => 'beschrijving machine 4',
            'price' => '12',
            'stock' => 11,
            'product_category_id' => 2

        ]);
    }
}
