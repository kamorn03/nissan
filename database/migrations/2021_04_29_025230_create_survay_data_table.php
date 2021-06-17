<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurvayDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('survay_data', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type');
            $table->longText('product')->nullable();
            $table->string('location')->nullable();
            $table->string('brand')->nullable();
            $table->string('period')->nullable();
            $table->string('name')->nullable();
            $table->string('phone')->nullable();
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
        Schema::dropIfExists('survay_data');
    }
}
