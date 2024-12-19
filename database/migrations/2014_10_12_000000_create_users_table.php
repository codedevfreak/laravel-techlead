<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('users', function (Blueprint $table) {
        $table->id();                         // Primary key (AUTO_INCREMENT).
        $table->string('email')->unique();    // Email (UNIQUE).
        $table->string('password');          // Password.
        $table->string('name');              // Nama.
        $table->boolean('active')->default(true); // Status aktif (default true).
        $table->timestamps();                // Kolom created_at dan updated_at.
    });
}


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
