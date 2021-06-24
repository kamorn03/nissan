<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManageContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manage_contents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('meta_keyword')->nullable();
            $table->text('home_text_1')->nullable();
            $table->string('image_path_1')->nullable();
            $table->text('home_text_2')->nullable();
            $table->string('image_path_2')->nullable();
            $table->text('home_text_3')->nullable();
            $table->string('facebook_link')->nullable();
            $table->string('youtube_link')->nullable();
            $table->string('instagram_link')->nullable();
            $table->string('line_link')->nullable();
            $table->string('global_link')->nullable();
            $table->string('phone_footer')->nullable();
            $table->string('email')->nullable();
            $table->string('company_footer')->nullable();
            $table->string('address_footer')->nullable();
            $table->string('road_footer')->nullable();
            $table->string('district_footer')->nullable();
            $table->string('city_footer')->nullable();
            $table->string('province_footer')->nullable();
            $table->string('zipcode_footer')->nullable();
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
        Schema::dropIfExists('manage_contents');
    }
}
