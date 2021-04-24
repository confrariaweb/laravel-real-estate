<?PHP

namespace ConfrariaWeb\RealEstate\Services;

use ConfrariaWeb\RealEstate\Contracts\PropertyBusinessContract;
use ConfrariaWeb\Vendor\Services\Service;

class PropertyBusinessService extends Service{

    public function __construct(PropertyBusinessContract $propertyBusiness)
    {
        parent::__construct($propertyBusiness);
    }

}
