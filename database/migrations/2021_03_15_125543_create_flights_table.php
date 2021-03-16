<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name_prefix');
            $table->string('name');
            $table->string('surname');
            $table->string('name_of_airline');
            $table->string('country_of_departure');
            $table->string('country_of_destination');
            $table->date('date_of_departure');
            $table->date('date_of_return');
            $table->string('class');
            $table->string('promo_code');
            $table->string('mode_of_payment');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flights');
    }
}
