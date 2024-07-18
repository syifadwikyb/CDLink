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
        Schema::create('previews', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('display_preview_class');
            $table->string('banner_preview');
            $table->string('profile_preview');
            $table->string('title_preview');
            $table->text('about_preview');
            $table->timestamps();
        });

        Schema::create('buttons', function (Blueprint $table) {
            $table->id();
            $table->foreignId('preview_id')->constrained('previews')->onDelete('cascade');
            $table->enum('type', ['social', 'link']);
            $table->string('text')->nullable();
            $table->string('url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buttons');
        Schema::dropIfExists('previews');
    }
};
