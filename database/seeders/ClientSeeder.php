<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientSeeder extends Seeder
{

public function run()
    {
        DB::table("clients")->insert([
            [
                "name" => "Topiczoom",
                "cnpj" => "46170090000160",
                "address" => "605 Butternut Trail",
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s")
            ],
            [
                "name" => "Tagcat",
                "cnpj" => "22116449000152",
                "address" => "34 Hallows Terrace",
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s")
            ],
            [
                "name" => "Youopia",
                "cnpj" => "81839118000100",
                "address" => "510 Shoshone Point",
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s")
            ],
            [
                "name" => "Livetube",
                "cnpj" => "35476940000136",
                "address" => "6041 Cambridge Road",
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s")
            ],
            [
                "name" => "Rhyzio",
                "cnpj" => "88959333000193",
                "address" => "0 Columbus Park",
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s")
            ],
            [
                "name" => "Dabvine",
                "cnpj" => "94254260000103",
                "address" => "27458 Burning Wood Plaza",
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s")
            ],
            [
                "name" => "Zoomcast",
                "cnpj" => "41615076000109",
                "address" => "0220 Ludington Point",
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s")
            ],
            [
                "name" => "Chatterpoint",
                "cnpj" => "72204210000102",
                "address" => "80908 Fremont Way",
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s")
            ],
            [
                "name" => "Shuffletag",
                "cnpj" => "28465225000132",
                "address" => "17382 Sachs Crossing",
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s")
            ],
            [
                "name" => "Trilia",
                "cnpj" => "80272030000196",
                "address" => "47512 Kipling Drive",
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s")
            ],
            [
                "name" => "Blogspan",
                "cnpj" => "28309744000101",
                "address" => "17382 Sachs Crossing",
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s")
            ],
            [
                "name" => "Oyondu",
                "cnpj" => "41057132000137",
                "address" => "081 Sloan Circle",
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s")
            ],
            [
                "name" => "Realcube",
                "cnpj" => "79622624000109",
                "address" => "032 Saint Paul Terrace",
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s")
            ],
            [
                "name" => "Flipstorm",
                "cnpj" => "99645815000195",
                "address" => "87 Onsgard Center",
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s")
            ],
            [
                "name" => "Digitube",
                "cnpj" => "49433299000167",
                "address" => "4872 Badeau Hill",
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s")
            ],
            [
                "name" => "Devbug",
                "cnpj" => "14471655000152",
                "address" => "428 Elmside Crossing",
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s")
            ],
            [
                "name" => "Quatz",
                "cnpj" => "49170808000106",
                "address" => "41 Sage Junction",
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s")
            ],
            [
                "name" => "Quinu",
                "cnpj" => "42447419000136",
                "address" => "91422 Derek Alley",
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s")
            ],
            [
                "name" => "Trudeo",
                "cnpj" => "87320444000192",
                "address" => "174 Washington Parkway",
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s")
            ],
            [
                "name" => "Jazzy",
                "cnpj" => "50703509000179",
                "address" => "6028 Sage Hill",
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s")
            ],
            [
                "name" => "Youtags",
                "cnpj" => "43291075000181",
                "address" => "5 Florence Parkway",
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s")
            ],
            [
                "name" => "Mydeo",
                "cnpj" => "44180538000109",
                "address" => "8 Macpherson Crossing",
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s")
            ],
            [
                "name" => "Yamia",
                "cnpj" => "40066671000170",
                "address" => "16 Algoma Crossing",
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s")
            ],
            [
                "name" => "Quinu",
                "cnpj" => "53248401000121",
                "address" => "0999 Farragut Parkway",
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s")
            ],
            [
                "name" => "Ntag",
                "cnpj" => "70831479000193",
                "address" => "84644 Pawling Road",
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s")
            ],
            [
                "name" => "Lazz",
                "cnpj" => "26492614000121",
                "address" => "2 6th Way",
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s")
            ],
            [
                "name" => "Feedfire",
                "cnpj" => "27199622000147",
                "address" => "72036 Ramsey Center",
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s")
            ],
            [
                "name" => "Trudeo",
                "cnpj" => "35540739000170",
                "address" => "06434 Bayside Alley",
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s")
            ],
            [
                "name" => "Oyondu",
                "cnpj" => "73473275000116",
                "address" => "59 Memorial Trail",
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s")
            ]
        ]);
    }
}
