<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'title' => 'Macbook Pro 13 2017',
            'description' => 'Seri komputer jinjing Macintosh yang diproduksi oleh Apple',
            'price' => 18500000,
            'stock' => 5
        ]);

        Product::create([
            'title' => 'Asus Rog Slim',
            'description' => 'Sebuah brand perangkat keras notebook khusus gaming dari ASUS',
            'price' => 10500000,
            'stock' => 15
        ]);

        Product::create([
            'title' => 'Dell Alienware',
            'description' => 'Sebuah brand perangkat keras notebook khusus gaming dari DELL',
            'price' => 21500000,
            'stock' => 3
        ]);

        Product::create([
            'title' => 'Lenovo',
            'description' => 'Sebuah brand perangkat keras notebook khusus gaming dari LENOVO',
            'price' => 7500000,
            'stock' => 12
        ]);

        Product::create([
            'title' => 'Acer',
            'description' => 'Sebuah brand perangkat keras notebook khusus gaming dari ACER',
            'price' => 5000000,
            'stock' => 24
        ]);

    }
}
