<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $table = 'admin';
    protected $guarded = ['id_admin'];
    protected $primaryKey = 'id_admin';
    protected $dates = ['created_at'];
}
