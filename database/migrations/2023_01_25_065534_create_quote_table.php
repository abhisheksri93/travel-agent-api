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
        Schema::create('quote', function (Blueprint $table) {
            $table->id();
            $table->string('currency')->nullable();
            $table->string('origin')->nullable();
            $table->string('destination')->nullable();
            $table->string('passengers')->nullable();
            $table->dateTime('outwardDate')->nullable();
            $table->dateTime('returnDate')->nullable();
            $table->string('exchangeCurrencies')->nullable();
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
        Schema::dropIfExists('quote');
    }
};
