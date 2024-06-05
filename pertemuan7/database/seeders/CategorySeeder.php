<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => "Rizki",
            'email' => "mfgaen@gmail.com",
            'NoPhone' => "0975312468i",
            'class' => "IT"
        ]);
        Category::factory(5)->create();
    }
}
