<?PHP

namespace ConfrariaWeb\RealEstate\Services;

use ConfrariaWeb\RealEstate\Contracts\PropertyContract;
use ConfrariaWeb\Vendor\Services\Service;

class PropertyService extends Service{

    public function __construct(PropertyContract $property)
    {
        parent::__construct($property);
    }

    public function create(array $data)
    {
        $property = parent::create($data);
        $this->upload($property, $data);
        return $property;
    }

    public function update($data, $id)
    {
        $property = parent::update($data, $id);
        $this->upload($property, $data);
        return $property;
    }

    public function upload($property, $data)
    {
        if(isset($data['files']) && !$property->get('error')){
            $files = [];
            $p = $property->get('obj');
            foreach($data['files'] as $file){
                $files[] = resolve('FileService')->upload($file, [
                    'path' => 'real-estate/properties/files/' . $p->id,
                ]);
            }
            $p->files()->createMany($files);
        }
    }

}