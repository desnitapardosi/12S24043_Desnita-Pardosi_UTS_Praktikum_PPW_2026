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
       Schema::create('equipments', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('category_id')->nullable()->index();
            $table->string('asset_code', 20)->unique();
            $table->string('name', 150);
            $table->text('specification');
            $table->text('condition')
            $table->text('status')
            $table->integer('daily_rental_fee')
            $table->timestamp('image_path', 225)->nullable(); 
    });   
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipments');

};

    }