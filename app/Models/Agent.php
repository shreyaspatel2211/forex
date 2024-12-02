<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'agent_type',
        'business_name',
        'business_phone',
        'business_address',
        'business_email',
        'currency',
        'country',
        'business_city',
        'latitude',
        'longitude',
        'Whatsapp_number',
        'status',
        'commision_type',
        'commision_value',
        'card',
        'business_state',
        'business_zip_code',
        'contact_number'
    ];
}
