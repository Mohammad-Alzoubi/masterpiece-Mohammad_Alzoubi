<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderVehicle extends Model
{
    protected $table = "order_vehicles";
    public $primaryKey = 'id';
    public $timestamps = true;
}
