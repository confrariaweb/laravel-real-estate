<?PHP

namespace ConfrariaWeb\RealEstate\Services;

use ConfrariaWeb\RealEstate\Contracts\PropertyTypeContract;
use ConfrariaWeb\Vendor\Traits\ServiceTrait;

class PropertyTypeService {

    use ServiceTrait;

    public function __construct(PropertyTypeContract $propertyType)
    {
        $this->obj = $propertyType;
    }

}
