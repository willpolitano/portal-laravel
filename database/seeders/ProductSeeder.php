<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Angel',
                'description' => 'PowerShares Global Water Portfolio',
                'price' => '4.54',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                "name" => "Irma",
                "description" => "Altimmune, Inc.",
                "price" => "8.76",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                "name" => "Manny",
                "description" => "CNB Financial Corporation",
                "price" => "6.45",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                "name" => "Krishna",
                "description" => "Interactive Brokers Group, Inc.",
                "price" => "2.57",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                "name" => "Otho",
                "description" => "USA Compression Partners, LP",
                "price" => "4.19",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                "name" => "Correy",
                "description" => "iShares MSCI EM ESG Optimized ETF",
                "price" => "1.94",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                "name" => "Burty",
                "description" => "Brookfield Renewable Partners L.P.",
                "price" => "0.55",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                "name" => "Alexandrina",
                "description" => "Graco Inc.",
                "price" => "4.72",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                "name" => "Delia",
                "description" => "BeyondSpring, Inc.",
                "price" => "9.26",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                "name" => "Hayward",
                "description" => "AK Steel Holding Corporation",
                "price" => "8.32",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                "name" => "Stephan",
                "description" => "Bank of America Corporation",
                "price" => "9.30",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                "name" => "Michaeline",
                "description" => "Viavi Solutions Inc.",
                "price" => "5.59",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                "name" => "Archer",
                "description" => "Rambus, Inc.",
                "price" => "0.67",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                "name" => "Letizia",
                "description" => "Newfield Exploration Company",
                "price" => "2.09",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                "name" => "Alameda",
                "description" => "Affiliated Managers Group, Inc.",
                "price" => "7.93",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                "name" => "Cobb",
                "description" => "American Tower Corporation (REIT)",
                "price" => "0.89",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                "name" => "Florella",
                "description" => "Lsb Industries Inc.",
                "price" => "9.59",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                "name" => "Ulberto",
                "description" => "Northern Trust Corporation",
                "price" => "6.95",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                "name" => "Mollee",
                "description" => "General American Investors, Inc.",
                "price" => "0.50",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                "name" => "Cale",
                "description" => "TransUnion",
                "price" => "8.97",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                "name" => "Martha",
                "description" => "Healthcare Services Group, Inc.",
                "price" => "5.94",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                "name" => "Mark",
                "description" => "Comp En De Mn Cemig ADS",
                "price" => "6.00",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                "name" => "Norine",
                "description" => "Prosperity Bancshares, Inc.",
                "price" => "8.67",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                "name" => "Clary",
                "description" => "Benchmark Electronics, Inc.",
                "price" => "6.75",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                "name" => "Dasi",
                "description" => "Ocwen Financial Corporation",
                "price" => "1.80",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                "name" => "Latrena",
                "description" => "Blackrock Enhanced Equity Dividend Trust",
                "price" => "5.30",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                "name" => "Tomasina",
                "description" => "Aerohive Networks, Inc.",
                "price" => "2.02",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                "name" => "Randie",
                "description" => "LendingTree, Inc.",
                "price" => "5.85",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                "name" => "Emmalynn",
                "description" => "GWG Holdings, Inc",
                "price" => "2.68",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                "name" => "Adham",
                "description" => "E.I. du Pont de Nemours and Company",
                "price" => "6.93",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                "name" => "Tally",
                "description" => "Cherokee Inc.",
                "price" => "9.12",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ]);
    }
}
