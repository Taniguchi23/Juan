<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('technology_products')->insert([
            [
                'name' => 'Laptop',
                'description' => 'Powerful laptop for all your needs',
                'price' => 999.99,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Smartphone',
                'description' => 'The latest smartphone with amazing features',
                'price' => 799.99,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Tablet',
                'description' => 'Lightweight tablet for on-the-go entertainment',
                'price' => 299.99,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Smartwatch',
                'description' => 'Stay connected with this stylish smartwatch',
                'price' => 199.99,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
