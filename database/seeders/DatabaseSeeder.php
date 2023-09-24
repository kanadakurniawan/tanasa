<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Award;
use App\Models\Portfolio;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Portfolio::create([
            'file_name' => '1-a-jonusas',
            'title' => 'Jonusas'
        ]);
        Portfolio::create([
            'file_name' => '1-b-vilnius',
            'title' => 'Vilnius'
        ]);
        Portfolio::create([
            'file_name' => '1-c-white-arcade',
            'title' => 'White Arcade'
        ]);
        Portfolio::create([
            'file_name' => '1-d-losbastes',
            'title' => 'Losbastes'
        ]);
        Portfolio::create([
            'file_name' => '2-a-cheongju',
            'title' => 'Cheongju'
        ]);
        Portfolio::create([
            'file_name' => '2-b-varna',
            'title' => 'Varna'
        ]);
        Portfolio::create([
            'file_name' => '2-c-songdo',
            'title' => 'Songdo'
        ]);
        Portfolio::create([
            'file_name' => '2-d-ljubljana',
            'title' => 'Ljubljana'
        ]);
        Portfolio::create([
            'file_name' => '3-a-songdo',
            'title' => 'Songdo'
        ]);
        Portfolio::create([
            'file_name' => '3-b-tripoli',
            'title' => 'Tripoli'
        ]);
        Portfolio::create([
            'file_name' => '3-c-yeouinaru',
            'title' => 'Yeouinaru'
        ]);
        Portfolio::create([
            'file_name' => '3-d-beersheba',
            'title' => 'Beersheba'
        ]);
        Portfolio::create([
            'file_name' => '4-a-suncheon',
            'title' => 'Suncheon'
        ]);
        Portfolio::create([
            'file_name' => '4-b-songdo',
            'title' => 'Songdo'
        ]);
        Portfolio::create([
            'file_name' => '4-c-aarhus',
            'title' => 'Aarhus'
        ]);
        Portfolio::create([
            'file_name' => '4-d-taichung',
            'title' => 'Taichung'
        ]);

        
        Award::create([
            'file_name' => 'a-jonusas-radvilla',
            'title' => 'Jonušas Radvila',
            'subtitle' => 'Jonušas Radvila Palace Art Museum, Vilnius, 2021 [Finalist]'
        ]);
        Award::create([
            'file_name' => 'b-dayang',
            'title' => 'DaYang Pedestrian',
            'subtitle' => 'DaYang Mountain Traffic System, SuZhou, 2018 [Finalist]'
        ]);
        Award::create([
            'file_name' => 'c-yeouinaru',
            'title' => 'Yeouinaru Terminal',
            'subtitle' => 'Yeouinaru Ferry Terminal, Seoul, 2017 [3rd Prize]'
        ]);
        Award::create([
            'file_name' => 'd-language',
            'title' => 'Museum of Writing',
            'subtitle' => 'Museum of World Writing, SongDo, 2017 [4th Prize]'
        ]);
        Award::create([
            'file_name' => 'e-varna',
            'title' => 'Varna Library',
            'subtitle' => 'Varna Public Library, 2015 [Finalist]'
        ]);
    }
}
