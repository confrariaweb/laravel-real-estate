<?php

namespace ConfrariaWeb\RealEstate\Models;

use ConfrariaWeb\File\Traits\FileTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Property extends Model
{
    use HasFactory, SoftDeletes, FileTrait;

    protected $fillable = [
        'title', 
        'slug', 
        'type_id', 
        'user_id'
    ];

    public function type()
    {
        return $this->belongsTo(PropertyType::class);
    }

    public function features()
    {
        return $this->belongsToMany(PropertyFeature::class, 'property_feature', 'property_id', 'feature_id');
    }
}
