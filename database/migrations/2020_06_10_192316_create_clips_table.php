<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clips', function (Blueprint $table) {
            $table->charset = 'utf8mb4';

            $table->id();
            $table->string('clip_id')->nullable();
            $table->string('thumbnail_url');
            $table->string('title');
            $table->boolean('published')->default(true);
            $table->string('game');
            $table->string('creator');
            $table->string('video_url');
            $table->integer('views');
            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clips');
    }
}
