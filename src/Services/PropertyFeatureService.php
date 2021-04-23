<?PHP

namespace ConfrariaWeb\RealEstate\Services;

use ConfrariaWeb\RealEstate\Contracts\PropertyFeatureContract;
use ConfrariaWeb\Vendor\Traits\ServiceTrait;

class PropertyFeatureService {

    use ServiceTrait;

    public function __construct(PropertyFeatureContract $feature)
    {
        $this->obj = $feature;
    }

}
