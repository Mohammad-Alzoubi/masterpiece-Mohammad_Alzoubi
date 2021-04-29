<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_vehicles', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('vehicles_id');
            $table->bigInteger('customer_id');
            $table->bigInteger('booking_id');
            $table->string('vehiclesName');
            $table->string('customerName');
            $table->float('total_price');
            $table->string('FromDate');
            $table->string('ToDate');
            $table->string('DrivingImage');
            $table->string('IdentityImage');
            $table->string('status')->default('Not Confirmed yet');
            $table->timestamps();

            // Image Driving
            // Identity Image
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_vehicles');
    }
}
