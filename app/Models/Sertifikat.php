<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sertifikat extends Model
{
    use HasFactory;
    public $timestamps = false;

    /**
     * The nilai that belong to the Sertifikat
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function nilai()
    {
        return $this->belongsToMany(Kompetensi::class, 'nilais', 'sertifikat_id', 'kompetensi_id');
    }

    /**
     * Get all of the nilais for the Sertifikat
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function nilais()
    {
        return $this->hasMany(Nilai::class, 'sertifikat_id', 'id');
    }

    /**
     * Get the program that owns the Sertifikat
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function program()
    {
        return $this->belongsTo(Kursus::class, 'kursus_id', 'id');
    }
}
