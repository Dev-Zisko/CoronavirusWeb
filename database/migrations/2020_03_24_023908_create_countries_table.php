<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('count');
            $table->string('country');
            $table->string('date');
            $table->string('lat');
            $table->string('long');
            $table->integer('confirmed');
            $table->integer('recovered');
            $table->integer('deaths');
            $table->double('percent_recovered');
            $table->double('percent_deaths');
            $table->double('percent_undefined');
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
        Schema::dropIfExists('countries');
    }
}
