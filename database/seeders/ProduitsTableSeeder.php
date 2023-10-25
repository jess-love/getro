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
        \DB::Table('produits')->insert();
        
        
        
        $produit = new \App\Produit();
        $produit-> name = 'sac a dos';
        $produit->description = 'valise noir et rouge';
        $produit->unit_price = 122;
        $produit->main_pic = 'img-1.png';
        $produit->created_at = now();
        $produit->updated_at = now();
        $produit->save();


        $produit = new \app\Models\Produit();
        $produit-> name = 'watch';
        $produit->description = 'montre a bracelet plastique';
        $produit->unit_price = 125;
        $produit->main_pic = 'img-3.png';
        $produit->created_at = now();
        $produit->updated_at = now();
        $produit->save();

        $produit = new \app\Models\Produit();
        $produit-> name = 'kepy';
        $produit->description = 'contre le soleil';
        $produit->unit_price = 23;
        $produit->main_pic = 'img-9.png';
        $produit->created_at = now();
        $produit->updated_at = now();
        $produit->save();

        $produit = new \app\Models\Produit();
        $produit-> name = 'soulier';
        $produit->description = 'moarron mocassin';
        $produit->unit_price = 287;
        $produit->main_pic = 'img-13.png';
        $produit->created_at = now();
        $produit->updated_at = now();
        $produit->save();

        $produit = new \app\Models\Produit();
        $produit-> name = 'camera';
        $produit->description = 'camera avec 145M pixeles';
        $produit->unit_price = 500;
        $produit->main_pic = 'img-20.png';
        $produit->created_at = now();
        $produit->updated_at = now();
        $produit->save();

        $produit = new \app\Models\Produit();
        $produit-> name = 'seche cheveux';
        $produit->description = 'pour homme et femme';
        $produit->unit_price = 25;
        $produit->main_pic = 'img-17.png';
        $produit->created_at = now();
        $produit->updated_at = now();
        $produit->save();

        $produit = new \app\Models\Produit();
        $produit-> name = 'chemise';
        $produit->description = 'bleu a trace';
        $produit->unit_price = 10;
        $produit->main_pic = 'img-31.png';
        $produit->created_at = now();
        $produit->updated_at = now();
        $produit->save();

        $produit = new \app\Models\Produit();
        $produit-> name = 'brosse a cheveux';
        $produit->description = 'kk voye';
        $produit->unit_price = 45;
        $produit->main_pic = 'img-18.png';
        $produit->created_at = now();
        $produit->updated_at = now();
        $produit->save();

        $produit = new \app\Models\Produit();
        $produit-> name = 'valise';
        $produit->description = 'valise pour femme';
        $produit->unit_price = 32;
        $produit->main_pic = 'img-15.png';
        $produit->created_at = now();
        $produit->updated_at = now();
        $produit->save();

    }
}
