<?php

namespace ConfrariaWeb\RealEstate\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Response;

class PropertyController extends Controller
{

    public $data;

    /**
     * DomainController constructor.
     */
    public function __construct()
    {
        $this->data = [];
        $this->data['features'] = resolve('PropertyFeatureService')->pluck();
        $this->data['business'] = resolve('PropertyBusinessService')->pluck();
        $this->data['types'] = resolve('PropertyTypeService')->pluck();
    }

    public function datatables()
    {
        $properties = resolve('PropertyService')->all();
        return datatables::of($properties)
            ->addColumn('type', function ($property) {
                return $property->type->name?? NULL;
            })
            ->addColumn('action', function ($property) {
                return '<div class="btn-group btn-group-sm float-right" role="group">                
                <a href="'.route('dashboard.real-estate.properties.show', $property->id).'" class="btn btn-info">
                    <i class="glyphicon glyphicon-eye"></i> Ver
                </a>
                <a href="'.route('dashboard.real-estate.properties.edit', $property->id).'" class="btn btn-primary">
                    <i class="glyphicon glyphicon-edit"></i> Editar
                </a>
                <a class="btn btn-danger" href="'.route('dashboard.real-estate.properties.destroy', $property->id).'" onclick="event.preventDefault();
                    document.getElementById(\'properties-destroy-form-' . $property->id . '\').submit();">
                    Deletar
                </a>
                <form id="properties-destroy-form-' . $property->id . '" action="'.route('dashboard.real-estate.properties.destroy', $property->id).'" method="POST" style="display: none;">
                    <input name="_method" type="hidden" value="DELETE">    
                    <input name="_token" type="hidden" value="'. csrf_token() .'">
                    <input type="hidden" name="id" value="'.$property->id.'">
                </form>
            </div>';
            })
            ->make();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view(config('cw_real_estate.views', 'real-estate::') . 'properties.index', $this->data);
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
    public function store(Request $request)
    {
        $data = $request->all();
        $property = resolve('PropertyService')->create($data);
        if($property->get('error')){
            return back()->withInput();
        }
        $id = $property->get('obj')->id;        
        return redirect()
            ->route('dashboard.real-estate.properties.edit', $id)
            ->with('status', $property->get('status'));
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
        $this->data['property'] = resolve('PropertyService')->find($id);
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
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $property = resolve('PropertyService')->update($data, $id);
        return redirect()
            ->route('dashboard.real-estate.properties.edit', $id)
            ->with('status', $property->get('status'));
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
