<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disease extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function sheepTreatments()
    {
        return $this->hasMany(SheepTreatment::class, 'disease_id', 'id');
    }
}
