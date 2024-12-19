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
    Schema::create('orders', function (Blueprint $table) {
        $table->id();                         // Primary key (AUTO_INCREMENT).
        $table->foreignId('user_id')          // Foreign key ke tabel users.
              ->constrained('users');
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
        Schema::dropIfExists('orders');
    }
};
