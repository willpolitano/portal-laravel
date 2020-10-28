<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShoppingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shoppings')->insert([
            [
                "client_id" => 1,
                "payment_id" => 1,
                "value" => 20.50,
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s")
            ],
            [
                "client_id" => 1,
                "payment_id" => 2,
                "value" => 50.00,
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s")
            ],
            [
                "client_id" => 3,
                "payment_id" => 3,
                "value" => 3.99,
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s")
            ],
            [
                "client_id" => 4,
                "payment_id" => 4,
                "value" => 10.99,
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s")
            ],
            [
                "client_id" => 6,
                "payment_id" => 2,
                "value" => 36.2,
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s")
            ]
        ]);
    }
}
