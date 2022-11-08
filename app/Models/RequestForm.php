<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestForm extends Model
{
    use HasFactory;
    protected $fillable = [
        'coupon_price',
        'user_id',
        'course_id',
        'price',
        'coupon',
        'total_price'
    ];
}
