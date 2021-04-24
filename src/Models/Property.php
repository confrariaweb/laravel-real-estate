<?php

namespace ConfrariaWeb\RealEstate\Models;

use ConfrariaWeb\File\Traits\FileTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Property extends Model
{
    use HasFactory, SoftDeletes, FileTrait;

    protected $table = 'realestate_properties';

    protected $fillable = [
        'code',
        'title', 
        'slug', 
        'type_id', 
        'user_id',
        'description',
        'options'
    ];

    protected $casts = [
        'options' => 'collection'
    ];

    public function accounts()
    {
        return $this->belongsToMany('ConfrariaWeb\Account\Models\Account', 'account_realestate_property', 'property_id', 'account_id');
    }

    public function business()
    {
        return $this->belongsToMany(PropertyBusiness::class, 'realestate_property_business', 'property_id', 'business_id');
    }

    public function features()
    {
        return $this->belongsToMany(PropertyFeature::class, 'realestate_property_feature', 'property_id', 'feature_id');
    }

    public function type()
    {
        return $this->belongsTo(PropertyType::class, 'realestate_properties_types', 'property_id', 'type_id');
    }

    /* Mutators */

    public function getBusinessOptionsAttribute()
    {
        return $this->options->get('business')?? NULL;
    }

    public function getStreetAttribute()
    {
        return $this->options->get('address')['street']?? NULL;
    }

    public function setStreetAttribute($value)
    {
        $this->attributes['options']['address']['street'] = $value;
    }

    public function getNumberAttribute()
    {
        return $this->options->get('address')['number']?? NULL;
    }

    public function setNumberAttribute($value)
    {
        $this->attributes['options']['address']['number'] = $value;
    }

    public function getComplementAttribute()
    {
        return $this->options->get('address')['complement']?? NULL;
    }

    public function setComplementAttribute($value)
    {
        $this->attributes['options']['address']['complement'] = $value;
    }

    public function getDistrictAttribute()
    {
        return $this->options->get('address')['district']?? NULL;
    }

    public function setDistrictAttribute($value)
    {
        $this->attributes['options']['address']['district'] = $value;
    }

    public function getCityAttribute()
    {
        return $this->options->get('address')['city']?? NULL;
    }

    public function setCityAttribute($value)
    {
        $this->attributes['options']['address']['city'] = $value;
    }

    public function getStateAttribute()
    {
        return $this->options->get('address')['state']?? NULL;
    }

    public function setStateAttribute($value)
    {
        $this->attributes['options']['address']['state'] = $value;
    }

    public function getCountryAttribute()
    {
        return $this->options->get('address')['country']?? NULL;
    }

    public function setCountryttribute($value)
    {
        $this->attributes['options']['address']['country'] = $value;
    }

    public function getZipCodeAttribute()
    {
        return $this->options->get('address')['zip_code']?? NULL;
    }

    public function setZipCodeAttribute($value)
    {
        $this->attributes['options']['address']['zip_code'] = $value;
    }

}
