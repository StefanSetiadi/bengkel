<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sparepart extends Model
{
    use HasFactory;
    protected $table = 'sparepart';
    protected $guarded = ['id_sparepart'];
    protected $primaryKey = 'id_sparepart';
    protected $dates = ['created_at'];
}
