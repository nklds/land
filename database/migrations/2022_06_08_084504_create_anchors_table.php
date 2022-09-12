<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnchorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anchors', function (Blueprint $table) {
            $table->id();
            $table->tinyText('class_list')->nullable();
            $table->tinyText('bem_class')->nullable();
            $table->integer('order')->nullable();
            $table->tinyText('visible_text')->nullable();
            $table->tinyText('title')->nullable();
            $table->tinyText('tag_name')->nullable();
            $table->tinyText('name')->nullable();
            $table->tinyText('href')->nullable();
            $table->tinyText('type')->nullable();
            $table->tinyText('data_attributes')->nullable();


            $table->tinyText('extra')->nullable();
            $table->tinyText('visible_name')->nullable();
            $table->tinyText('fragment_name')->nullable(); //id="#id"
            $table->foreignId('anchorable_id')->nullable();
            $table->tinyText('anchorable_type')->nullable();
            $table->tinyText('self_url')->nullable();
            $table->string('place')->nullable(); // for example [google|https://google.com](place1) [yandex|https://yandex.ru](place2)



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
        Schema::dropIfExists('anchors');
    }
}
