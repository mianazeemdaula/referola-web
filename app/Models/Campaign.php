<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'campaign_type_id',
        'user_share',
        'friend_share',
        'description',
        'terms_and_condition',


    ];
}
