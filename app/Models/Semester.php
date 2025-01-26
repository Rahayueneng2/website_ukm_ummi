<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
    use HasFactory;

    protected $primaryKey = 'semester_id';

    protected $fillable = [
        'semester_number',
    ];

    public function members()
    {
        return $this->hasMany(Member::class, 'semester_id', 'semester_id');
    }
}
