<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
        $table->id();
        // $table->unsignedBigInteger('state_id')->default(1);
        // $table->foreign('state_id')->references('id')->on('state');
        $table->string('first_name', 250);
        $table->string('last_name', 250);
        $table->string('email', 250)->unique();
        $table->string('avatar', 250);
        $table->string('password', 250);
        $table->string('activity', 250)->default(1);
        $table->timestamp('email_verified_at')->nullable();
        $table->rememberToken();
        $table->timestamps();
    });

//    User::create(['first_name' => 'Toner','last_name' => 'Front','email' => 'admin@themesbrand.com','password' => Hash::make('12345678'),'email_verified_at'=>'2022-01-02 17:04:58','avatar' => 'avatar-1.jpg','created_at' => now(),]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};


//username : bouquetjess27@gmail.com / bouquetjess96@gmail.com
//password:  12345678                / 123456789
