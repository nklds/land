<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->string('site_name')->nullable();

            $table->tinyText('language')->nullable();
            $table->tinyText('favicon')->nullable();

            $table->id();
            $table->string('slug')->unique()->index();
            $table->tinyText('visible_name')->nullable();



            $table->tinyText('extra')->nullable();
            $table->text('common_head_styles')->nullable();
            $table->text('common_head_scripts')->nullable();
            $table->text('common_after_body_scripts')->nullable();
            $table->text('common_footer_scripts')->nullable();



            $table->string('title')->nullable();
            $table->string('keywords')->nullable();
            $table->tinyText('description')->nullable();
            $table->tinyText('excerpt')->nullable();



            $table->tinyText('og_title')->nullable();
            $table->tinyText('og_description')->nullable();
            $table->tinyText('og_type')->nullable();
            $table->tinyText('og_image')->nullable();
            $table->tinyText('og_url')->nullable();
            $table->tinyText('og_locale')->nullable();
            $table->tinyText('og_site_name')->nullable();

            $table->integer('order', false, true)->default(100);
            $table->tinyText('self_url')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('pages');
    }
}
