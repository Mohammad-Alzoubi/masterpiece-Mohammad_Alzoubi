<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//   id  VehiclesTitle  VehiclesBrand  VehiclesOverview  PricePerDay  FuelType  ModelYear  SeatingCapacity
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('VehiclesTitle');
            $table->string('VehiclesOverview');
            $table->longText('VehicleDescription');
            $table->bigInteger('ModelYear');
            $table->string('VehicleImage');
            $table->float('price');
            $table->float('discount')->default(1);
            $table->string('FuelType');
            $table->string('TransmissionGuide');
            $table->bigInteger('Doors');
            $table->bigInteger('Passengers');
            $table->bigInteger('Luggages');
            $table->bigInteger('Brand_id');
            $table->string('color')->default('color');
            $table->string('status')->default('1');

            // ->nullable(0)->default(0);
            $table->string('AudioInput')->nullable()->default('0');
            $table->string('Wheel_drive')->nullable()->default('0');
            $table->string('GPS_Navigation')->nullable()->default('0');
            $table->string('Parking_Sensors')->nullable()->default('0');
            $table->string('Bluetooth')->nullable()->default('0');
            $table->string('USB_input')->nullable()->default('0');
            $table->string('Safe')->nullable()->default('0');
            $table->string('WI_FI')->nullable()->default('0');
            $table->string('Heated_Seats')->nullable()->default('0');
            $table->string('FM_Radio')->nullable()->default('0');
            $table->string('Air_Conditioner')->nullable()->default('0');
            $table->string('Sunroof')->nullable()->default('0');

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
        Schema::dropIfExists('vehicles');
    }
}
