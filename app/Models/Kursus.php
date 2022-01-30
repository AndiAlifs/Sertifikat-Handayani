<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kursus extends Model
{
    use HasFactory;
    public $timestamps = false;

    /**
     * Get all of the kompetensis for the Kursus
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function kompetensis()
    {
        return $this->hasMany(Kompetensi::class, 'kursus_id', 'id');
    }
}
