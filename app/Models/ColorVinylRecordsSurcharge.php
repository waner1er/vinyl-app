<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ColorVinylRecordsSurcharge extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'disc_size',
        'price',
        'isFixedPrice',
        'fixed_price',
    ];

    public $timestamps = false;
}
