<?PHP

namespace ConfrariaWeb\RealEstate\Repositories;

use ConfrariaWeb\RealEstate\Contracts\PropertyTypeContract;
use ConfrariaWeb\RealEstate\Models\PropertyType;
use ConfrariaWeb\Vendor\Traits\RepositoryTrait;

class PropertyTypeRepository implements PropertyTypeContract
{
    use RepositoryTrait;

    function __construct(PropertyType $propertyTypes)
    {
        $this->obj = $propertyTypes;
    }

}