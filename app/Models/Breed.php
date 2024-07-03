<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Breed extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function maleSheep()
    {
        return $this->belongsTo(Sheep::class, 'sheep_id', 'id');
    }

    public function femaleSheep()
    {
        return $this->belongsTo(Sheep::class, 'sheep_id', 'id');
    }
}
