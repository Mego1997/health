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
        Schema::create('res__info__articles', function (Blueprint $table) {
            $table->id();
            $table->string('article_name');
            $table->text('article_body');
            $table->string('article_image');
            $table->foreignId('cat_id')->constrained('res__info__categories');
            $table->foreignId('tag_id')->constrained('res__info__tags');
            $table->foreignId('doc_id')->constrained('doctors');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('res__info__articles');
    }
};
