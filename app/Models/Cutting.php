<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cutting extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'disc_size',
        'price',
    ];

    public $timestamps = false;
}
