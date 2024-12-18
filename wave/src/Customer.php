<?php

namespace Wave;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
	protected $table = 'customers';

    protected $fillable = [
        'name',
        'phone_number',
        'balance',
        'pin'
    ];

}
