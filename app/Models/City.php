<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;


class City extends Model
{
    use HasFactory,   HasUuids;

    protected $fillable = [
        'city_name',

    ];
}
