<?php

namespace ConfrariaWeb\RealEstate\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PropertyBusiness extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'realestate_properties_business';

    protected $fillable = ['name', 'slug'];

    public function properties()
    {
        return $this->belongsToMany(Property::class);
    }
}
