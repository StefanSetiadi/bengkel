<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailService extends Model
{
    protected $table = 'detail_service';
    protected $guarded = ['id_detail_service'];
    protected $primaryKey = 'id_detail_service';
    protected $dates = ['created_at'];
}
