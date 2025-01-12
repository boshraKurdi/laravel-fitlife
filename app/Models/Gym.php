<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Gym extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'name',
        'description',
        'description_ar',
        'open',
        'close',
        'type',
        'price',
        'lat',
        'lon',
        'address'
    ];

    public function section()
    {
        return $this->belongsToMany(
            Section::class,
            'gym_sections',
            'gym_id',
            'section_id'
        );
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('gyms')->singleFile();
    }
}
