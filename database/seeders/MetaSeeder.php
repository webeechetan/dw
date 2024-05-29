<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $meta = [
            [
                "url" => "/",
                "title" => "",
                "meta_title" => "",
                "meta_description" => "",
                "og_title" => "agensy",
                "og_image" => ""
            ],
            [
                "url" => "about-us",
                "title" => "",
                "meta_title" => "",
                "meta_description" => "",
                "og_title" => "agensy",
                "og_image" => ""
            ],
            [
                "url" => "get-in-touch",
                "title" => "",
                "meta_title" => "",
                "meta_description" => "",
                "og_title" => "agensy",
                "og_image" => ""
            ],
            [
                "url" => "work-with-us",
                "title" => "",
                "meta_title" => "",
                "meta_description" => "",
                "og_title" => "agensy",
                "og_image" => ""
            ],
            [
                "url" => "our-services",
                "title" => "",
                "meta_title" => "",
                "meta_description" => "",
                "og_title" => "agensy",
                "og_image" => ""
            ],
            [
                "url" => "our-work",
                "title" => "",
                "meta_title" => "",
                "meta_description" => "",
                "og_title" => "agensy",
                "og_image" => ""
            ],
            [
                "url" => "blog",
                "title" => "",
                "meta_title" => "",
                "meta_description" => "",
                "og_title" => "agensy",
                "og_image" => ""
            ]
        ];
        DB::table('metas')->insert($meta);
    }
}
