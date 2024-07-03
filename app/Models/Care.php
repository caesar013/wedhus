<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Care extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function sheepCares()
    {
        return $this->hasMany(SheepCare::class, 'care_id', 'id');
    }
}
