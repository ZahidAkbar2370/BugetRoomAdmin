<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Ads extends Model
{
    use HasFactory,   HasUuids;

    protected $fillable = [
        'ad_title',
        'type_of_property',
        'city_name',
        'cost',
        'ads_listing_type',
        'ads_listing_payment_status',
        'publication_status',

];
}
