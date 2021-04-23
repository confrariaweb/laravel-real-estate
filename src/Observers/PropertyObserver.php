<?php

namespace ConfrariaWeb\RealEstate\Observers;

use ConfrariaWeb\RealEstate\Models\Property;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PropertyObserver
{

    public function creating(Property $property)
    {
        $property->user_id = $property->user_id?? Auth::id();
        $property->slug = $property->slug?? Str::slug($property->title);
    }

}