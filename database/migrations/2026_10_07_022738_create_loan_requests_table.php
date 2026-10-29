<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('loan_requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('equipment_id')->nullable()->index();
            $table->string('borrower_name', 100);
            $table->string('borrower_nim', 10);
            $table->string('borrower_email', 10);
            $table->date('loan_date');
            $table->date('expected_return_date');
            $table->text('purpose');
            $table->text('status');
            $table->integer('total_estimated_fee')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('loan_requests');
    }
};