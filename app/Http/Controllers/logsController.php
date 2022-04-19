<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class logsController extends Controller
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
