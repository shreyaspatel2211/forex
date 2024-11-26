<?php

namespace Wave;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
	protected $table = 'sessions';

    protected $fillable = [
        'request_json',
        'response_json',
        'session_id',
        'mobile',
        'sequence',
        'message',
        'casetype',
        'selected_plan_id',
        'payment_system',
        'package_selection',
        'packages_start_index'
    ];

}
