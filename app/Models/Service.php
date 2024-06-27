<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $table = 'service';
    protected $guarded = ['id_kategori_service'];
    protected $primaryKey = 'id_kategori_service';
    protected $dates = ['created_at'];
}
