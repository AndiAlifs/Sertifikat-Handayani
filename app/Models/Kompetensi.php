<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kompetensi extends Model
{
    use HasFactory;
    public $timestamps = false;

    /**
     * Get the kursus that owns the Kompetensi
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kursus()
    {
        return $this->belongsTo(Kursus::class, 'kursus_id', 'id');
    }
}
