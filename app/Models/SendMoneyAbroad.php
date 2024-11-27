<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SendMoneyAbroad extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'country', 
        'purpose', 
        'amount', 
        'city',
        'name',
        'email',
        'phone_number'
    ];

}
