<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            ProductSeeder::class,
            ClientSeeder::class,
            ContactSeeder::class,
            ProviderSeeder::class,
            PaymentSeeder::class,
            ShoppingSeeder::class,
            ShoppingProductSeeder::class,
        ]);
    }
}
