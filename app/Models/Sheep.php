<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sheep extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function foldtype()
    {
        return $this->belongsTo(Foldtype::class, 'foldtype_id', 'id');
    }

    public function breed()
    {
        return $this->hasMany(Breed::class, 'sheep_id', 'id');
    }

    public function sheepTreatments()
    {
        return $this->hasMany(SheepTreatment::class, 'sheep_id', 'id');
    }

    public function sheepCares()
    {
        return $this->hasMany(SheepCare::class, 'sheep_id', 'id');
    }

    public function getRouteKeyName()
    {
        return 'code';
    }
}
