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
        Schema::create('booking', function (Blueprint $table) {
            $table->id();
            $table->string('quote_id')->nullable();
            $table->string('hash')->nullable();
            $table->string('airline_code')->nullable();
            $table->string('flight_number')->nullable();
            $table->string('airport_code')->nullable();
            $table->dateTime('flight_date_time')->nullable();
            $table->string('name')->nullable();
            $table->string('address')->nullable();
            $table->dateTime('pickup_date_time')->nullable();
            $table->string('code')->nullable();
            $table->string('quantity')->nullable();
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
        Schema::dropIfExists('booking');
    }
};
