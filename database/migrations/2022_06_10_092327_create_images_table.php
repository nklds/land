<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    /*
     *
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();

            $table->tinyText('class_list')->nullable();
            $table->tinyText('bem_class')->nullable();
            $table->tinyText('visible_text')->nullable();
            $table->tinyText('title')->nullable();
            $table->tinyText('tag_name')->nullable();
            $table->tinyText('extra')->nullable();
            $table->tinyText('alt')->nullable();
            $table->tinyText('image_url')->nullable();
            $table->tinyText('visible_name')->nullable();
            $table->tinyText('data_attributes')->nullable();
            $table->tinyText('type')->nullable();
            $table->tinyText('name')->nullable();
            $table->tinyText('fragment_name')->nullable();
            $table->integer('order')->nullable();
            $table->tinyText('place')->nullable();
            $table->tinyText('href')->nullable();
            $table->tinyText('self_url')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('images');
    }
}
