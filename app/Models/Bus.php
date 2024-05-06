<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'starting_point',
        'starting_point_latitude',
        'starting_point_longitude',
        'destination',
        'status',
    ];

    public function locationLogs()
    {
        return $this->hasMany(LocationLog::class);
    }
}
