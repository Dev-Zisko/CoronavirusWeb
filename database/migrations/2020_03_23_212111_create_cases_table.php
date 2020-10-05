<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cases', function (Blueprint $table) {
            $table->string('x');
            $table->string('y');
            $table->string('objectid')->unique();
            $table->string('province_state');
            $table->string('country_region');
            $table->string('last_update');
            $table->string('lat');
            $table->string('long_');
            $table->string('confirmed');
            $table->string('recovered');
            $table->string('deaths');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cases');
    }
}
