<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
            $table->string('company',200);
            $table->string('departure_station',150);
            $table->string('arrival_station',150);
            $table->time('arrival_time');
            $table->time('departure_time');
            $table->unsignedInteger('train_code');
            $table->unsignedTinyInteger('carriage_number');
            $table->boolean('in_time');
            $table->boolean('cancelled');
            $table->date('deadline');
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
        Schema::dropIfExists('listings');
    }
}
