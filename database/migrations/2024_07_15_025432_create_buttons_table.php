<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateButtonsTable extends Migration
{
    public function up()
    {
        // Drop the table if it already exists
        if (Schema::hasTable('buttons')) {
            Schema::dropIfExists('buttons');
        }

        // Create the new buttons table
        Schema::create('buttons', function (Blueprint $table) {
            $table->id();
            $table->foreignId('preview_id')->constrained('previews')->onDelete('cascade');
            $table->string('type'); // Either 'social' or 'link'
            $table->string('text')->nullable();
            $table->string('url');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('buttons');
    }
}
