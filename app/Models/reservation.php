<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'room_id',
        'first_name',
        'last_name',
        'phone_number',
        'city',
        'street',
        'postal_code',
        'start',
        'end'
    ];
}
