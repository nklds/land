<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sections', function (Blueprint $table) {
            /*
             * 'name' => 'string',
            'visible_name' => 'string',
            'bem_class' => 'string',
            'class_list' => 'string',
            'title' => 'string',
            +'page_id' => 'integer|string',
            'extra' => 'string',
            'order' => 'integer'
             */
            $table->id();
            $table->foreignId('page_id')->constrained();
            $table->tinyText('name')->nullable();
            $table->tinyText('visible_name');
            $table->tinyText('bem_class')->nullable();
            $table->tinyText('class_list')->nullable();
            $table->tinyText('title')->nullable();
            $table->tinyText('extra')->nullable();
            $table->tinyText('order')->nullable();
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
        Schema::dropIfExists('sections');
    }
}
