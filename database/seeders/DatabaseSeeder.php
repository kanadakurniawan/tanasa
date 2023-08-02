<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
            'title' => '1-a-jonusas'
        ]);
        Portfolio::create([
            'file_name' => '1-b-vilnius',
            'title' => '1-b-vilnius'
        ]);
        Portfolio::create([
            'file_name' => '1-c-white-arcade',
            'title' => '1-c-white-arcade'
        ]);
        Portfolio::create([
            'file_name' => '1-d-losbastes',
            'title' => '1-d-losbastes'
        ]);
        Portfolio::create([
            'file_name' => '2-a-cheongju',
            'title' => '2-a-cheongju'
        ]);
        Portfolio::create([
            'file_name' => '2-b-varna',
            'title' => '2-b-varna'
        ]);
        Portfolio::create([
            'file_name' => '2-c-songdo',
            'title' => '2-c-songdo'
        ]);
        Portfolio::create([
            'file_name' => '2-d-ljubljana',
            'title' => '2-d-ljubljana'
        ]);
        Portfolio::create([
            'file_name' => '3-a-songdo',
            'title' => '3-a-songdo'
        ]);
        Portfolio::create([
            'file_name' => '3-b-tripoli',
            'title' => '3-b-tripoli'
        ]);
        Portfolio::create([
            'file_name' => '3-c-yeouinaru',
            'title' => '3-c-yeouinaru'
        ]);
        Portfolio::create([
            'file_name' => '3-d-beersheba',
            'title' => '3-d-beersheba'
        ]);
        Portfolio::create([
            'file_name' => '4-a-suncheon',
            'title' => '4-a-suncheon'
        ]);
        Portfolio::create([
            'file_name' => '4-b-songdo',
            'title' => '4-b-songdo'
        ]);
        Portfolio::create([
            'file_name' => '4-c-aarhus',
            'title' => '4-c-aarhus'
        ]);
        Portfolio::create([
            'file_name' => '4-d-taichung',
            'title' => '4-d-taichung'
        ]);
    }
}
