<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SheepTreatment extends Model
{
    use HasFactory, Sluggable;

    protected $guarded = [];

    public function sheep()
    {
        return $this->belongsTo(Sheep::class, 'sheep_id', 'id');
    }

    public function disease()
    {
        return $this->belongsTo(Disease::class, 'disease_id', 'id');
    }

    public function treatment()
    {
        return $this->belongsTo(Treatment::class, 'treatment_id', 'id');
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'slugtreatment'
            ]
        ];
    }

    public function getSlugtreatmentAttribute()
    {
        return 'treatment-' . $this->treatment->name . '-for-' . $this->sheep->code;
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
