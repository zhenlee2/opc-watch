<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    // use HasFactory;

    protected $table = 'users';

    protected $fillable = [
        'role_id',
        'fname',
        'lname',
        'username',
        'password',
    ];
}
