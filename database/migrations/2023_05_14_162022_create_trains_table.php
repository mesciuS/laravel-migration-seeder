<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company', 50);
            $table->string('arrival_station', 50);
            $table->string('departure_station', 50);
            $table->dateTime('departure_time');
            $table->dateTime('arrival_time');
            $table->string('train_code', 5);
            $table->string('model', 50);
            $table->tinyInteger('number_of_cars')->nullable();
            $table->boolean('is_on_time')->nullable();
            $table->boolean('is_cancelled')->nullable();
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
        Schema::dropIfExists('trains');
    }
};
