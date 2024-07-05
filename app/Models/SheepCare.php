<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SheepCare extends Model
{
    use HasFactory, Sluggable;

    protected $guarded = [];

    public function sheep()
    {
        return $this->belongsTo(Sheep::class, 'sheep_id', 'id');
    }

    public function care()
    {
        return $this->belongsTo(Care::class, 'care_id', 'id');
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'slugcare'
            ]
        ];
    }

    public function getSlugcareAttribute()
    {
        return 'care-' . $this->care->name . '-for-' . $this->sheep->code;
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
