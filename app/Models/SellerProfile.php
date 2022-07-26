<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use MatanYadaev\EloquentSpatial\SpatialBuilder;
use MatanYadaev\EloquentSpatial\Objects\Point;

class SellerProfile extends Model
{
    use HasFactory;

    protected $fillable = ['position'];
    public function newEloquentBuilder($query): SpatialBuilder
    {
        return new SpatialBuilder($query);
    }
    protected $casts = [
        'is_license' => 'boolean',
        'is_home_based' => 'boolean',
        'is_bonded' => 'boolean',
        'is_insured' => 'boolean',
        'position' => Point::class,
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'seller_users');
    }
    // protected $fillable = [
    //     'user_id',
    //     'profile_image',
    //     'business_name',
    //     'business_email',
    //     'phone_no',
    //     'website_url',
    //     'address',
    //     'zipcode',
    //     'country',
    //     'city',
    //     'is_license',
    //     'is_home_based',
    //     'is_bonded',
    //     'is_insured',


    // ];
}
