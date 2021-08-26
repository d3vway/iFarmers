<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id', 'farm_name', 'number_of_farmer', 'email', 'phone', 'adddress', 'product', 'weight', 'price'
    ];
}
