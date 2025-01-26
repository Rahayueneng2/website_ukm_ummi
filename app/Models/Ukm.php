<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ukm extends Model
{
    use HasFactory;

    protected $primaryKey = 'ukm_id';

    protected $fillable = [
        'ukm_name',
        'description',
        'history',
        'social_media',
        'image_ukm',
    ];

    public function members()
    {
        return $this->hasMany(Member::class, 'ukm_id', 'ukm_id');
    }
    
}

