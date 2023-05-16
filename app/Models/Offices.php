<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offices extends Model
{
    protected $table = 'lib_office';

    protected $fillable = [
        'name',
        'code',
    ];
}
