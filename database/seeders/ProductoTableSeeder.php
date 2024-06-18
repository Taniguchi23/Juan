<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        {
            $productos = [
                [
                    'name' => 'TP-Link',
                    'description' => 'Router TP-Link Inalámbrico WR840N WiFi',
                    'image' => "assets/images/products/99.PNG",
                    'price' => 99.00,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'TP-Link',
                    'description' => 'TP-Link Router Inalambrico TL-WR840N Wi-Fi 2,4 GHz acces point 300Mbps',
                    'image' => "assets/images/products/99.PNG",
                    'price' => 75.00,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'TP-Link',
                    'description' => 'Router Wi-Fi TP-Link Archer C50 Doble Banda AC1200 5GHz 24Ghz',
                    'image' => "assets/images/products/99.PNG",
                    'price' => 109.90,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'TP-Link',
                    'description' => 'Router Inalámbrico N TP-LINK TL-WR840N',
                    'image' => "assets/images/products/99.PNG",
                    'price' => 69.00,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'TP-Link',
                    'description' => 'Router TP-Link 300MBPS TL-WR840N 4 en 1',
                    'image' => "assets/images/products/99.PNG",
                    'price' => 139.00,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'TP-Link',
                    'description' => 'Archer TP-Link C50 AC1200 Router',
                    'image' => "assets/images/products/99.PNG",
                    'price' => 189.00,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ];
            Producto::insert($productos);
        }
    }
}
