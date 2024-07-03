<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SheepCare extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function sheep()
    {
        return $this->belongsTo(Sheep::class, 'sheep_id', 'id');
    }

    public function care()
    {
        return $this->belongsTo(Care::class, 'care_id', 'id');
    }
}
