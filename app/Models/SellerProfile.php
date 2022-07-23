<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellerProfile extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'profile_image',
        'business_name',
        'business_email',
        'phone_no',
        'website_url',
        'address',
        'zipcode',
        'country',
        'city',
        'is_license',
        'is_home_based',
        'is_bonded',
        'is_insured',


    ];
}
