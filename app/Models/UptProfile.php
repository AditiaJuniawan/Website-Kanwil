<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UptProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'upt_id',
        'foto',
        'jenis_upt',
        'informasi_singkat',
        'website_url',
    ];

    /**
     * Get the full URL to the photo.
     */
    public function getFotoUrlAttribute()
    {
        if ($this->foto) {
            return asset('storage/' . $this->foto);
        }
        
        return null;
    }
}
