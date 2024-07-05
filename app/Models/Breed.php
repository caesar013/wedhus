<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Breed extends Model
{
    use HasFactory, Sluggable;

    protected $guarded = [];

    public function maleSheep()
    {
        return $this->belongsTo(Sheep::class, 'sheep_id', 'id');
    }

    public function femaleSheep()
    {
        return $this->belongsTo(Sheep::class, 'sheep_id', 'id');
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
