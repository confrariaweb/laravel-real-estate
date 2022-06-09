<?php

namespace ConfrariaWeb\RealEstate\Controllers;

use App\Http\Controllers\Controller;
use ConfrariaWeb\Location\Resources\CountryResource;
use ConfrariaWeb\Location\Resources\StateResource;
use ConfrariaWeb\Location\Resources\CityResource;
use ConfrariaWeb\Location\Resources\DistrictResource;
use ConfrariaWeb\Location\Services\CountryService;
use ConfrariaWeb\Location\Services\CityService;
use ConfrariaWeb\Location\Services\DistrictService;
use ConfrariaWeb\Location\Services\StateService;
use Illuminate\Http\Request;

class LocationController extends Controller
{

    public $countryService;
    public $stateService;
    public $cityService;
    public $districtService;

    public function __construct(
        CountryService $countryService,
        StateService $stateService,
        CityService $cityService,
        DistrictService $districtService
    ){
        $this->countryService = $countryService;
        $this->stateService = $stateService;
        $this->cityService = $cityService;
        $this->districtService = $districtService;
    }
    
    public function countries(Request $request){
        $countries = $this->countryService->all();
        if($request->ajax()){
            return CountryResource::collection($countries);
        }
        return $countries;
    }

    public function states(Request $request, $country_id){
        $states = $this->stateService->all($country_id);
        if($request->ajax()){
            return StateResource::collection($states);
        }
        return $states;
    }

    public function cities(Request $request, $state_id){
        $cities = $this->cityService->all($state_id);
        return CityResource::collection($cities);
        if($request->ajax()){
            return CityResource::collection($cities);
        }
        return $cities;
    }

    public function districts(Request $request, $city_id){
        $districts = $this->districtService->all($city_id);
        if($request->ajax()){
            return DistrictResource::collection($districts);
        }
        return $districts;
    }

}
