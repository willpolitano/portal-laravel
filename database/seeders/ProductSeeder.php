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
                'name' => 'Salt And Pepper Mix',
                'description' => 'Inspection of Stomach',
                'price' => '4.54',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                "name" => "Tea",
                "description" => "Via Natural",
                "price" => "8.76",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                "name" => "Chicken",
                "description" => "Artificial Opening",
                "price" => "6.45",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                "name" => "Bread Bowl Plain",
                "description" => "Restriction of Low Esophag",
                "price" => "2.57",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                "name" => "Quail",
                "description" => "Perc Endo Approach",
                "price" => "4.19",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                "name" => "Schnappes Peppermint",
                "description" => "Supplement L Temporal ",
                "price" => "1.94",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                "name" => "Melon",
                "description" => "Bursae and Ligaments",
                "price" => "0.55",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                "name" => "Sesame Seed",
                "description" => "Left Lower Extremity Lymphatic",
                "price" => "4.72",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                "name" => "Cheese",
                "description" => "Revision of Infusion Dev",
                "price" => "9.26",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                "name" => "Wine",
                "description" => "Femor A w Nonaut Sub",
                "price" => "8.32",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                "name" => "Club Soda",
                "description" => "Insertion of Int Fix into R",
                "price" => "9.30",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                "name" => "Mushroom Morel Fresh",
                "description" => "Ileum with Synthetic Substitute",
                "price" => "5.59",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                "name" => "Juice",
                "description" => "Extirpation of Matter",
                "price" => "0.67",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                "name" => "Nut",
                "description" => "Replace of R Int Iliac Art ",
                "price" => "2.09",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                "name" => "Pasta",
                "description" => "Resection of Stomach",
                "price" => "7.93",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                "name" => "Truffle",
                "description" => "Bladder to Cutan with Synth Sub",
                "price" => "0.89",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                "name" => "Lotus Rootlets",
                "description" => "Bypass Hemiazygos Vein",
                "price" => "9.59",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                "name" => "Lychee",
                "description" => "Drainage of R Low Lobe",
                "price" => "6.95",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                "name" => "Bagelers",
                "description" => "Occlusion of Left Subclavian",
                "price" => "0.50",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                "name" => "Table Cloth",
                "description" => "Insertion of Infusion Device",
                "price" => "8.97",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                "name" => "Muffin Batt",
                "description" => "Percutaneous Approach",
                "price" => "5.94",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                "name" => "Soup",
                "description" => "Prostate/Seminal Ves",
                "price" => "6.00",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                "name" => "Pur Value",
                "description" => "Percutaneous Endoscopic Approach",
                "price" => "8.67",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                "name" => "Bread",
                "description" => "Perc Endo Approach",
                "price" => "6.75",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                "name" => "Vegetable",
                "description" => "Artificial Opening",
                "price" => "1.80",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                "name" => "Nut",
                "description" => "Low Arm Art w Synth Sub",
                "price" => "5.30",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                "name" => "Nut",
                "description" => "Phalanx Jt with Nonaut Sub",
                "price" => "2.02",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                "name" => "Vol Au Vents",
                "description" => "Left Inguinal Lymphatic",
                "price" => "5.85",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                "name" => "Fresh",
                "description" => "Low Esophag with Intralum",
                "price" => "2.68",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                "name" => "Dark Rye",
                "description" => "Bursae and Ligaments",
                "price" => "6.93",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                "name" => "Pieces",
                "description" => "Scan of Spinal Cord",
                "price" => "9.12",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ]);
    }
}
