<?php

namespace ConfrariaWeb\RealEstate\Observers;

use ConfrariaWeb\RealEstate\Models\PropertyType;
use Illuminate\Support\Str;

class PropertyTypeObserver
{

    public function creating(PropertyType $propertytype)
    {
        dd('teste');
        $slug = request()->slug?? null;
        if(empty($slug) && !empty($name)){
            $slug = Str::slug($name);
        }
        request()->slug = $slug;
    }

}