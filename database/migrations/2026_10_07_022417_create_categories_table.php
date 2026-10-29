<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('name', 100)->unique();
            $table->string('code', 10);->unique();
            $table->integer('created_at');
            $table->integer('updated_at');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};