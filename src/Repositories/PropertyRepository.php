<?PHP

namespace ConfrariaWeb\RealEstate\Repositories;

use ConfrariaWeb\RealEstate\Contracts\PropertyContract;
use ConfrariaWeb\RealEstate\Models\Property;
use ConfrariaWeb\Vendor\Traits\RepositoryTrait;

class PropertyRepository implements PropertyContract
{
    use RepositoryTrait;

    function __construct(Property $property)
    {
        $this->obj = $property;
    }

    protected function sync($obj, $data)
    {
        if (isset($data['business'])) {
            $obj->business()->sync($data['business']);
        }
        if (isset($data['features'])) {
            $obj->features()->sync($data['features']);
        }
    }

}