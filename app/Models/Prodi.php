<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    use HasFactory;

    protected $primaryKey = 'prodi_id';

    protected $fillable = [
        'prodi_name',
    ];

    public function members()
    {
        return $this->hasMany(Member::class, 'prodi_id', 'prodi_id');
    }
}
