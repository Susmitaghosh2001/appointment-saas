<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubscriptionPlan extends Model
{
    protected $fillable = [
        'plan_name',
        'price',
        'booking_limit',
        'staff_limit',
        'features',
        'status',
    ];
}
