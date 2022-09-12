<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('heads', function (Blueprint $table) {
            $table->id();
            $table->foreignId('page_id')->constrained();
            $table->string('visible_name')->unique();

            $table->tinyText('tag_manager_id')->nullable();
            $table->tinyText('google_analytics_id')->nullable();
            $table->tinyText('yandex_metrika_id')->nullable();
            $table->tinyText('vk_pixel_id')->nullable();
            $table->tinyText('facebook_pixel_id')->nullable();
            $table->tinyText('my_target_id')->nullable();
            $table->boolean('main')->default(false);

            $table->tinyText('extra')->nullable();
            $table->tinyText('self_url')->nullable();
            $table->integer('order')->default(100);

            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('heads');
    }
}
