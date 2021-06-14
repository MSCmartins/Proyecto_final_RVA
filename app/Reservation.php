<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $table = 'reservations';
    //protected $fillable = ["score"];
    protected $primaryKey = 'reservation_id';
}
