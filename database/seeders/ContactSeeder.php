<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{

    public function run()
    {
        DB::table("contacts")->insert([
            [
                "client_id" => "1",
                "telephone" => "75676803"
            ],
            [
                "client_id" => "2",
                "telephone" => "91836487"
            ],
            [
                "client_id" => "3",
                "telephone" => "22744724"
            ],
            [
                "client_id" => "4",
                "telephone" => "22363008"
            ],
            [
                "client_id" => "5",
                "telephone" => "16244288"
            ],
            [
                "client_id" => "6",
                "telephone" => "75800772"
            ],
            [
                "client_id" => "7",
                "telephone" => "81016541"
            ],
            [
                "client_id" => "8",
                "telephone" => "37939532"
            ],
            [
                "client_id" => "9",
                "telephone" => "27935997"
            ],
            [
                "client_id" => "10",
                "telephone" => "81664529"
            ],
            [
                "client_id" => "11",
                "telephone" => "37210998"
            ],
            [
                "client_id" => "11",
                "telephone" => "38570265"
            ],
            [
                "client_id" => "10",
                "telephone" => "57384163"
            ],
            [
                "client_id" => "1",
                "telephone" => "67647679"
            ],
            [
                "client_id" => "1",
                "telephone" => "77751539"
            ],
            [
                "client_id" => "3",
                "telephone" => "56006731"
            ],
            [
                "client_id" => "15",
                "telephone" => "95014063"
            ],
            [
                "client_id" => "19",
                "telephone" => "59747832"
            ],
            [
                "client_id" => "29",
                "telephone" => "34637571"
            ],
            [
                "client_id" => "28",
                "telephone" => "75363394"
            ],
            [
                "client_id" => "7",
                "telephone" => "63498346"
            ],
            [
                "client_id" => "27",
                "telephone" => "42658880"
            ],
            [
                "client_id" => "26",
                "telephone" => "35756940"
            ],
            [
                "client_id" => "16",
                "telephone" => "85356579"
            ],
            [
                "client_id" => "16",
                "telephone" => "96561269"
            ],
            [
                "client_id" => "3",
                "telephone" => "16118427"
            ],
            [
                "client_id" => "6",
                "telephone" => "28861202"
            ],
            [
                "client_id" => "8",
                "telephone" => "16048335"
            ],
            [
                "client_id" => "10",
                "telephone" => "38412434"
            ]
        ]);
    }
}
