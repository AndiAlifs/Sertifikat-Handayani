<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;
    public $timestamps = false;

    /**
     * Get the sertif that owns the Nilai
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function sertif()
    {
        return $this->belongsTo(Sertifikat::class, 'sertifikat_id', 'id');
    }

    /**
     * Get the kompetensi that owns the Nilai
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kompetensi()
    {
        return $this->belongsTo(Kompetensi::class, 'kompetensi_id', 'id');
    }
    
}
