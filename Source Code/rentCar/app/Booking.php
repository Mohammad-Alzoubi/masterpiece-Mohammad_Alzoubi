<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = "bookings";
    public $primaryKey = 'id';
    public $timestamps = true;
}
