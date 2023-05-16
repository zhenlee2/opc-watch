<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    protected $table = 'category';

    protected $fillable = [
        'name',
        'total_weight_allocation'
    ];
}
