<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use HasFactory;
    protected $table = 'customers';
    protected $guarded = ['id_customer'];
    protected $primaryKey = 'id_customer';
    protected $dates = ['created_at'];
    
}
