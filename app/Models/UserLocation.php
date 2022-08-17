<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use MatanYadaev\EloquentSpatial\SpatialBuilder;
use MatanYadaev\EloquentSpatial\Objects\Point;

class UserLocation extends Model
{
    use HasFactory;

    protected $fillable = ['position'];
    protected $casts = [
        'position' => Point::class,
        // 'area' => Polygon::class,
    ];

    public function newEloquentBuilder($query): SpatialBuilder
    {
        return new SpatialBuilder($query);
    }
}
