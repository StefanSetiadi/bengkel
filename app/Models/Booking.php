<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $table = 'booking';
    protected $guarded = ['id_booking'];
    protected $primaryKey = 'id_booking';
    protected $dates = ['created_at'];
}
