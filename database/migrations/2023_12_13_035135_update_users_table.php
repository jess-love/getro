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
<<<<<<<< HEAD:database/migrations/2023_12_13_035135_update_users_table.php
        //
========
        Schema::create('buys', function (Blueprint $table) {
            $table->id();
//            $table->foreignId('order_id')->constrained()->onDelete('cascade');
//            $table->foreignId('product_id')->constrained()->onDelete('cascade');
            $table->integer('order_id');
            $table->integer('product_id');
            $table->integer('quantity');
            $table->timestamps();
        });
>>>>>>>> e49434c87d5341e2026cf5eb4a03b105eb679eda:database/migrations/2023_12_10_030758_create_buys_table.php
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
