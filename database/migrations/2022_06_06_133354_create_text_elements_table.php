<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTextElementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('texts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('textable_id')->nullable();
            $table->string('textable_type')->nullable();

            $table->tinyText('class_list')->nullable();
            $table->tinyText('bem_class')->nullable();
            $table->tinyText('visible_text')->nullable();
            $table->tinyText('title')->nullable();
            $table->tinyText('tag_name')->nullable();
            $table->tinyText('extra')->nullable();
            $table->tinyText('self_url')->nullable();
            $table->tinyText('visible_name')->nullable();
            $table->tinyText('data_attributes')->nullable();


            $table->tinyText('type')->nullable();
            $table->tinyText('value')->nullable();
            $table->tinyText('name')->nullable();
            $table->tinyText('placeholder')->nullable();
            $table->tinyText('fragment_name')->nullable();
            $table->integer('order')->nullable();
            $table->string('place')->nullable();
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
        Schema::dropIfExists('texts');
    }
}
