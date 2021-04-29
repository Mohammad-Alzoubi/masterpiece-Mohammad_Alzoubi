<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            // $table->bigInteger('customer_id')->default('0');
            // $table->bigInteger('vehicle_id')->default('0');
            $table->string('pickup_location');
            $table->string('drop_location');
            $table->string('pickup_Date');
            $table->string('pickup_Time');
            $table->string('drop_Date');
            $table->string('drop_Time');
            // $table->float('total_price')->default('0');
            // $table->string('address')->default('0');
            // $table->string('status')->default('Not Confirm yet');
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
        Schema::dropIfExists('bookings');
    }
}
