<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Payment extends Model
{
    protected $table = 'Manual_Payment_Methods';
    use HasFactory,   HasUuids;

    protected $fillable = [
        'acount_title',
        'acount_no',
        'acount_iban',
        'service_provider',
        'payment_method',
];

}
