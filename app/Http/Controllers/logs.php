<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class log extends Controller
{
    protected $fillable = [
        'action',
        'room_id',
        'user_id',
        'platform',
        'browser',
        'ip_address',
    ];
}
