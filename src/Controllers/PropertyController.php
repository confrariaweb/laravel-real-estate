<?php

namespace ConfrariaWeb\RealEstate\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use ConfrariaWeb\Location\Models\Country;
use ConfrariaWeb\Location\Models\State;
use ConfrariaWeb\RealEstate\Models\PropertyFeature;
use ConfrariaWeb\RealEstate\Models\PropertyFinality;
use ConfrariaWeb\RealEstate\Models\PropertyType;
use ConfrariaWeb\RealEstate\Requests\StorePropertyRequest;
use ConfrariaWeb\RealEstate\Requests\UpdatePropertyRequest;
use ConfrariaWeb\RealEstate\Services\PropertyService;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Response;

class PropertyController extends Controller
{

    public $data;
    public $propertyService;

    public function __construct(PropertyService $propertyService)
    {
        $this->data = [];
        $this->propertyService = $propertyService;
        $this->data['types'] = PropertyType::pluck('name', 'id');
        $this->data['finalities'] = PropertyFinality::pluck('name', 'id');
        $this->data['features'] = PropertyFeature::pluck('name', 'id');
        $this->data['countries'] = Country::pluck('name', 'id');
        $this->data['states'] = State::pluck('name', 'id');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['properties'] = $this->propertyService->paginate();
        return view('real-estate::properties.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view(config('cw_real_estate.views', 'real-estate::') . 'properties.create', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePropertyRequest $request)
    {
        $property = $this->propertyService->create($request->all());
        if(!$property){
            return back()->withInput();
        }
        return redirect()
            ->route('dashboard.properties.edit', $property->id)
            ->with('status', 'Propriedade cadastrada com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->data['property'] = $this->propertyService->find($id);
        $this->data['localization'] = $this->data['property']->localization;
        abort_unless($this->data['property'], 404);
        return view(config('cw_real_estate.views', 'real-estate::') . 'properties.edit', $this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePropertyRequest $request, $id)
    {
        $property = $this->propertyService->update($request->all(), $id);
        return redirect()
            ->route('dashboard.real-estate.properties.edit', $id)
            ->with('status', 'Propriedade atualizada com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function destroyFile(Request $request, $id){
        resolve('FileService')->destroy($id);
        if($request->ajax()){
            return Response::json(['success' => true], 200);
        }
    }
}
