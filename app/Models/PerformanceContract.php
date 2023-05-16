<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PerformanceContract extends Model
{
    protected $table = 'pc';

    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'activity_id',
        'indicator_track_id',
        'year',
        'semester',
    ];
}
