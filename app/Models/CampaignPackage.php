<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CampaignPackage extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'campaign_id',
        'price_code',
        'price',
        'buyer_disc',
        'refer_comm',
        'referee_comm',
    ];
}
