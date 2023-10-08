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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('doc_name')->nullable();
            $table->string('doc_image')->nullable();
            $table->string('doc_spec')->nullable();
            $table->string('doc_address')->nullable();
            $table->string('doc_phone')->nullable();
            $table->string('doc_mail')->nullable();
            $table->text('doc_summary')->nullable();
            $table->text('doc_exp')->nullable();
            $table->text('doc_skills')->nullable();
            $table->text('doc_edu')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
