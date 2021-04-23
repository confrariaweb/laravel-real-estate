<?PHP

namespace ConfrariaWeb\RealEstate\Repositories;

use ConfrariaWeb\RealEstate\Contracts\PropertyFeatureContract;
use ConfrariaWeb\RealEstate\Models\PropertyFeature;
use ConfrariaWeb\Vendor\Traits\RepositoryTrait;

class PropertyFeatureRepository implements PropertyFeatureContract
{
    use RepositoryTrait;

    function __construct(PropertyFeature $feature)
    {
        $this->obj = $feature;
    }

}