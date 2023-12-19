<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
<<<<<<<< HEAD:database/migrations/2023_12_13_035123_update_users_table.php
        //
========
        Schema::table('product_images', function (Blueprint $table) {
            $table->string('color')->after('image')->nullable();
        });
>>>>>>>> e49434c87d5341e2026cf5eb4a03b105eb679eda:database/migrations/2023_12_15_170718_color_to_product_images_table.php
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
<<<<<<<< HEAD:database/migrations/2023_12_13_035123_update_users_table.php
        //
========
        Schema::table('product_images', function (Blueprint $table) {
            //
        });
>>>>>>>> e49434c87d5341e2026cf5eb4a03b105eb679eda:database/migrations/2023_12_15_170718_color_to_product_images_table.php
    }
};
