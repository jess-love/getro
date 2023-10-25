<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProduitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        \App\Models\Produit::create(
            [
                'name' => 'kepy',
                'tag' => 'Best Arrival',
                'description' => 'contre le soleil',
                'unit_price' => 230.00,
                'old_price' => 23.00,
                'main_pic' => 'img-9.png',
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            \App\Models\Produit::create(
            [
                'name' => 'seche cheveux',
                'tag' => '',
                'description' => 'pour homme et femme',
                'unit_price' => 25.00,
                'old_price' => 23.00,
                'main_pic' => 'img-17.png',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        \App\Models\Produit::create(
            [
                'name' => 'soulier',
                'tag' => '',
                'description' => 'moarron mocassin',
                'unit_price' => 234.00,
                'old_price' => 243.00,
                'main_pic' => 'img-13.png',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        \App\Models\Produit::create(
            [
                'name' => 'chemise',
                'tag' => 'Brand new',
                'description' => 'bleu a trace',
                'unit_price' => 25.00,
                'old_price' => 28.00,
                'main_pic' => 'img-31.png',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        \App\Models\Produit::create(
            [
                'name' => 'brosse a cheveux',
                'tag' => '',
                'description' => 'kk voye',
                'unit_price' => 63.00,
                'old_price' => 83.00,
                'main_pic' => 'img-18.png',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        \App\Models\Produit::create(
        [
                'name' => 'camera',
                 'tag' => '',
                'description' => 'camera avec 145M pixeles',
                'unit_price' => 263.00,
                'old_price' => 283.00,
                'main_pic' => 'img-20.png',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        \App\Models\Produit::create(
            [
                'name' => 'valise',
                'tag' => 'Brand new',
                'description' => 'valise pour femme',
                'unit_price' => 83.90,
                'old_price' => 93.60,
                'main_pic' => 'img-15.png',
                'created_at' => now(),
                'updated_at' => now(),
            ]);

    }
}
