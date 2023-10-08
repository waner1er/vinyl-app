<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurchargeForSpecial extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'disc_size',
        '100_199',
        '200_249',
        '250_499',
        '500_999',
        '1000_1199',
        '2000_2999',
        '3000_4999',
        '5000_7499',
        '7500_9999',
        '10000_14999',
        '15000_19999',
        '20000_29999',
        '30000_49999',
        '50000_100000',
    ];

    public $timestamps = false;
}
