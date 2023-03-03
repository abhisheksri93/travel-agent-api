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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('merchantTxnId')->unsigned();
            $table->foreignId('booking_id')->nullable()->constrained("booking")->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('charge_id', 100)->nullable();
            $table->decimal('amount', 18, 2)->nullable();
            $table->string('currency', 10)->nullable();
            $table->string('email', 150)->nullable();
            $table->ipAddress('customer_ip')->nullable();
            $table->string('responseMessage', 50)->nullable();
            $table->string('status', 50)->nullable();
            $table->enum('paymentType', ['Normal', 'Extra'])->default('Normal');
            $table->string('payment_gateway_id')->nullable();
            $table->enum('paymentAuthorization', ['C', 'A'])->default('C');
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
        Schema::dropIfExists('payments');
    }
};
