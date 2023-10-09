<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class VinylCase extends Model
{
    use HasFactory;

    protected $table = 'vinyl_cases';
    protected $fillable = [
        'title',
        'size',
        'cutting_id',
        'black_vinyl_id',
        'color_vinyl_records_surcharge_id',
        'picture_disc_id',
        'print_label_id',
        'test_pressing_id',
    ];

    protected $cast = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function cutting(): BelongsTo
    {
        return $this->belongsTo(Cutting::class);
    }

    public function black_vinyl(): BelongsTo
    {
        return $this->belongsTo(Blackvinyl::class);
    }
    public function color_vinyl_records_surcharge(): BelongsTo
    {
        return $this->belongsTo(ColorVinylRecordsSurcharge::class);
    }

    public function picture_disc(): BelongsTo
    {
        return $this->belongsTo(PictureDisc::class);
    }
    public function print_label(): BelongsTo
    {
        return $this->belongsTo(PrintLabel::class);
    }

    public function test_pressing(): BelongsTo
    {
        return $this->belongsTo(TestPressing::class);
    }

}
