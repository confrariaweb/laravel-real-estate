<?php

namespace ConfrariaWeb\RealEstate\Databases\Seeds;

use Carbon\Carbon;
use ConfrariaWeb\RealEstate\Models\PropertyBusiness;
use ConfrariaWeb\RealEstate\Models\PropertyFeature;
use ConfrariaWeb\RealEstate\Models\PropertyType;
use Illuminate\Database\Seeder;

class RealEstateSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->createPropertyBusiness();
        $this->createPropertyTypes();
        $this->createPropertyFeatures();
    }

    public function createPropertyTypes(){
        $types = [
            [
                'name' => 'Apartamento',
                'slug' => 'apartamento',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Casa',
                'slug' => 'casa',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];
        foreach ($types as $type) {
            if (PropertyType::where('name', $type['name'])->doesntExist()) {
                PropertyType::create($type);
            }
        }
    }

    public function createPropertyFeatures(){
        $features = [
            [
                'name' => 'Portaria 24Hrs',
                'slug' => 'portaria24hrs',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Playground',
                'slug' => 'playground',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];
        foreach ($features as $feature) {
            if (PropertyFeature::where('name', $feature['name'])->doesntExist()) {
                PropertyFeature::create($feature);
            }
        }
    }

    public function createPropertyBusiness(){
        $business = [
            [
                'name' => 'Vender',
                'slug' => 'vender',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Alugar',
                'slug' => 'alugar',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Novo',
                'slug' => 'novo',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];
        foreach ($business as $b) {
            if (PropertyBusiness::where('name', $b['name'])->doesntExist()) {
                PropertyBusiness::create($b);
            }
        }
    }
}
