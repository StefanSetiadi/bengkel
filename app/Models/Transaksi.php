<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksi';
    protected $guarded = ['id_transaksi'];
    protected $primaryKey = 'id_transaksi';
    protected $dates = ['created_at'];
}
