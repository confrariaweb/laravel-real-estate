<?PHP

namespace ConfrariaWeb\RealEstate\Repositories;

use ConfrariaWeb\RealEstate\Contracts\PropertyBusinessContract;
use ConfrariaWeb\RealEstate\Models\PropertyBusiness;
use ConfrariaWeb\Vendor\Repositories\Repository;

class PropertyBusinessRepository extends Repository implements PropertyBusinessContract
{
    function __construct(PropertyBusiness $propertyBusiness)
    {
        $this->obj = $propertyBusiness;
    }

}