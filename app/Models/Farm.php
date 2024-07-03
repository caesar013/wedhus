<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Farm extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function sheep()
    {
        return $this->hasMany(Sheep::class, 'sheep_id', 'id');
    }

    public function foldtype()
    {
        return $this->belongsTo(FoldType::class, 'foldtype_id', 'id');
    }
}
