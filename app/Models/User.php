<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = [
        'name',
        'role',
        'nim',
        'nip',
        'password',
    ];

    protected $hidden = [
        'password',
    ];
}