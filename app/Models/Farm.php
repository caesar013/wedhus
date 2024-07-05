<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Farm extends Model
{
    use HasFactory, Sluggable;

    protected $guarded = [];

    public function sheep()
    {
        return $this->hasMany(Sheep::class, 'farm_id', 'id');
    }

    public function foldtype()
    {
        return $this->belongsTo(FoldType::class, 'foldtype_id', 'id');
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'slugfarm'
            ]
        ];
    }

    public function getSlugfarmAttribute()
    {
        return 'farm-' . $this->foldtype->name;
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
