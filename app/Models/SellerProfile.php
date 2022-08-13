<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellerProfile extends Model
{
    use HasFactory;
    protected $casts = [
        'is_license' => 'boolean',
        'is_home_based' => 'boolean',
        'is_bonded' => 'boolean',
        'is_insured' => 'boolean',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'seller_users', 'seller_id', 'user_id');
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
