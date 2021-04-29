<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $table = "vehicles";
    public $primaryKey = 'id';
    public $timestamps = true;
}
