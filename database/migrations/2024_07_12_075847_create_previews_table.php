<?php
// database/migrations/xxxx_xx_xx_create_previews_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreviewsTable extends Migration
{
    public function up()
    {
        Schema::create('previews', function (Blueprint $table) {
            $table->id();
            $table->string('display_preview_class');
            $table->string('banner_preview');
            $table->string('profile_preview');
            $table->string('title_preview');
            $table->text('about_preview');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('previews');
    }
}

