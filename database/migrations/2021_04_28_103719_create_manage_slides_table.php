<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManageSlidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manage_slides', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('image_path');
            $table->string('line_title')->nullable();
            $table->longText('description')->nullable();
            // $table->string('line_two_title');
            $table->timestamps();
        });
    }

    /**s
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('manage_slides');
    }
}
