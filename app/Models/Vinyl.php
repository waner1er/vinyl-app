<?php

namespace App\Models;

use App\Models\Format;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vinyl extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'vinyl_id',
    ];

    protected $cast = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
